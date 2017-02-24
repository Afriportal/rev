<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Signin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form','url','security','captcha','string'));
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
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

			// Set validation rules for view filters
			$this->form_validation->set_rules('usr_email', $this->lang->line('signin_email'), 'trim|required|valid_email|min_length[5]|max_length[125]');
			$this->form_validation->set_rules('usr_password', $this->lang->line('signin_password'), 'trim|required|min_length[5]|max_length[30]');
			//$this->form_validation->set_rules('userCaptcha', 'Captcha', 'trim|required|callback_check_captcha');
			//$userCaptcha = $this->input->post('userCaptcha');
			if ($this->form_validation->run() == FALSE) {
				/*
				// numeric random number for captcha
		      	$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
		      	// setting up captcha config
		      	$vals = array(
		            'word' => random_string('alnum', 6),
		            'img_path' => './captcha/',
		            'img_url' => base_url().'captcha/',
		            'font_path' => './bootstrap/fonts/Okay-Type-AlrightSans-Medium.otf',
		            'img_width' => 180,
		            'img_height' => 60,
		            'expiration' => 3600,
		            'word_length' => 20,
		            'font_size' => 20,
		            'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		            // White background and border, black text and red grid ;
		            // @TODO: Make the grid, site color feel 
			        'colors'        => array(
			                'background' => array(255, 255, 255),
			                'border' => array(255, 255, 255),
			                'text' => array(0, 0, 0),
			                'grid' => array(255, 40, 40)
			        )

		           );
		      	$data['captcha'] = create_captcha($vals); // Create the captcha
		      	$this->session->set_userdata('captchaWord',$data['captcha']['word']);
		      	*/

				$this->load->view('common/header');
				$this->load->view('nav/top_nav');
				//$this->load->view('users/signin', $data);
				$this->load->view('users/signin');
				$this->load->view('common/footer');
			} else {
				$usr_email = $this->input->post('usr_email');
				$password = $this->input->post('usr_password');
				$this->load->model('Signin_model');
				$query = $this->Signin_model->does_user_exist($usr_email);
				if ($query->num_rows() == 1) { // One matching row found
					foreach ($query->result() as $row) {
					// Call Encrypt library
					$this->load->library('encrypt');
					// Generate hash from a their password
					$hash = $this->encrypt->hash($password);
					if ($row->usr_is_active != 0) { // See if the user is active or not
						// Compare the generated hash with that in the database
						if ($hash != $row->usr_hash) {
							// Didn't match so send back to login
							$data['login_fail'] = true;
							$this->load->view('common/header');
							$this->load->view('nav/top_nav');
							$this->load->view('users/signin', $data);
							$this->load->view('common/footer');
						} else {
							$data = array(
								'usr_id' => $row->usr_id,
								'fullname' => $row->usr_fname,
								'usr_email' => $row->usr_email,
								'usr_access_level' => $row->usr_access_level,
								'usr_bank_details' => $row->usr_bank,
								'logged_in' => TRUE
							);
								// Save data to session
								$this->session->set_userdata($data);
			
								if ($data['usr_access_level'] == 2) {
									if( $data['usr_bank_details'] == 0 ){
										redirect('register/update_account');
									}else {
										redirect('users');
									}
								} else {
									redirect('admin');
								} 
						}
					} else {
							// User currently inactive
							$data['login_fail'] = true;
							$this->load->view('common/header');
							$this->load->view('nav/top_nav');
							$this->load->view('users/signin', $data);
							$this->load->view('common/footer');
						}
					}
				}else {
					$data['login_fail'] = true;
					$this->load->view('common/header');
					$this->load->view('nav/top_nav');
					$this->load->view('users/signin', $data);
					$this->load->view('common/footer');
				}
			}
		}
	}

	public function check_captcha($str){
	    $word = $this->session->userdata('captchaWord');
	    if(strcmp(strtoupper($str),strtoupper($word)) == 0){
	    	return true;
	    }
	    else{
	      $this->form_validation->set_message('check_captcha', 'Please enter correct captcha!');
	      return false;
	      
	    }
	}

	/*
		Forget password

	*/
	public function forgot_password() {
		//load the form
		$this->form_validation->set_rules('email', $this->lang->line('signin_email'), 'trim|required|valid_email|min_length[5]');
		if( $this->form_validation->run() == FALSE ) {
			
		}
	}


	public function signout() {
		$this->session->sess_destroy();
		redirect ('signin');
	}
}