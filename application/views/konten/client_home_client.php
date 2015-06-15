
<div class="center_content">
      
      <h4><b>Akun Saya</b></h4>
      <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#akun" data-toggle="tab">Aku Saya</a></li>
            <li><a href="#pesanan" data-toggle="tab">Pesana Saya</a></li>
            <li><a href="#konfirmasi" data-toggle="tab">Konfirmasi Pembayaran</a></li>
        </ul>
<!-- Tab menu Akun Saya-->
         <div class="tab-content">
            <div class="tab-pane active" id="akun">
                <form name="login" action="<?php echo base_url();?>user_auth/daftar" method="post" role="form" class="form-signin">
            <table>
            <tr>
              <td colspan="3"><h3>Data Personal</h3></td>
            </tr>
            <tr>
              <td>Nama </td>
              <td>: </td>
              <td>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required value="<?php echo $username; ?>">
              </td>
            </tr>
            <tr>
              <td>Email </td>
              <td>: </td>
              <td>
                <input type="Email" id="email" name="email" placeholder="Masukkan Email Anda" required value="<?php echo $email; ?>">
              </td>
            </tr>
            <tr>
              <td>Handphone</td>
              <td>: </td>
              <td>
                <input type="hp" id="hp" name="hp" placeholder="Masukkan No Hp Anda" required value="<?php echo $hp; ?>">
              </td>
            </tr>
            <tr>
              <td colspan="3"><h3>Alamat</h3></td>
            </tr>
            <tr>
              <td>Alamat </td>
              <td>: </td>
              <td>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat Rumah Anda" required value="<?php echo $alamat; ?>">
              </td>
            </tr>
            <tr>
              <td>Provinsi </td>
              <td>: </td>
              <td>
                <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" required value="<?php echo $provinsi; ?>">
            </tr>
            <tr>
              <td>Kota / Kabupaten </td>
              <td>: </td>
              <td>
                 <input type="text" id="kota" name="kota" placeholder="Kota / Kabupaten" required value="<?php echo $kota; ?>">
              </td>
            </tr>
            <tr>
              <td>Kecamatan </td>
              <td>: </td>
              <td>
                <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required value="<?php echo $kecamatan; ?>">
              </td>
            </tr>
            <tr>
              <td>Kelurahan / Desa </td>
              <td>: </td>
              <td>
                 <input type="text" id="kelurahan" name="kelurahan" placeholder="Kelurahan" required value="<?php echo $kelurahan; ?>">
              </td>
            </tr>
            <tr>
              <td colspan="3"><input type="submit" name="Edit" value="Simpan" class="btn btn-primary"></td>
            </tr>
              </form> 
<!-- END FORM -->

<!-- Start FOrm -->
          <form action="<?php echo base_url();?>user_auth/change_password_client" method="post">
          <!--  <tr>
              <td colspan="3"><input type="checkbox" name="changepass" value="Change" onChange="changetextbox();">Change Password<br></td>
            </tr>
          -->  
            <tr>
              <td colspan="3"><h3>Password</h3></td>
            </tr>
            <tr>
              <td>Password </td>
              <td>: </td>
              <td>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required >
              </td>
            </tr>
            <tr>
              <td>Confirm Password </td>
              <td>: </td>
              <td>
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password  Anda" required>
              </td>
            </tr>
            <tr>
              <td colspan="3"><input type="submit" name="Edit" value="Change" class="btn btn-primary" name="submit"></td>
            </tr>
          </form>
          </table>        
          
            </div>
<!--End Tab menu Akun Saya-->
<!-- Tab Menu Pesanan-->
            <div class="tab-pane" id="pesanan">
                <h4><b>Daftar Pemesanan</b></h4>
               
                <table id="myTable" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>ID Pesanan</th>
                    <th>Tanggal</th>
                    <th>Total Pesanan</th>
                    <th>Status</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                  <?php
                  if (empty($pesanan)){

                  }else{
                    foreach ($pesanan as $data) { //ngabsen data
                  ?>
                  <tr>
                    <td><?php echo $data->id; ?></td> 
                    <td><?php echo $data->date; ?></td>
                    <td><?php echo $data->qty; ?></td>
                    <td><?php echo $data->status; ?></td>
                                              
                    <td>
                                                 <!--     <a href="<?php echo base_url();?>client/detail_pesanan?id=<?php echo $data->id; ?>">Lihat</a>-->                                                         
                      <a href="<?php echo base_url();?>client/detail_invoice?det=<?php echo $data->id; ?>" class="btn btn-primary">Detail</a>
                    </td>
                  </tr>
                  <?php
                    }
                    }
                  ?>
                  </tr>
                </table>

                <br><br>
                <h4><b>Riwayat Pembayaran</b></h4>
                
                <table id="myTable1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>ID Invoice</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    
                  </tr>
                </thead>
                <?php
                if (empty($pembayaran)){}else{
                  foreach($pembayaran as $data1){ 
                ?> 
                  <tr>
                    <td><?php echo $data1->id_invoice;?></td>
                    <td><?php echo $data1->dari_bank;?></td>
                    <td><?php echo $data1->tanggal?></td>
                    <td><img alt="Thumbnail image" src="<?php echo base_url();?>uploads/bukti/<?php echo $data1->scan_struk?>" class="img-thumbnail" width="150" height="200"></td>
                    
                  </tr>
                    <?php
                      } 
                    }
                    ?>
                </table>
            </div>
<!--End Tab menu pesanan-->
<!-- Tab Menu konfirmasi-->
            <div class="tab-pane" id="konfirmasi">
                <form name="login" action="<?php echo base_url();?>client/konfirmasi" enctype="multipart/form-data" method="post">
            <table>
            <tr>
              <td>ID Pesanan </td>
              <td>: </td>
              <td>
                <input type="text" id="id" name="id" placeholder="Masukkan id pesanan" required>
              </td>
            </tr>
            <tr>
              <td>Dari Bank </td>
              <td>: </td>
              <td>
                <input type="text" id="daribank" name="daribank" placeholder="Dari bank" required>
              </td>
            </tr>
            <tr>
              <td>Nama Pemilik Rekening</td>
              <td>: </td>
              <td>
                <input type="text" id="npr" name="npr" placeholder="Nama Pemilik Rekening" required>
              </td>
            </tr>
            <tr>
              <td>Trensfer ke </td>
              <td>: </td>
              <td>
                <input type="text" id="transfer" name="transfer" placeholder="Bank tujuan Transfer" required>
              </td>
            </tr>
            <tr>
              <td>Jumlah Transfer </td>
              <td>: </td>
              <td>
                 <input type="text" id="jumlahtransfer" name="jumlahtransfer" placeholder="Jumlah Transfer" required>
              </td>
            </tr>
            <tr>
              <td>Bukti transfer</td>
              <td>: </td>
              <td id="bukti"><input type="file" name="userfile" id="upload" size="20" required >
              </td>
            </tr>
            <tr>
              <td colspan="3"><input type="submit" name="daftar" value="Upload" class="btn btn-primary"></td>
            </tr>
          </table>        
    </form>  
            </div>
<!--End Tab menu konfirmasi-->
        </div>
        <!--/tab-content-->
      </div>



    <!-- end of center content -->
   
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <script>
      $(document).ready(function(){
        $('#myTable').DataTable();
      });

      $(document).ready(function(){
        $('#myTable1').DataTable();
      });


//function changetextbox()
//{
  // var form = '<input type="file" name="userfile" id="upload" size="20" required >';
 //  if (document.getElementById("rubah_gambar").value === "tidak") {
  //     document.getElementById("upload1").disabled='true';
   //   document.getElementById("upload2").innerHTML = "";
    //} else {
     //   document.getElementById("upload").disabled='';
      //  document.getElementById("myH").innerHTML = "My Sec";
        // document.getElementById("upload2").innerHTML = form;
    //}
//}


    </script>