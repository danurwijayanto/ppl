<script type="text/javascript" src="<?php echo base_url;?>assets/js/jquery-1.7.2.min.js"></script>
<div class="center_content">
      <div class="prod_box">
      <form name="login" action="<?php echo base_url();?>user_auth/daftar" method="post" role="form" class="form-signin">

          <h1 align="center"><?php echo $title;?></h1><br>
          <table>
            <tr>
              <td colspan="3"><h3>Data Personal</h3></td>
            </tr>
            <tr>
              <td>Nama </td>
              <td>: </td>
              <td>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
              </td>
            </tr>
            <tr>
              <td>Email </td>
              <td>: </td>
              <td>
                <input type="Email" id="email" name="email" placeholder="Masukkan Email Anda" required>
              </td>
            </tr>
            <tr>
              <td>Handphone</td>
              <td>: </td>
              <td>
                <input type="hp" id="hp" name="hp" placeholder="Masukkan No Hp Anda" required>
              </td>
            </tr>
            <tr>
              <td colspan="3"><h3>Alamat</h3></td>
            </tr>
            <tr>
              <td>Alamat </td>
              <td>: </td>
              <td>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat Rumah Anda" required>
              </td>
            </tr>
            <tr>
              <td>Provinsi </td>
              <td>: </td>
              <td>
                <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" required>
                <!--<select>

                  <option value="">Pilih Provinsi</option>

                  <?php 
                      //$queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
                      //while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
                      //  echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
                      //}
                  ?>
                  
                </select>
              </td>-->
            </tr>
            <tr>
              <td>Kota / Kabupaten </td>
              <td>: </td>
              <td>
                 <input type="text" id="kota" name="kota" placeholder="Kota / Kabupaten" required>
              </td>
            </tr>
            <tr>
              <td>Kecamatan </td>
              <td>: </td>
              <td>
                <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
              </td>
            </tr>
            <tr>
              <td>Kelurahan / Desa </td>
              <td>: </td>
              <td>
                 <input type="text" id="kelurahan" name="kelurahan" placeholder="Kelurahan" required>
              </td>
            </tr>
            <tr>
              <td colspan="3"><h3>Password</h3></td>
            </tr>
            <tr>
              <td>Password </td>
              <td>: </td>
              <td>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>
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
              <td colspan="3"><input type="submit" name="daftar" value="Daftar" class="btn btn-primary"></td>
            </tr>
          </table>        
    </form>  
        
      </div>
</div>
    <!-- end of center content -->
