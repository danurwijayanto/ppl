<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $title; ?></title>

  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css" />
  
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/coin-slider-styles.css" type="text/css" />


  <!-- Bootstrap dan Javascript-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/> 

<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
 
  

 

    <!-- Load JQuery dari CDN -->
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    
    <!-- Load DataTables dan Bootstrap dari CDN -->
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>






<div id="main_container">
   <!--<div class="top_bar">
   <div class="top_search">
      <div class="search_text"><a href="#">Advanced Search</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="<?php echo base_url(); ?>assets/images/search.gif" class="search_bt"/>
    </div>

   
  </div>
  -->
  <div id="header">
    <!--<div id="logo"> <a href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" border="0" width="237" height="140" /></a> </div>
       <div class="oferte_content">
   <div class="top_divider"><img src="<?php echo base_url(); ?>assets/images/header_divider.png" alt="" width="1" height="164" /></div>
      <div class="oferta">
        <div class="oferta_content"> <img src="<?php echo base_url(); ?>assets/images/laptop.png" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title">Samsung GX 2004 LM</div>
            <div class="oferta_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div>
            <a href="details.html" class="details">details</a> </div>
        </div>
        <div class="oferta_pagination"> <span class="current">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> </div>
      </div>
      <div class="top_divider"><img src="<?php echo base_url(); ?>assets/images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>   -->
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="<?php echo base_url();?>" class="nav1">Beranda</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url();?>about_us" class="nav6">Tentang Kami</a></li>
        <li class="divider"></li>
          <li><a href="<?php echo base_url();?>home/semuaproduct" class="nav1">Produk</a></li>
        <li class="divider"></li>
          <li><a href="<?php echo base_url();?>cara_order" class="nav1">Cara Order</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url();?>testimoni" class="nav1">Testimoni</a></li>
        <li class="divider"></li>
        <?php
          if ($login == false){ ?>
            <li><a href="<?php echo base_url();?>user_auth/logout_client" class="nav1">logout</a></li>
        <?php
          }
          
        ?>
        <!--<li class="divider"></li>
        <li>
        <input type="text" class="search_input" name="search" />
        <input type="image" src="<?php echo base_url(); ?>assets/images/search.gif" class="search_bt"/>
        </li>-->

      </ul>
      <div class="right_menu_corner">

      </div>
    </div>
    <!-- end of menu tab -->
    
    

