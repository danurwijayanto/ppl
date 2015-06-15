<?php
    foreach($barang as $barang)
    { 
        $id=$barang->id;
        $kategori=$barang->kategori;
        $nama=$barang->nama_barang;
        $s=$barang->s;
        $m=$barang->m;
        $l=$barang->l;
        $xl=$barang->xl;
        $berat=$barang->berat;
        $harga=$barang->harga;
        $gambar=$barang->gambar;
        $deskripsi=$barang->deskripsi;
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
                        		<td>Kategori</td>
                        		<td>
                                    <select name='kategori'>
                        			<?php 
            							foreach($query as $row)
           					 			{ 
              								echo '<option value="'.$row->id.'">'.$row->kategori.'</option>';
           			 					}
            						?>
									</select>
                        		</td>
                        	</tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td>
                                    <input type="text" id="nambar" name="nambar" value="<?php echo $nama;?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Ukuran dan Stok</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>S</td>
                                            <td><input type="text" id="s" name="s" value="<?php echo $s;?>"required></td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td><input type="text" id="m" name="m" value="<?php echo $m;?>" required></td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td><input type="text" id="l" name="l" value="<?php echo $l;?>" required></td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td><input type="text" id="xl" name="xl" value="<?php echo $xl;?>" required></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Berat Barang</td>
                                <td><input type="text" id="berat" name="berat" value="<?php echo $berat;?>" required></td>
                            </tr>
                            <tr>
                                <td>Harga Barang</td>
                                <td><input type="text" id="harga" name="harga" value="<?php echo $harga;?>" required></td>
                            </tr>
                            <tr>
                                <td>Gambar</td>
                                <td> <div class="product_img"><a href="details.html"><img src="<?php echo base_url();?>uploads/<?php echo $gambar; ?>" alt="" border="0" width="200" height="200" /></a></div></td>
                            </tr>
                             <tr>
                               
                            </tr>
                             <tr>
                                <td>Upload Gambar</td>
                                <td id="upload2"><input type="file" name="userfile" id="upload" size="20" required >
                                </td>
                            </tr>
                             <tr>
                                <td>Deskripsi Produk</td>
                                <td><input type="text" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi;?>" required></td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="update" value="Update" formaction="<?php echo base_url();?>kelbar/do_update?id=<?php echo $id; ?>" class="btn btn-primary">Update</td>
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