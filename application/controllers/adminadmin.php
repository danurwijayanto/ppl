<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//session_start(); //Memanggil fungsi session Codeigniter
class Adminadmin extends CI_Controller {

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

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
      $session_data = $this->session->userdata('logged_in');
      $result = $this->login_auth->read_user_information($session_data);
      if($result){
        $data = array(
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          'isi' => 'konten/admin_home',
          'title' => 'Admin Page'
        );
        //$data['username'] = $session_data['username'];
        $this->load->view('layout/wrapper', $data);
      } //else
     // {
        //Jika tidak ada session di kembalikan ke halaman login
       // redirect('adminadmin/login_index', 'refresh');
      //}
    }else
      {
        //Jika tidak ada session di kembalikan ke halaman login
       redirect('adminadmin/login_index', 'refresh');
      }
  }

 function login_index()
 {
   if($this->session->userdata('logged_in'))
   {
     redirect('adminadmin', 'refresh');
   }
   else 
   {
      //$this->load->helper(array('form'));
      $this->load->view('layout/login');
   }
 }

 function content(){
    if($this->session->userdata('logged_in'))
    {
     //redirect('admin', 'refresh');
      $this->load->view('danur'); 
   }
   else 
   {
      //$this->load->helper(array('form'));
      $this->load->view('login_form');
   }

 }

 function logout()
 {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('admin/login_index', 'refresh');
 }

 //contorler untuk menampilkan data member
 function daftarmember(){
 	
 	if($this->session->userdata('logged_in'))
   {
   		$session_data = $this->session->userdata('logged_in');
   		//$datamember = $this->kelola->show_user();
   		
   		//$datamemberr = $this->kelola->show_user();
     	$result = $this->login_auth->read_user_information($session_data);
		  $data = array(
         'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          'isi' => 'konten/admin_manuser',
          'ket' => 'Manajemen Anggota'
        );
      $data['query'] = $this->kelola->show_user();

      
        //$data['username'] = $session_data['username'];
        $this->load->view('layout/wrapper', $data);   
     
   }else {
   	redirect('adminadmin', 'refresh');
   		 
   }

 }


 // function manage_barang(){
 	//$session_data = $this->session->userdata('logged_in');
  //$result = $this->login_auth->read_user_information($session_data);
 	//if($this->session->userdata('logged_in'))
   //{
		///$data = array(
     //     'id' =>$result[0]->id_petugas,
     //     'username' =>$result[0]->nama,
     //     'email' =>$result[0]->email,
     //     'password' =>$result[0]->password,
     //     'isi' => 'konten/admin_kelbar'
     //   );

        //$data['username'] = $session_data['username'];
    //    $this->load->view('layout/wrapper', $data);    
     
   //}else {
   	//redirect('adminadmin', 'refresh');
   		 
   //}

 //}

function my_account(){
 
 	if($this->session->userdata('logged_in'))
   {
   		$session_data = $this->session->userdata('logged_in');
     $result = $this->login_auth->read_user_information($session_data);
		 $data = array(
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          'isi' => 'konten/admin_profile'
        );
        //$data['username'] = $session_data['username'];
        $this->load->view('layout/wrapper', $data);    
     
   }else {
   	redirect('adminadmin', 'refresh');
   		 
   }

 }

 function kelola_barang(){
  if($this->session->userdata('logged_in'))
   {
      //if (isset($pesan)){
      //  $message==$pesan;
      //}
      $session_data = $this->session->userdata('logged_in');
     $result = $this->login_auth->read_user_information($session_data);
     $data = array(
       'title'=>'Kelola Barang',
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          //'message' => $message,
          'isi' => 'konten/admin_kelbar'
        );
     $data['daftar_barang'] = $this->kelola->get_barang();
     $data['query'] = $this->kelola->get_kategori();

        //$data['username'] = $session_data['username'];
      $this->load->view('layout/wrapper', $data);    
     
   }else {
    redirect('adminadmin', 'refresh');
       
   }

 }

 function tambah_barang(){
  if($this->session->userdata('logged_in'))
   {
      //if (isset($pesan)){
      //  $message==$pesan;
      //}
      $session_data = $this->session->userdata('logged_in');
     $result = $this->login_auth->read_user_information($session_data);
     $data = array(
       'title'=>'Tambah Barang',
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          //'message' => $message,
          'isi' => 'konten/admin_tambahbarang'
        );
     $data['daftar_barang'] = $this->kelola->get_barang();
     $data['query'] = $this->kelola->get_kategori();

        //$data['username'] = $session_data['username'];
      $this->load->view('layout/wrapper', $data);    
     
   }else {
    redirect('adminadmin', 'refresh');
       
   }
 }

 function edit_barang(){
 if($this->session->userdata('logged_in'))
   {
      $session_data = $this->session->userdata('logged_in');
      $get = $_GET['id'];
      $result = $this->login_auth->read_user_information($session_data);
      $data = array(
          'id' => $get,
          'title'=>'Edit Barang',
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          //'message' => $message,
          'isi' => 'konten/admin_editbarang'
        );
     $data['barang'] = $this->kelola->edit_barang($get);
     $data['query'] = $this->kelola->get_kategori();

        //$data['username'] = $session_data['username'];
      $this->load->view('layout/wrapper', $data);    
     
   }else {
    redirect('adminadmin', 'refresh');
       
   }
 }

 function kelola_penjualan(){
    if($this->session->userdata('logged_in'))
   {
      //if (isset($pesan)){
      //  $message==$pesan;
      //}
      $session_data = $this->session->userdata('logged_in');
     $result = $this->login_auth->read_user_information($session_data);
     $data = array(
       'title'=>'Kelola Penjualan',
       'ket'=>'Kelola Penjualan',
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          //'message' => $message,
          'isi' => 'konten/admin_keljul'
        );
      $data['pembayaran']=$this->kelola->get_pembayaran1();
     $data['invoice'] = $this->kelola->get_pesanan_admin();
     //$data['query'] = $this->kelola->get_kategori();

        //$data['username'] = $session_data['username'];
      $this->load->view('layout/wrapper', $data);    
     
   }else {
    redirect('adminadmin', 'refresh');
       
   }
 }

 public function delete_invoice_admin(){
  $get = $_GET['id'];
  $session_data = $this->session->userdata('logged_in');
  
  $result=$this->kelola->delete_pesanan_admin($get);
  if ($result == FALSE){
        echo "<script type='text/javascript'>alert('Delete Gagal !')</script>";
      } else {
        echo "<script type='text/javascript'>alert('Delete Berhasil !')</script>";
      }
      //$pesan = 'sukses';
      redirect('adminadmin/kelola_penjualan', 'refresh');
 }


 public function konfirmasi_invoice(){
    if($this->session->userdata('logged_in'))
   {
    $get=$_GET['id'];
      //if (isset($pesan)){
      //  $message==$pesan;
      //}
      $session_data = $this->session->userdata('logged_in');
     $result = $this->login_auth->read_user_information($session_data);
     $data = array(
       'title'=>'Kelola Penjualan',
       'ket'=>'Kelola Penjualan',
          'id' =>$result[0]->id_petugas,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'password' =>$result[0]->password,
          //'message' => $message,
          'isi' => 'konten/admin_edit_status'
        );

     $data['status'] = $this->kelola->get_invoice_by_id($get);
     //$data['query'] = $this->kelola->get_kategori();

        //$data['username'] = $session_data['username'];
      $this->load->view('layout/wrapper', $data);    
     
   }else {
    redirect('adminadmin', 'refresh');
       
   }
 }

 public function accept_bukti(){
  $get=$_GET['id'];
  $result=$this->kelola->accept_bukti($get);

  if ($result == FALSE){
        echo "<script type='text/javascript'>alert('Accept Gagal !')</script>";
      } else {
        echo "<script type='text/javascript'>alert('Accept Berhasil !')</script>";


      }

      redirect('adminadmin/kelola_penjualan', 'refresh');
 }

 public function delete_bukti(){
  $get=$_GET['id'];
  $result=$this->kelola->delete_bukti($get);

  if ($result == FALSE){
        echo "<script type='text/javascript'>alert('Delete Gagal !')</script>";
      } else {
        echo "<script type='text/javascript'>alert('Delete Berhasil !')</script>";

      }

      redirect('adminadmin/kelola_penjualan', 'refresh');
 }

 public function set_status_penjualan(){
  $get=$_GET['id'];

  $data = array(         
          'pengiriman' => $this->input->post('bp'),
          'total_harga' => $this->input->post('t'),
          'status' => $this->input->post('kategori')
        );
  $data['id']=$_GET['id'];
  $result=$this->kelola->set_status_penjualan($data);

  if ($result == FALSE){
        echo "<script type='text/javascript'>alert('Perubahan Gagal !')</script>";
      } else {
        echo "<script type='text/javascript'>alert('Perubahan Berhasil !')</script>";

      }

      redirect('adminadmin/kelola_penjualan', 'refresh');
 }

}

?>


