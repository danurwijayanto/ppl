<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
 	{
   parent::__construct();

      // Load form helper library
    $this->load->helper('form');

    // Load form validation library
    $this->load->library('session', 'cart', 'form_validation');

    // Load session library
    //$this->load->library('session');

    // Load database
    $this->load->model('login_auth','kelola' );
 	
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
		  if($this->session->userdata('client')){
		  	$data=array('title'=>'Home',
 								'isi' =>'konten/client_home.php',
 								'kat' => 'Barang Terbaru'
 								);
 					$data['login']=false;
 					$data['slider']=true;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['barang']=$this->kelola->get_barang();
 					$data['kategori']=$this->kelola->get_kategori();
 					//$data['name_kategori']=$this->kelola->name_kategori($get);
 					$this->load->view('layout/client_wrapper', $data);
		  }else {
		  	$data=array('title'=>'Home',
 								'isi' =>'konten/client_home.php',
 								'kat' => 'Barang Terbaru'
 								);
 					$data['login']=true;
 					$data['slider']=true;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['barang']=$this->kelola->get_barang();
 					$data['kategori']=$this->kelola->get_kategori();
 					//$data['name_kategori']=$this->kelola->name_kategori($get);
 					$this->load->view('layout/client_wrapper', $data);
		  }
		//$this->load->view('welcome_message');
 					
 				
	}

	public function kategori(){
			$get = $_GET['id'];
 			$data =array('title'=>'Halaman Admin',
 						'isi' =>'konten/client_home.php'
 						);
 			if($this->session->userdata('client')){
				$data['login']=false;
			} else {
				$data['login']=true;
			}
 			$data['slider']=false;
 			$data['testi1']=$this->kelola->get_testimoni_sidebar();
			$data['barang'] = $this->kelola->cari_kategori($get);
			$data['kategori']=$this->kelola->get_kategori();
			$data['name_kategori']=$this->kelola->name_kategori($get);
			$this->load->view('layout/client_wrapper', $data);




	}

	public function semuaproduct(){

		 if($this->session->userdata('client')){
		$data=array('title'=>'Semua Product',
 								'isi' =>'konten/client_home.php',
 								'kat' => 'Semua Barang'
 								);
 					$data['slider']=false;
 					$data['login']=false;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['barang']=$this->kelola->get_barang();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 		} else {
 			$data=array('title'=>'Semua Product',
 								'isi' =>'konten/client_home.php',
 								'kat' => 'Semua Barang'
 								);
 					$data['slider']=false;
 					$data['login']=true;
 					$data['testi1']=$this->kelola->get_testimoni_sidebar();
 					$data['barang']=$this->kelola->get_barang();
 					$data['kategori']=$this->kelola->get_kategori();
 					$this->load->view('layout/client_wrapper', $data);
 		}
	}

	public function detail_barang(){
		$get = $_GET['id'];
		$data=array('title'=>'Detail Barang',
 					'isi' =>'konten/client_detail_barang.php',
 					'kat' => 'Detail Barang'
 					);
 		if($this->session->userdata('client')){
				$data['login']=false;
			} else {
				$data['login']=true;
			}
 		$data['slider']=true;
 		$data['testi1']=$this->kelola->get_testimoni_sidebar();
 		$data['barang']=$this->kelola->get_barang_detail($get);
 		$data['kategori']=$this->kelola->get_kategori();
 		//$data['name_kategori']=$this->kelola->name_kategori($get);
 		$this->load->view('layout/client_wrapper', $data);
	}

	public function chart(){
		$get = $_GET['id'];
		$data=array('title'=>'Shopping Chart',
 					'isi' =>'konten/client_chart.php',
 					'kat' => 'Chart'
 					);
 		if($this->session->userdata('client')){
				$data['login']=false;
			} else {
				$data['login']=true;
			}
 		$data['slider']=true;
 		$data['testi1']=$this->kelola->get_testimoni_sidebar();
 		$data['barang']=$this->kelola->get_barang_detail($get);
 		$data['kategori']=$this->kelola->get_kategori();
 		//$data['name_kategori']=$this->kelola->name_kategori($get);
 		$this->load->view('layout/client_wrapper', $data);
	}

	public function add_to_cart()
	{
		$get = $_GET['id'];
		$qty = $this->input->post('quantity');
		$ukuran = $this->input->post('ukuran');
		$product = $this->kelola->get_barang_detail($get);
		$data = array(
					   'id'      => $product[0]->id,
					   'qty'     => $qty,
					   'price'   => $product[0]->harga * $qty,
					   'name'    => $product[0]->nama_barang,
					   'options' => array(
					    	'Size' => $ukuran, 
					    	'Color' => 'Red'
					    )
					);

		$this->cart->insert($data);
		//$this->cart->destroy();
		redirect(base_url());
	}

	public function checkout(){
		$data=array('title'=>'Checkout',
 					'isi' =>'konten/client_checkout.php',
 					'kat' => 'Checkout'
 					);
		if($this->session->userdata('client')){
				$data['login']=false;
			} else {
				$data['login']=true;
			}
 		//$data['slider']=true;
 		$data['testi1']=$this->kelola->get_testimoni_sidebar();
 		//$data['barang']=$this->kelola->get_barang_detail($get);
 		$data['kategori']=$this->kelola->get_kategori();
 		//$data['name_kategori']=$this->kelola->name_kategori($get);
 		$this->load->view('layout/client_wrapper', $data);
	}

	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}

	public function error(){
			$data=array('title'=>'Error',
 					'isi' =>'konten/error_page.php',
 					'kat' => 'Checkout'
 					);
			$data['login']=true;
 		//$data['slider']=true;
 		$data['testi1']=$this->kelola->get_testimoni_sidebar();
 		//$data['barang']=$this->kelola->get_barang_detail($get);
 		$data['kategori']=$this->kelola->get_kategori();
 		//$data['name_kategori']=$this->kelola->name_kategori($get);
 		$this->load->view('layout/client_wrapper', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */