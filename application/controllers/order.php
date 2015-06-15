<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('client'))
		{
			redirect('home/error');
		}
		$this->load->model('kelola', 'login_auth');
	}
	
	public function index()
	{
		 $session_data = $this->session->userdata('client');
    $result = $this->login_auth->read_user_information1($session_data);
		 $data = $result[0]->id;
          
		$is_processed = $this->kelola->order($data);
		if($is_processed == true){
			echo "<script type='text/javascript'>alert('Barang Berhasil Ditambahkan !')</script>";
			$this->cart->destroy();
			
			redirect('home');
		} else {
			$this->session->set_flashdata('error','Failed to processed your order, please try again!');
			redirect('home');
		}
	}

	public function success()
	{
		$this->load->view('order_success');
	}
}