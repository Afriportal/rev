<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form','url','security','captcha','string'));
		$this->load->model(array('Register_model', 'Users_model'));
		$this->load->library(array('encrypt','form_validation','session'));
		$this->lang->load('en_admin', 'english');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
	}

	public function index() {
		// Set validation rules
		//$this->session->unset_userdata('newuser');
		$this->form_validation->set_rules('usr_fname', $this->lang->line('register_fullname'), 'trim|xss_clean|required|min_length[5]|max_length[125]');
		$this->form_validation->set_rules('usr_email', $this->lang->line('register_email'), 'trim|xss_clean|required|min_length[5]|max_length[255]|valid_email|is_unique[users.usr_email]', 
			array( 'is_unique' => 'The %s is already existing'));
		$this->form_validation->set_rules('usr_pwd', $this->lang->line('register_pwd'), 'trim|xss_clean|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('usr_pwd_again', $this->lang->line('register_confirm_pwd'), 'trim|xss_clean|required|min_length[1]|max_length[255]|matches[usr_pwd]');
        $this->form_validation->set_rules('userCaptcha', 'Captcha', 'trim|xss_clean|required|callback_check_captcha');
        $userCaptcha = $this->input->post('userCaptcha');
		// Begin validation
		if ($this->form_validation->run() == FALSE) { // First load, or	problem with form

			// numeric random number for captcha
	      	// $random_number = substr(number_format(time() * rand(),0,'',''),0,6);
	      	// setting up captcha config
	      	$word = random_string('alnum', 6);
	      	$vals = array(
	            'word' => $word,
	            'img_path' => './captcha/',
	            'img_url' => base_url().'captcha/',
	            'font_path' => './assets/fonts/Okay-Type-AlrightSans-Medium.otf',
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
	      	//$this->session->set_userdata('register/captcha',$data['captcha']['word']);
	      	$this->session->set_userdata(array('captcha'=>$word, 'image' => $data['captcha']['time'].'.jpg'));

	      	if(file_exists(base_url()."captcha/".$this->session->userdata['image']))
            	unlink(base_url()."captcha/".$this->session->userdata['image']);

			$this->load->view('common/header');
			$this->load->view('nav/top_nav');
			$this->load->view('users/register', $data);
			$this->load->view('common/footer');
		} else {


            if(file_exists(base_url()."captcha/".$this->session->userdata['image']))
                unlink(base_url()."captcha/".$this->session->userdata['image']);

            $this->session->unset_userdata('captcha');
            $this->session->unset_userdata('image');
			
			// Create hash from user password
			// $password = random_string('alnum', 8);
			$password_hash = $this->encrypt->hash($this->input->post('usr_pwd')); // encrypt
			$data = array(
					'usr_fname' => trim($this->input->post('usr_fname')),
					'usr_email' => trim($this->input->post('usr_email')),
					'usr_hash' => trim($this->input->post('usr_pwd')),
					'usr_is_active' => 1,
					'usr_access_level' => 2,
					'usr_bank' => 0,
					'usr_hash' => $password_hash
					);

			if ($this->Register_model->register_user($data)) {
				
				// Create a flash registration session

				$this->session->set_flashdata('newuser', 'Registration successful, please log in');
				redirect('signin');
				
			} else {
				redirect('register');
			}
		}
	}

	public function update_account() {
		$this->form_validation->set_rules('usr_bank_name', 'User bank name', 'trim|required|min_length[3]|max_length[25]');
		$this->form_validation->set_rules('usr_account_name', 'Account name', 'trim|required|min_length[5]|max_length[125]');
		$this->form_validation->set_rules('usr_account_type', 'Account type', 'trim|required|min_length[5]|max_length[125]');
		$this->form_validation->set_rules('usr_account_number', 'Account number', 'trim|required|is_natural|min_length[10]|max_length[11]|is_unique[users.usr_account_number]', array('is_unique' => 'Account number already existed'));
		$this->form_validation->set_rules('usr_phone', 'Phone number', 'trim|required|is_natural|min_length[10]|max_length[11]|is_unique[users.usr_phone]', array('is_unique' => 'Sorry phone number already existing'));
		$this->form_validation->set_rules('usr_state', $this->lang->line('register_state'), 'required|min_length[3]|max_length[125]');
		
		if($this->form_validation->run() == FALSE ) {
			$data['id'] = $this->session->userdata('usr_id');
			$this->load->view('common/header');
			$this->load->view('nav/top_nav');
			$this->load->view('users/complete_registration', $data);
			$this->load->view('common/footer');
		}else {
			// validation passed
			$id = $this->input->post('usr_id');

			$data = array(
				'usr_bank_name' => $this->input->post('usr_bank_name'),
				'usr_account_name' => $this->input->post('usr_account_name'),
				'usr_account_type' => $this->input->post('usr_account_type'),
				'usr_account_number' => $this->input->post('usr_account_number'),
				'usr_phone' => $this->input->post('usr_phone'),
				'usr_state' => $this->input->post('usr_state'),
				'usr_bank' => '1'

				);
			if ($this->Users_model->process_update_user($id, $data)) {
				redirect('users');
			}else {
				//something went wrong
				redirect('register/update_account');
			}
		}
	}

	public function check_captcha(){
	    if($this->input->post('userCaptcha') != $this->session->userdata['captcha']) {	    	
	      	return true;
	    }
	    else{
	      $this->form_validation->set_message('check_captcha', 'Please enter correct captcha!');
	      return false;
	    }

	}
}