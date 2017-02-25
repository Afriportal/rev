<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ph_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function get_all_ph() {
		return $this->db->get('users');
	}

	function get_process_id() {
		do {
			$did = random_string('nozero', 6);
			$this->db->where('did = ', $did);
			$this->db->from('request');
			$num = $this->db->count_all_results();
		} while ($num >= 1);
			return $did;
	}

	function get_minimun_ph( $id ) {
		$query = "SELECT MAX(`amount`) AS amount
					FROM `donation`
					WHERE `usr_id` = ? 
				";

		$res = $this->db->query( $query, $id );
		foreach( $res->result() as $row ) {
			$amount = $row->amount;
		}
		return $amount;
	}
	
	public function provide_help($data) {

		if ($this->db->insert('donation', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function has_order( $id ){
		$this->db->where('usr_id = ', $id);
		$this->db->from('donation');
		if( $this->db->count_all_results() > 0 ) {
			return true;
		}else {
			return false;
		}
	}

	// Get details of the merged members

	public function sent( $id ) {
		//SELECT * FROM `merge` WHERE `payer_id` = $id
		//$return = array();
		$query = "SELECT * FROM `merge` WHERE `payer_id` = ? ";
		$result = $this->db->query( $query, array( $id ));
		
		if( $result ) {
			return $result ;
		}else {
			return false;
		}
	}


	public function receive( $id ) {
		//SELECT * FROM `merge` WHERE `payer_id` = $id
		//$return = array();
		$query = "SELECT * FROM `merge` WHERE `receiver_id` = ? ";
		$result = $this->db->query( $query, array( $id ));
		if( $result ) {
			return $result ;
		}else {
			return false;
		}

		//"SELECT * FROM `users` WHERE `receiver_id` = ? "

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

	function upload_pop( $data ) {

		$where = array('payer_id' => $data['payer_id'], 'did' => $data['did']);

		$this->where( $where );
		if( $this->db->update('merge', array('pop', $data['pop']))) {
			return true;
		} else {
			return false;
		}

	}
}