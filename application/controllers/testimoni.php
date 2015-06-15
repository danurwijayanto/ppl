<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class testimoni extends CI_Controller {

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
		if($this->session->userdata('client')){
		//$this->load->view('welcome_message');
 					$data=array('title'=>'Testimoni',
 								'isi' =>'konten/client_tampiltestimoni.php'
 								);
 					//$data['daftar_barang'] = $this->kelola->get_barang();
     				//$data['query'] = $this->kelola->get_kategori();
     				$data['testi']=$this->kelola->get_testimoni();
     				$data['login']=false;
        			//$data['username'] = $session_data['username'];
      				//$this->load->view('layout/wrapper', $data);    
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 		}else {
 			$data=array('title'=>'Testimoni',
 								'isi' =>'konten/client_tampiltestimoni.php'
 								);
 					//$data['daftar_barang'] = $this->kelola->get_barang();
     				//$data['query'] = $this->kelola->get_kategori();
     				$data['testi']=$this->kelola->get_testimoni();
     				$data['login']=true;
        			//$data['username'] = $session_data['username'];
      				//$this->load->view('layout/wrapper', $data);    
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 		}
	}


	//Menampilkan form add testimoni
	public function addtestimoni()
	{
			if($this->session->userdata('client')){
		//$this->load->view('welcome_message');
 					$data=array('title'=>'Add Testimoni',
 								'isi' =>'konten/client_addtestimoni.php'
 								);
 					$data['login']=true;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 			} else {
 				$data=array('title'=>'Add Testimoni',
 								'isi' =>'konten/client_addtestimoni.php'
 								);
 					$data['login']=false;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 			}
 				
	}

	//add testimoni ke dalam database
	public function addtestimoni1()
	{
		//$this->load->view('welcome_message');
 					$data=array(
							'nama' => $this->input->post('nama'),
 							'kota'=>$this->input->post('kota'),
 							'testimoni' =>$this->input->post('txttestimoni')
 								);
 					//$data['kategori']=$this->kelola->get_kategori();
 					//$this->load->view('layout/client_wrapper', $data);

 					$result=$this->kelola->add_testimoni($data);
					if ($result == TRUE){
						echo "<script type='text/javascript'>alert('Submit Berhasil !')</script>";
					} else {
						echo "<script type='text/javascript'>alert('Submit Gagal !')</script>";
					}
					//$pesan = 'sukses';
					redirect('testimoni', 'refresh');
 				
	}

	//menampilkan testimoni
	public function tampil(){
			$result=$this->kelola->get_testimoni();
					if ($result == TRUE){
						echo "<script type='text/javascript'>alert('Submit Berhasil !')</script>";
					} else {
						echo "<script type='text/javascript'>alert('Submit Gagal !')</script>";
					}
					//$pesan = 'sukses';
					redirect('testimoni', 'refresh');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */