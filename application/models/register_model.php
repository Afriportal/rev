<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}


	// Register post data 
	public function register_user($data) {

		if ($this->db->insert('users', $data)) {
			return true;
		} else {
			return false;
		}
	}

	// check for referral if exists

	/*

	public function does_referral_exist($email) {
		$this->db->where('usr_email', $email);
		$query = $this->db->get('users');
		return $query;
	}

	*/
}