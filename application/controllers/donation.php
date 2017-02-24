<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ph extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->helper('file'); // for html emails
		$this->load->helper('language');
		$this->load->model('Users_model');
		$this->load->library('session');
		// Load language file
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert	alert-danger" role="alert">', '</div>');
		if ( ($this->session->userdata('logged_in') == FALSE) || (!$this->session->userdata('usr_access_level') >= 2) ) {
			redirect('signin/signout');
		}
	}

	public function index() {

		// if registration coomplete goto homepage
		if( $this->session->userdata('usr_bank') == '0' ) {
			// navigate them to complete registration
			$data['id'] = $this->session->userdata('usr_id');
			$this->load->view('common/login_header');
			$this->load->view('nav/login_nav');
			$this->load->view('users/complete_registration', $data);
			$this->load->view('common/footer');
		} else {
			$data = $this->session->userdata();
			$this->load->view('common/login_header');
			$this->load->view('nav/login_nav');
			$this->load->view('users/received_payments', $data);
			$this->load->view('common/footer');
		}
	}

}