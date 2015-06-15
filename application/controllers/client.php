<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//session_start(); //Memanggil fungsi session Codeigniter
class client extends CI_Controller {

 function __construct()
 {
   parent::__construct();

      // Load form helper library
    $this->load->helper('form');

    // Load form validation library
    $this->load->library('form_validation', 'javascript');

    // Load session library
    $this->load->library('session', 'javascript');

    // Load database
    $this->load->model('login_auth','kelola');

 	
 }

 function index()
 {
   if($this->session->userdata('client'))
   {
      $session_data = $this->session->userdata('client');
      $result = $this->login_auth->read_client_information1($session_data);
      if($result){
        $data = array(
          'id' =>$result[0]->id,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'hp' =>$result[0]->no_hp,
          'alamat' =>$result[0]->alamat,
          'provinsi' =>$result[0]->provinsi,
          'kota' =>$result[0]->kota,
          'kecamatan' =>$result[0]->kecamatan,
          'kelurahan' =>$result[0]->kelurahan,
          'password' =>$result[0]->password,
          'isi' => 'konten/client_home_client.php',
          'kat' => 'Barang Terbaru'
        );

        $data['login']=false;
        $data['slider']=true;
        $data['testi1']=$this->kelola->get_testimoni_sidebar();
        $data['barang']=$this->kelola->get_barang();
        $data['kategori']=$this->kelola->get_kategori();
        $data['pesanan']=$this->kelola->get_pesanan($data['id']);
        $data['pembayaran']=$this->kelola->get_pembayaran($data['id']);
        //$data['username'] = $session_data['username'];
        $this->load->view('layout/client_wrapper', $data);
      } 
    }else
      {
        //Jika tidak ada session di kembalikan ke halaman login
       redirect('home', 'refresh');
      }
  }


  function detail_invoice (){
    if($this->session->userdata('client'))
   {
      $det=$_GET['det'];
      $session_data = $this->session->userdata('client');
      $result = $this->login_auth->read_client_information1($session_data);

      if($result){
        $data = array(
          'id' =>$result[0]->id,
          'username' =>$result[0]->nama,
          'email' =>$result[0]->email,
          'hp' =>$result[0]->no_hp,
          'alamat' =>$result[0]->alamat,
          'provinsi' =>$result[0]->provinsi,
          'kota' =>$result[0]->kota,
          'kecamatan' =>$result[0]->kecamatan,
          'kelurahan' =>$result[0]->kelurahan,
          'password' =>$result[0]->password,
          'isi' => 'konten/client_home_detail.php',
          'kat' => 'Barang Terbaru'
        );
        $data['detail']=$this->kelola->get_invoice_by_id($det);
        $data['login']=false;
        $data['slider']=true;
        $data['testi1']=$this->kelola->get_testimoni_sidebar();
        $data['barang']=$this->kelola->get_barang();
        $data['kategori']=$this->kelola->get_kategori();
        $data['pesanan']=$this->kelola->get_pesanan($data['id']);
        //$data['username'] = $session_data['username'];
        $this->load->view('layout/client_wrapper', $data);
      } 
    }else
      {
        //Jika tidak ada session di kembalikan ke halaman login
       redirect('home', 'refresh');
      }
  }

function konfirmasi(){
   $config['upload_path'] = 'uploads/bukti';
    $config['file_name'] = 'bukti_'.date("YmdHis");
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    //$config['max_width']  = '1024';
    //$config['max_height']  = '768';
 
    $this->load->library('upload', $config);
 
    if (!$this->upload->do_upload()){     
      $data = array(
              'isi' => 'konten/client_home_client'
          );
          
          $data['message'] = array('error' => $this->upload->display_errors());
          echo "<script type='text/javascript'>alert('".$data['message']['error']."')</script>";
          //$this->load->view('layout/wrapper', $data);
          redirect('client', 'refresh');
    }
    else{
       $session_data = $this->session->userdata('client');
    $result = $this->login_auth->read_user_information1($session_data);
      $gambar = $this->upload->data();
      $data = array(
          'id_invoice' => $this->input->post('id'),
          'id_user' => $result[0]->id,
          'dari_bank' => $this->input->post('daribank'),
          'nama_pemilik' => $this->input->post('npr'),
          'tujuan_transfer' => $this->input->post('transfer'),
          'jumlah_transfer' => $this->input->post('jumlahtransfer'),
          'tanggal' => date("Ymd"),
          'scan_struk' => $gambar['raw_name'].$gambar['file_ext']
        );
      $result=$this->kelola->upload_konfirmasi($data);
      if ($result == TRUE){
        echo "<script type='text/javascript'>alert('Upload Berhasil !')</script>";
      } else {
        echo "<script type='text/javascript'>alert('Upload Gagal !')</script>";
      }
      //$pesan = 'sukses';
      redirect('client', 'refresh');
      //$data = array(
            //  'isi' => 'konten/admin_kelbar'
          //);
          //$data['message'] = array('error' => $this->upload->data());
          //$this->load->view('layout/wrapper', $data);    
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
  /*  if($this->session->userdata('logged_in'))
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
     //$data['daftar_barang'] = $this->kelola->get_barang();
     //$data['query'] = $this->kelola->get_kategori();

        //$data['username'] = $session_data['username'];
      $this->load->view('layout/wrapper', $data);    
     
   }else {
    redirect('adminadmin', 'refresh');
       
   }*/
 }

 

}

?>


