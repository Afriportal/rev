<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form','url','security','captcha','string'));
		$this->lang->load('en_admin', 'english');
	}

	public function index() {
		if ($this->session->userdata('logged_in') == TRUE) {
			// we make admin user_access_level to be 1			
			if ($this->session->userdata('usr_access_level') == 1) {
				redirect('admin'); // Goto admin controller
			} else {
				redirect('users'); //Go to normal users controller
			}
		} else {
			$data['title'] = 'Welcome to i-Revolution | Everybody is a king';
			$this->load->view('common/home_header', $data);
			$this->load->view('welcome', $data);
		}
	}

	public function faq(){
		$data['title'] = 'i-Revolution | Frequently Asked Question';
	    $this->load->view('common/home_header',$data);
		$this->load->view('faq', $data);
	}

	public function how(){
		$data['title'] = 'i-Revolution | How it works';
	    $this->load->view('common/home_header', $data);
		$this->load->view('how-it-works', $data);
	}
}