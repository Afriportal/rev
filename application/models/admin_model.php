<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
	function __construct() {
		parent::__construct();
		// PLEASE NOTE THE FOLLOWING TYPE
		// donating = 1
		// receiving = 2
	}

	function get_all_users() {
		//Order By DESC
		$this->db->where(array('usr_is_active' => 1, 'usr_access_level' => 2));
		$result = $this->db->get('users');
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}


	function ban( $data ) {

		$query = "SELECT `usr_is_active`
					FROM `users`
					WHERE `usr_id` = ?";
		$res = $this->db->query($query, array($data['usr_id']));
		foreach ($res->result() as $row) {
			$bool = $row->usr_is_active;
		}
		$value = '';
		if ($bool == 0) {
			$value = 1;
		} else {
			$value = 0;
		}
		$this->db->where('usr_id', $data['usr_id'] );
		if( $this->db->update('users', array('usr_is_active' => $value ))) {
			return true;
		}else {
			return false;
		}
	}

	function unban( $data ) {

		$this->db->where('usr_id', $data['usr_id'] );
		if( $this->db->update('users', array('usr_is_active' => 1 ))) {
			return true;
		}else {
			return false;
		}
	}

	function reported() {
		//Order By DESC
		$this->db->where(array('usr_is_active' => 0));
		$result = $this->db->get('users');
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}

	function get_user_details( $q ) {
		//$sql ="SELECT * FROM `users` WHERE `usr_fname` =  OR `location` = "
		/*$query = $this->db->SELECT('*')
		     ->FROM('users')
		     ->like('usr_phone', $q, 'both')
		     ->or_like('usr_state', $q, 'both')
		     ->get();

		$result = $query->result_array();
		//print_r( $result  );
		//exit;
		*/
		$this->db->from('users');
		$this->db->like('usr_fname', $q , 'both');
		$this->db->or_like('usr_phone', $q , 'both');
		$this->db->or_like('usr_state', $q , 'both');
		$query = $this->db->get();

		if ($query) {
			return $query;
		} else {
			return false;
		}
	}

	function process_create_user($data) {
		if ($this->db->insert('users', $data)) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	function process_update_user($id, $data) {
		$this->db->where('usr_id', $id);
		if ($this->db->update('users', $data)) {
			return true;
		} else {
			return false;
		}
	}

	function get_user_details_by_email($email) {
		$this->db->where('usr_email', $email);
		$result = $this->db->get('users');
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}

	function delete_user($id) {
		if($this->db->delete('users', array('usr_id' => $id))) {
			return true;
		} else {
			return false;
		}
	}

	function make_code() {
		do {
			$url_code = random_string('alnum', 8);
			$this->db->where('usr_pwd_change_code = ', $url_code);
			$this->db->from('users');
			$num = $this->db->count_all_results();
		} while ($num >= 1);
			return $url_code;
	}
	
	function count_results($email) {
		$this->db->where('usr_email', $email);
		$this->db->from('users');
		return $this->db->count_all_results();
	}

	function update_user_password($data) {
		$this->db->where('usr_id', $data['usr_id']);
		if ($this->db->update('users', $data)) {
			return true;
		} else {
			return false;
		}
	}

	function does_code_match($data, $email) {
		$query = "SELECT COUNT(*) AS `count`
					FROM `users`
					WHERE `usr_pwd_change_code` = ?
					AND `usr_email` = ? ";
		$res = $this->db->query($query, array($data['code'], $email));
		foreach ($res->result() as $row) {
			$count = $row->count;
		}
		if ($count == 1) {
			return true;
		} else {
			return false;
		}
	}
	function update_user_code($data) {
		$this->db->where('usr_email', $data['usr_email']);
		if ($this->db->update('users', $data)) {
			return true;
		} else {
			return false;
		}
	}
}