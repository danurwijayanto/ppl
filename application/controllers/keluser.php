<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keluser extends CI_Controller {

	 function __construct()
 {
   parent::__construct();

      // Load form helper library
    $this->load->helper('form');

    // Load form validation library
    $this->load->library('form_validation', 'javascript');

    // Load session library
    $this->load->library('session');

    // Load database
    $this->load->model('login_auth','kelola');

 	
 }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$data=array('title'=>'Daftar Akun',
 					'isi' =>'konten/client_daftar.php'
 					);
 		$this->load->view('layout/client_wrapper', $data); 
 				
	}

	//fungsi untuk melakukan delete user
	public function delete_user(){
		$get = $_GET['id'];
			$result=$this->kelola->delete_user($get);
			if ($result == FALSE){
				echo "<script type='text/javascript'>alert('Delete Gagal !')</script>";
			} else {
				echo "<script type='text/javascript'>alert('Delete Berhasil !')</script>";
			}
			//$pesan = 'sukses';
			redirect('adminadmin/daftarmember', 'refresh');
	}

	//fungsi untuk melakukan edit user
	public function edit_user(){
	if($this->session->userdata('logged_in'))
   {
      $session_data = $this->session->userdata('logged_in');
      $get = $_GET['id'];
      $result = $this->login_auth->read_user_information($session_data);
      $data = array(
          'id' => $get,
          'title'=>'Edit User',
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          //'message' => $message,
          'isi' => 'konten/admin_edituser'
        );
     $data['user'] = $this->kelola->edit_user($get);

        //$data['username'] = $session_data['username'];
      $this->load->view('layout/wrapper', $data);    
     
   }else {
    redirect('adminadmin', 'refresh');
       
   }
	}

	//fungsi untuk menyimpan data setelah dilakukan perubahan
	public function save_edit(){
		$get = $_GET['id'];

			$data = array(
					'id' => $this->input->post('id'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('no_hp'),
					'alamat' => $this->input->post('alamat'),
					'provinsi' => $this->input->post('provinsi'),
					'kota' => $this->input->post('kota'),
					'kecamatan' => $this->input->post('kecamatan'),
				);
			$data['id'] = $get;
			$result=$this->kelola->update_user($data);
			if ($result == TRUE){
				echo "<script type='text/javascript'>alert('Edit Berhasil !')</script>";
			} else {
				echo "<script type='text/javascript'>alert('Edit Gagal !')</script>";
			}

			redirect('adminadmin/daftarmember', 'refresh');
   
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

