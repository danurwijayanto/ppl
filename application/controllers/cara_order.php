<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cara_order extends CI_Controller {

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
 					$data=array('title'=>'Cara Order',
 								'isi' =>'konten/client_caraorder.php'
 								);
 					$data['login']=false;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 		} else {
 			$data=array('title'=>'Cara Order',
 								'isi' =>'konten/client_caraorder.php'
 								);
 					$data['login']=true;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 		}
 				
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */