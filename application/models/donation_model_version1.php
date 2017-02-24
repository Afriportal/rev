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
					AND `acknowledge` = ? 
					AND `type` = ? 
					AND `users`.`usr_is_active` = ? 
					ORDER BY `created_at` ASC";

		$result = $this->db->query( $query, array('0', '1', '1'));
		if( $result ){
			return $result;
		} else {
			return false;
		}

	}

	function get_receivers() {

		$query = "SELECT * FROM `donation`, `users`
					WHERE `donation`.`usr_id` = `users`.`usr_id`
					AND `acknowledge` = ? 
					AND `type` = ? 
					AND `users`.`usr_is_active` = ? 
					ORDER BY `created_at` ASC";

		$result = $this->db->query( $query, array('0', '2', '1'));
		if( $result ){
			return $result;
		} else {
			return false;
		}

	}

	function receive_amount_check( $data ) {
		
		$exp_amt = $sum = '';
		$receiver_query = "SELECT `expecting`
							FROM `donation`
							WHERE `acknowledge` = ? 
							AND `did` = ? 
							AND `type` = ? 
							LIMIT 1";
		$res = $this->db->query( $receiver_query, array('0', $data['receiver'], '2') );
		
		foreach ($res->result() as $row) {
			$exp_amt = $row->expecting;
		}

		$query = "SELECT `amount` FROM `donation` WHERE `did` = ? AND `acknowledge` = ? AND `type` = ? ";
		$sums = '';
		
		foreach ($data['payers'] as $payer ) {
			//$x = $payer;

			$res = $this->db->query( $query , array($payer, '0', '1'));
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
					WHERE `did` = ?
					AND `receiver_id` = ? 
					AND `completed` = ? ";
		$res = $this->db->query($query, array($data['receiver'], $data['receiver_id'], '0'));
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
		foreach( $data['payers'] as $payer ) {
			$amount = '';
			$res = $this->db->query($query, array( $payer ));
			foreach( $res->result() as $row ) {
				$value = array(
					'did' => $row->did,
					'payer_id' => $row->usr_id,
					'receiver_id' => $data['receiver_id'],
					'amount' => $row->amount,
					//'due_date' => date_add($row->created_at, date_interval_create_from_date_string('10 days'))
					//'due_date' => "DATE_ADD(CURDATE() + INTERVAL 3 DAY)"
					'due_date' => date('Y-m-d h:i:s', strtotime(date('Y-m-d h:i:s'). " + 3 days"))
				);
				$amount = $row->expecting;
				$this->db->insert('merge', $value);
			}
		}
			$request = array(
				'did' => $data['receiver'],
				'usr_id' => $data['receiver_id'],
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