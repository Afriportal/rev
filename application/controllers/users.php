<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url', 'string','security', 'language') );
		$this->load->helper('file'); // for html emails
		$this->load->helper('language');
		$this->load->model(array('Users_model', 'Ph_model'));
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
		/*if( $this->session->userdata('usr_bank') == '0' ) {
			// navigate them to complete registration
			$data['id'] = $this->session->userdata('usr_id');
			$this->load->view('common/login_header');
			$this->load->view('nav/login_nav');
			$this->load->view('users/complete_registration', $data);
			$this->load->view('common/footer');
		} else {
			// Request for a unique ph id for tracking
		*/
			$data['order'] = $this->Ph_model->has_order($this->session->userdata('usr_id'));
			$this->load->view('common/login_header');
			$this->load->view('nav/login_nav');
			$this->load->view('users/home', $data);
			$this->load->view('common/footer');
		//}
	}


	public function sent() {

		$id = $this->session->userdata('usr_id');
		//$amount = $this->Ph_model->get_minimun_ph($id);
		$data['order'] = $this->Ph_model->has_order($id );
		//$data['donator'] = $this->Donation_model->get_donators();
		$data['sent'] = $this->Ph_model->sent($id);
		
		$this->load->view('common/login_header',$data);
		$this->load->view('nav/login_nav', $data);
		$this->load->view('users/sent_payment', $data);

	}


	public function received() {

		$id = $this->session->userdata('usr_id');
		$amount = $this->Ph_model->get_minimun_ph($id);
		$data['order'] = $this->Ph_model->has_order($id);
		$data['receive'] = $this->Ph_model->receive( $id );

		$this->load->view('common/login_header');
		$this->load->view('nav/login_nav');
		$this->load->view('users/received_payments', $data);
		$this->load->view('common/footer');

	}

	public function pay_notification() {
		$id = $this->session->userdata('usr_id');
		$data['pay_not'] = $this->Ph_model->pay_not( $id );

		$this->load->view('common/login_header',$data);
		$this->load->view('nav/login_nav', $data);
		$this->load->view('users/sent_payment', $data);
		$this->load->view('common/footer', $data);
	}

	/*public function merged() {

		$id = $this->session->userdata('usr_id');


	}
	*/

}