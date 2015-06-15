

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tab</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
	
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#akun" data-toggle="tab">Akun</a></li>
			<li><a href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
			<li><a href="#keahlian" data-toggle="tab">Keahlian</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="akun">
				Nama: Visia Gracia
				<br/>Alamat: Serpong
			</div>
			<div class="tab-pane" id="pendidikan">
				KB Soli Deo
				<br/>TK Soli Deo
				<br/>SD Ora Et
			</div>
			<div class="tab-pane" id="keahlian">
				Menari
				<br/>Menyanyi
				<br/>Bermain Piano
			</div>
		</div>
		<!--/tab-content-->
	</div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>