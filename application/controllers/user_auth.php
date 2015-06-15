<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start(); //we need to start session in order to access it through CI

	Class User_auth extends CI_Controller {
		public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		//$this->load->model('login_database');

	}

	// Show login page
	public function user_login_show() {
		$this->load->view('login_form');
	}

	// Show registration page
	public function user_registration_show() {
		$this->load->view('registration_form');
	}

	// Validate and store registration data in database
	public function new_user_registration() {

			// Check validation for user input in SignUp form
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('registration_form');
			} else {
				$data = array(
					'name' => $this->input->post('name'),
					'user_name' => $this->input->post('username'),
					'user_email' => $this->input->post('email_value'),
					'user_password' => $this->input->post('password')
				);

				$result = $this->login_database->registration_insert($data) ;
		
				if ($result == TRUE) {
					$data['message_display'] = 'Registration Successfully !';
					$this->load->view('login_form', $data);
				} else {
					$data['message_display'] = 'Username already exist!';
					$this->load->view('registration_form', $data);
				}
			}
		}

		// Check for user login process adminadmin
		public function user_login_process() {

			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
				 //Jika validasi gagal user akan diarahkan kembali ke halaman login
				//$this->load->view('login_form');
				redirect('adminadmin', 'refresh');
			} 
			else {
				$data = array(
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
				);

				$result = $this->login_auth->login($data);
				if($result == TRUE){
					$sess_array = array(
						'email' => $this->input->post('email')
					);

					// Add user data in session
					$this->session->set_userdata('logged_in', $sess_array);
					//$result = $this->login_database->read_user_information($sess_array);
					//if($result != false){
						//$data = array(
						//	'name' =>$result[0]->name,
						//	'username' =>$result[0]->user_name,
						//	'email' =>$result[0]->user_email,
						//	'password' =>$result[0]->user_password
						//);
						//$this->load->view('admin_page', $data);
					redirect('adminadmin', 'refresh');
					
				}else{
					$data = array(
						'message' => 'Invalid Username or Password'
					);
					$this->load->view('layout/login', $data);
					//redirect('kelbar', 'refresh');
				}
			}
		}

		// Logout from admin page
		public function logout() {

			// Removing session data
			$sess_array = array(
				'email' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message'] = 'Successfully Logout';
			$this->load->view('layout/login', $data);
		}

		public function daftar() {

			// Check validation for user input in SignUp form
			$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('hp', 'hp', 'trim|required|xss_clean');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');
			$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kota', 'kota', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('kelurahan', 'kelurahan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
			
		
			if ($this->form_validation->run() == FALSE) {
				redirect('daftar');
			} else {
				$data = array(
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('hp'),
					'alamat' => $this->input->post('alamat'),
					'provinsi' => $this->input->post('provinsi'),
					'kota' => $this->input->post('kota'),
					'kecamatan' => $this->input->post('kecamatan'),
					'kelurahan' => $this->input->post('kelurahan'),
					'password' => $this->input->post('password'),
				);

				$result = $this->login_auth->daftar($data) ;
		
				if ($result == TRUE){
					echo "<script type='text/javascript'>alert('Registrasi Berhasil !')</script>";
				} else {
					echo "<script type='text/javascript'>alert('Registrasi Gagal !')</script>";
				}
				//$pesan = 'sukses';
				redirect('daftar', 'refresh');
				}
		}

		public function login_client() {

			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
				 //Jika validasi gagal user akan diarahkan kembali ke halaman login
				//$this->load->view('login_form');
				redirect('adminadmin', 'refresh');
			} 
			else {
				$data = array(
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
				);

				$result = $this->login_auth->loginuser($data);
				if($result == TRUE){
					$sess_array = array(
						'email' => $this->input->post('email')
					);

					// Add user data in session
					$this->session->set_userdata('client', $sess_array);
					//$result = $this->login_database->read_user_information($sess_array);
					//if($result != false){
						//$data = array(
						//	'name' =>$result[0]->name,
						//	'username' =>$result[0]->user_name,
						//	'email' =>$result[0]->user_email,
						//	'password' =>$result[0]->user_password
						//);
						//$this->load->view('admin_page', $data);
					echo "<script type='text/javascript'>alert('Login Berhasil !')</script>";
					//$this->load->view('layout/logout', $data);
					redirect('client', 'refresh');
					
				}else{
					//$data = array(
					//	'message' => 'Invalid Username or Password'
					//);
					echo "<script type='text/javascript'>alert('Login Gagal !')</script>";
					//$this->load->view('layout/login', $data);
					redirect('home', 'refresh');
				}
			}
		}

		public function logout_client() {

			// Removing session data
			$sess_array = array(
				'email' => ''
			);
			$this->session->unset_userdata('client', $sess_array);
			echo "<script type='text/javascript'>alert('Logout Berhasil !')</script>";
			//$data['message'] = 'Successfully Logout';
			//$this->load->view('home', 'refresh');
			redirect('home','refresh');
		}

		public function change_password_client(){
			$session_data = $this->session->userdata('client');
      		$result = $this->login_auth->read_client_information1($session_data);

        	$data['id'] = $result[0]->id;
			$data['password'] = $this->input->post('password');
			$result = $this->login_auth->change_password_client($data) ;
			if ($result == TRUE){
					echo "<script type='text/javascript'>alert('Pergantian Password Sukses!')</script>";
				} else {
					echo "<script type='text/javascript'>alert('Pergantian Password Gagal!')</script>";
				}
				//$pesan = 'sukses';
				redirect('daftar', 'refresh');
		}
	}
?>