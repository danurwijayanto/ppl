<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kelbar extends CI_Controller {

		public function __construct() {
		parent::__construct();

			//$this->session->all_userdata();
		$this->load->helper(array('form', 'url'));
		$this->load->library('javascript');
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
	
		$session_id = $this->session->userdata('logged_in');
		$data=array('title'=>'Daftar Akun',
 					'isi' =>'konten/admin_kelbar.php',
 					'username' => $logged_in['email']
 					);
 		$this->load->view('layout/wrapper', $data); 
 				
	}

	public function do_upload(){
		$config['upload_path'] = 'uploads';
		$config['file_name'] = 'gbr_'.date("YmdHis");
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
 
		$this->load->library('upload', $config);
 
		if (!$this->upload->do_upload()){			
 			$data = array(
          		'isi' => 'konten/admin_kelbar'
       		);
       		
       		$data['message'] = array('error' => $this->upload->display_errors());
       		echo "<script type='text/javascript'>alert('".$data['message']['error']."')</script>";
        	//$this->load->view('layout/wrapper', $data);
       		redirect('adminadmin/kelola_barang', 'refresh');
		}
		else{
			$gambar = $this->upload->data();
			$data = array(
					'kategori' => $this->input->post('kategori'),
					'nama_barang' => $this->input->post('nambar'),
					's' => $this->input->post('s'),
					'm' => $this->input->post('m'),
					'l' => $this->input->post('l'),
					'xl' => $this->input->post('xl'),
					'berat' => $this->input->post('berat'),
					'harga' => $this->input->post('harga'),
					'gambar' => $gambar['raw_name'].$gambar['file_ext'],
					'deskripsi' => $this->input->post('deskripsi')
				);
			$result=$this->kelola->simpan_barang($data);
			if ($result == TRUE){
				echo "<script type='text/javascript'>alert('Upload Berhasil !')</script>";
			} else {
				echo "<script type='text/javascript'>alert('Upload Gagal !')</script>";
			}
			//$pesan = 'sukses';
			redirect('adminadmin/kelola_barang', 'refresh');
 			//$data = array(
          	//	'isi' => 'konten/admin_kelbar'
       		//);
       		//$data['message'] = array('error' => $this->upload->data());
        	//$this->load->view('layout/wrapper', $data);    
		}
	}

	public function delete_barang(){
			$get = $_GET['id'];
			$result=$this->kelola->delete_barang($get);
			if ($result == FALSE){
				echo "<script type='text/javascript'>alert('Delete Gagal !')</script>";
			} else {
				echo "<script type='text/javascript'>alert('Delete Berhasil !')</script>";
			}
			//$pesan = 'sukses';
			redirect('adminadmin/kelola_barang', 'refresh');
	}

	public function do_update(){
		$get = $_GET['id'];
		$config['upload_path'] = 'uploads';
		$config['file_name'] = 'gbr_'.date("YmdHis");
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
 
		$this->load->library('upload', $config);
 
		if (!$this->upload->do_upload()){			
 			$data = array(
          		'isi' => 'konten/admin_kelbar'
       		);
       		
       		$data['message'] = array('error' => $this->upload->display_errors());
       		echo "<script type='text/javascript'>alert('".$data['message']['error']."')</script>";
        	//$this->load->view('layout/wrapper', $data);
       		redirect('adminadmin/kelola_barang', 'refresh');
		}
		else{
			$gambar = $this->upload->data();
			$data = array(
					'kategori' => $this->input->post('kategori'),
					'nama_barang' => $this->input->post('nambar'),
					's' => $this->input->post('s'),
					'm' => $this->input->post('m'),
					'l' => $this->input->post('l'),
					'xl' => $this->input->post('xl'),
					'berat' => $this->input->post('berat'),
					'harga' => $this->input->post('harga'),
					'gambar' => $gambar['raw_name'].$gambar['file_ext'],
					'deskripsi' => $this->input->post('deskripsi')
				);
			$data['id'] = $get;
			$result=$this->kelola->update_barang($data);
			if ($result == TRUE){
				echo "<script type='text/javascript'>alert('Upload Berhasil !')</script>";
			} else {
				echo "<script type='text/javascript'>alert('Upload Gagal !')</script>";
			}
			//$pesan = 'sukses';
			redirect('adminadmin/kelola_barang', 'refresh');
 			//$data = array(
          	//	'isi' => 'konten/admin_kelbar'
       		//);
       		//$data['message'] = array('error' => $this->upload->data());
        	//$this->load->view('layout/wrapper', $data);    
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */