<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ph extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url', 'string', 'security','file', 'language'));
		$this->load->model('Ph_model');
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
		// get the minimum the user has once provided
		
		$data['id'] = $id = $this->session->userdata('usr_id');
		$min_amount = $this->Ph_model->get_minimun_ph($id);
		$data['did'] = $this->Ph_model->get_process_id();

		$amount = $this->input->post('ph_amount');
		if( $min_amount > $amount ) {
			$this->session->set_flashdata('key', "You can not Provide Help less than &#8358;" . number_format($min_amount,2));			
			redirect($_SERVER['HTTP_REFERER']);
		}else {

			// Lets provide help
			$data = array(
				'did' => $data['did'],
				'usr_id' => $this->session->userdata('usr_id'), // Donating = 1  receiving = 2
				'amount' => $amount,
				'expecting' => $amount * 2			
			);

			if( $this->Ph_model->provide_help($data)) {
				$this->session->set_flashdata('key', 'Your request has been received, you will be matched very soon, Kindly chech your portal in 1-7 days, to avoid account de-activation');
				redirect($_SERVER['HTTP_REFERER']);	
			}

		}

	}

	public function do_upload() {
		//path to upload
		$upload_dir ='./upload/';
		$did = $img_dir_name = $this->input->post('popid');

	if (!mkdir($upload_dir.$img_dir_name)) {
		// Can't make upload directory
		echo 'There was an error making directory';
		redirect($_SERVER['HTTP_REFERER']);
		//$page_data = array('fail' => 'There was an error making directory','success' => false);
		//$this->load->view('common/login_header');
		//$this->load->view('nav/top_nav');
		//$this->load->view('users/sent_payment', $page_data);
		//$this->load->view('common/footer');
	}
		// set the configuration
		// die($this->input->post('img_count_limit'));
		$config['upload_path'] = $upload_dir.$img_dir_name;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '10000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		// upload here
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload() ) {
			die('Nothing here');
			// unset the error upload
			//unset($config['upload_path']);
			rmdir($upload_dir.$img_dir_name);
			// display all the errors encounter while uploading
			//$page_data = array('fail' => $this->upload->display_errors(), 'success' => false);
			echo $this->upload->display_errors();
			redirect($_SERVER['HTTP_REFERER']);
		} else { // No error uploading
			// $data = array('upload_data' => $this->upload->data());
			$image_data = $this->upload->data(); // get uploaded image information
			// save to database
			// @Incoming false or $img_url_code (anchor)
			$page_data['result'] = $this->Ph_model->upload_pop( 
				array('pop' => $image_data['file_name'], 
					//'img_dir_name' => $img_dir_name,
					'payer_id' => $this->session->userdate('usr_id'),
					'did' => $this->input->post('popid')) //////////////////////////
				);
			//$page_data['success'] = true;
			//$page_data['file_name'] = $image_data['file_name'];
			//$page_data['img_dir_name'] = $img_dir_name;
			if ($page_data['result'] == false) {
				// error while inserting into the database
				// unset the dir
				//unset($upload_dir.$img_dir_name);
				echo 'There was an error uploading your POP';
				redirect($_SERVER['HTTP_REFERER']);	
			} else {
				// $page_data['result'] = $img_url_code
				// success - display image and link
				$this->session->set_flashdata('key', 'Proof of payment has been successfully uploaded');
				redirect($_SERVER['HTTP_REFERER']);	
			}
		}
	}

	
}