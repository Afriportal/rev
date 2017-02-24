<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation_model extends CI_Model {
	function __construct() {
		parent::__construct();
		// PLEASE NOTE THE FOLLOWING TYPE
		// donating = 1
		// receiving = 2
	}


	function get_donators() {

		$query = "SELECT * FROM `donation`, `users`
					WHERE `donation`.`usr_id` = `users`.`usr_id` 
					AND `users`.`usr_is_active` = ? 
					ORDER BY `created_at` ASC";

		$result = $this->db->query( $query, array( '1'));
		if( $result ){
			return $result;
		} else {
			return false;
		}

	}

	function get_receivers() {

		$query = "SELECT * FROM `request`, `users`
					WHERE `request`.`usr_id` = `users`.`usr_id`
					AND `users`.`usr_is_active` = ? 
					ORDER BY `created_at` ASC";

		$result = $this->db->query( $query, array('1'));
		if( $result ){
			return $result;
		} else {
			return false;
		}

	}

	function receive_amount_check( $data ) {
		
		$exp_amt = $sum = '';
		$receiver_query = "SELECT `amount`
							FROM `request`
							WHERE `did` = ? 
							LIMIT 1";
		$res = $this->db->query( $receiver_query, array( $data['receiver']) );
		
		foreach ($res->result() as $row) {
			$exp_amt = $row->amount;
		}

		$query = "SELECT `amount` FROM `donation` WHERE `did` = ? ";
		$sums = '';
		
		foreach ($data['payers'] as $payer ) {
			//$x = $payer;

			$res = $this->db->query( $query , array($payer));
			foreach( $res->result() as $row ){
				$sums += $row->amount ;
			}
		}		
		//$return = 'Error: The receiver is expecting &#8358;' . $exp_amt . ' and you sending a total of &#8358;' .$sum;
		if( $exp_amt > $sums ) {
			return true;
		}else {
			return false;
		}
	}

	function has_been_merged($data) {

		$query = "SELECT COUNT(*) AS `count`
					FROM `merge`
					WHERE `did` = ?";
		$res = $this->db->query($query, array($data['receiver']));
		foreach ($res->result() as $row) {
			$count = $row->count;
		}
		if ($count >= 1) {
			return true;
		} else {
			return false;
		}
	}


	function send_request( $data ) {
		$query = "SELECT * FROM `donation` WHERE `did` = ? LIMIT 1";
		$users_info = "SELECT `usr_fname`,`usr_state`,`usr_phone`,`usr_bank_name`,`usr_account_name`,`usr_account_number` FROM `users` WHERE `usr_id` = ? LIMIT 1" ;
		$amount = $usr_fname = $usr_state = $usr_phone = $payee = $usr_bank_name = $usr_account_name = $usr_account_number ='';
		foreach( $data['payers'] as $payer ) {
			$res = $this->db->query($query, array( $payer ));
			foreach( $res->result() as $row ) {
				$users_info = $this->db->query($users_info, array( $data['receiver_id']));
				foreach( $users_info->result() as $users ) {
					$usr_fname = $users->usr_fname;
					$usr_state = $users->usr_state;
					$usr_phone = $users->usr_phone;
					$usr_bank_name = $users->usr_bank_name;
					$usr_account_name = $users->usr_account_name;
					$usr_account_number = $users->usr_account_number;
				}
				$value = array(
					'did' => $row->did,
					'payer_id' => $row->usr_id,
					'receiver_id' => $data['receiver_id'],
					'receiver_name' => $usr_fname,
					'receiver_state' => $usr_state,
					'receiver_phone' => $usr_phone,
					'receiver_bank' => $usr_bank_name,
					'receiver_account_name' => $usr_account_name,
					'receiver_account_no' => $usr_account_number,
					'amount' => $row->expecting,
					'due_date' => date('Y-m-d h:i:s', strtotime(date('Y-m-d h:i:s'). " + 3 days"))
				);
				if( $payee == $data['receiver_id'] ){
					return false;
					exit;
				}
				$payee = $row->usr_id;
				$amount = $row->expecting;
				$this->db->insert('merge', $value);
				$this->db->delete('donation', array('did' => $payer));
			}
		}


		$request = array(
			'did' => $data['receiver'], 
			'usr_id' => $payee,
			'amount' => $amount,
			'due_date' => date('Y-m-d h:i:s', strtotime(date('Y-m-d h:i:s'). " + 3 days"))
		);
		$this->db->insert('request', $request);

		
		if( $this->db->affected_rows() > 0 ) {
			return true;
		}else {
			return false;
		}
	}
	

	function ban( $data ) {
		$this->db->where('usr_id', $data['usr_id'] );
		if( $this->db->update('users', array('usr_is_active' => $data['usr_is_active'] ))) {
			return true;
		}else {
			return false;
		}
	}
}