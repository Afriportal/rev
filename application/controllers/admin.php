<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MY_Controller {
	function __construct() {
		parent::__construct();
			$this->load->helper('file'); // for html emails
			$this->load->model(array('Admin_model','Donation_model'));
			$this->load->helper(array('string', 'date','url'));
			$this->load->library(array('pagination'));
			//$this->load->model('Password_model');
			/*if ( ($this->session->userdata('logged_in') == FALSE) || ($this->session->userdata('usr_access_level') != 1) ) {
				redirect('signin');
			}
			*/
			if ( ($this->session->userdata('logged_in') == FALSE) ) {
				redirect('signin');
			}
		}

	//prefilled
	public function index() {
		//$data['page_heading'] = 'Viewing users';
		$data['query'] = $this->Admin_model->get_all_users();
		$this->load->view('common/header', $data);
		$this->load->view('nav/admin_nav', $data);
		$this->load->view('admin/new', $data);
		$this->load->view('common/footer', $data);
	}

	public function pair_members() {
		$data['page_heading1'] = 'Pair this Member'; 
		$data['page_heading2'] = 'With this Member';
		// Suppose to return a uniqe ID
		// Loop through
		$data['donator'] = $this->Donation_model->get_donators();
		$data['receiver'] = $this->Donation_model->get_receivers();
		$this->load->view('common/header', $data);
		$this->load->view('nav/admin_nav', $data);
		$this->load->view('admin/pair_members', $data);
		$this->load->view('common/footer', $data);
	}

	public function ban() {

		$data = array(
			'usr_id' => $this->input->post('usr_id')
		);

		if($this->Admin_model->ban( $data )) {
			redirect('admin');
		}
	}

	public function unban() {

		$data = array(
			'usr_id' => $this->input->post('usr_id')
		);
		if($this->Admin_model->unban( $data )) {
			$this->session->set_flashdata('msg', "Success: User has been successfully unbanned.");	
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function pairing() {

		if( empty($this->input->post()) ) {
			$this->session->set_flashdata('msg', "Error: you have to match members before clicking pair.");			
			redirect($_SERVER['HTTP_REFERER']);
		}
		// chech if the ph is more than the receiving
		$data['payers'] = $this->input->post('payers');
		$data['receiver'] = $this->input->post('receiver'); // donation id
		$data['receiver_id'] = $this->input->post('receiver_id'); // user id

		if( $this->Donation_model->receive_amount_check( $data ) ) {
			//echo '<script>alert("Error: The expected receiving amount is greater than the donating money.");</script>';
			$this->session->set_tempdata('msg', "Error: The expected receiving amount is greater than the donating money", 180);
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}

		// check if the receiver has been marged
		if( $this->Donation_model->has_been_merged( $data )) {
			echo '<script>alert("Info: The receiver has been merged, payment yet to be completed.");</script>';
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}

		if( $this->Donation_model->send_request( $data ) ) {
			$this->session->set_flashdata('msg', "The receiver has been matched with the donator(s).");			
			redirect($_SERVER['HTTP_REFERER']);
		}else {
			echo '<script>alert("Info: There was an error updating the donator(s) details.");</script>';
			redirect($_SERVER['HTTP_REFERER']);			
		}

	}

	public function reported() {
		$data['reported'] = $this->Admin_model->reported();
		$this->load->view('common/header', $data);
		$this->load->view('nav/admin_nav', $data);
		$this->load->view('admin/reported', $data);
		$this->load->view('common/footer', $data);
	}

	public function search() {

		$this->form_validation->set_rules('search', 'Search fields', 'trim|required|xss_clean');
		$q = $this->input->post('search');

		if( $this->form_validation->run() == FALSE ) {
			$data['msg'] = 'Wrong input field';
			$this->load->view('common/header', $data);
			$this->load->view('nav/admin_nav', $data);
			$this->load->view('admin/search', $data);
			$this->load->view('common/footer', $data);
		}else {
			$data['search'] = $this->Admin_model->get_user_details($q);
			$this->load->view('common/header', $data);
			$this->load->view('nav/admin_nav', $data);
			$this->load->view('admin/search', $data);
			$this->load->view('common/footer', $data);
		}

	}
		public function delete_user() {
			// Set validation rules
			$this->form_validation->set_rules('id', $this->lang->line('usr_id'), 'required|min_length[1]|max_length[11]|integer|is_natural');
			if ($this->input->post()) {
				$id = $this->input->post('id');
			} else {
				$id = $this->uri->segment(3);
			}
			$data['page_heading'] = 'Confirm delete?';
				if ($this->form_validation->run() == FALSE) { // First load, or problem with form

			$data['query'] = $this->Users_model->get_user_details($id);
				$this->load->view('common/header', $data);
				$this->load->view('nav/top_nav', $data);
				$this->load->view('users/delete_user', $data);
				$this->load->view('common/footer', $data);
			} else {
					if ($this->Users_model->delete_user($id)) {
						redirect('users');
					}
				}
		}
		
		public function pwd_email() {
			$id = $this->uri->segment(3);
			send_email($data, 'reset');
			redirect('users');
		}

		public function signout() {
		$this->session->sess_destroy();
		redirect ('signin');
	}
}