<?php
    foreach($user as $user)
    { 
        $id=$user->id;
        $nama=$user->nama;
        $email=$user->email;
        $no_hp=$user->no_hp;
        $alamat=$user->alamat;
        $provinsi=$user->provinsi;
        $kota=$user->kota;
        $kecamatan=$user->kecamatan;
    }
?>
<!-- main page -->
			<div id="page-wrapper">
				<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?php echo $title;?>
                            </li>
                        </ol>
                    </div>
					 <div class="col-lg-12">
                        
                        <form action='<?php echo base_url();?>kelbar/do_update' enctype="multipart/form-data" method='post'>
                            <table>
                        	<tr>
                        		<td>Id</td>
                        		<td> <input type="text" id="id" name="id" value="<?php echo $id;?>" disabled>		
                        		</td>
                        	</tr>
                            <tr>
                                <td>User Name</td>
                                <td>
                                    <input type="text" id="nama" name="nama" value="<?php echo $nama;?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>No Handphone</td>
                                <td>
                                     <input type="text" id="no_hp" name="no_hp" value="<?php echo $no_hp;?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" id="email" name="email" value="<?php echo $email;?>" required></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" id="alamat" name="alamat" value="<?php echo $alamat;?>" required></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>  <input type="text" id="provinsi" name="provinsi" value="<?php echo $provinsi;?>" required></td>
                            </tr>
                            <tr>
                                <td>Kota</td>
                                <td> <input type="text" id="kota" name="kota" value="<?php echo $kota;?>" required> </td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td> <input type="text" id="kecamatan" name="kecamatan" value="<?php echo $kecamatan;?>" required> </td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="update" value="Update" formaction="<?php echo base_url();?>keluser/save_edit?id=<?php echo $id; ?>" class="btn btn-primary">Update</td>
                                <td></td>
                            </tr>
                        </form>
                           
                        </table>
                        <?php
                            //if(isset($message)){
                             //   echo "<div class='message'>";
                             //   foreach ($message as $err){
                             //       echo $err;
                             //   }
                                
                             //   echo "</div>";
                            //}
                        ?>
                  
                     </div><!-- ./col -->
                </div>
                </div>
                <!-- /.row -->
			</div>
            <!-- /.container-fluid -->

<script type="text/javascript">

 //<td>Rubah Gambar</td>
   //                             <td>
     //                                <select name='rubah_gambar' id='rubah_gambar' onChange="changetextbox();">
       //                                 <option value="ya" selected="selected">Ya</option>
         //                               <option value="tidak">Tidak</option>
           //                         </select>
             //                   </td>
//function changetextbox()
//{
  //  var form = '<input type="file" name="userfile" id="upload" size="20" required >';
   // if (document.getElementById("rubah_gambar").value === "tidak") {
    //    //document.getElementById("upload1").disabled='true';
     //   document.getElementById("upload2").innerHTML = "";
    //} else {
     //   //document.getElementById("upload").disabled='';
    //           //document.getElementById("myH").innerHTML = "My Sec";
     //   document.getElementById("upload2").innerHTML = form;
    //}
//}
</script>