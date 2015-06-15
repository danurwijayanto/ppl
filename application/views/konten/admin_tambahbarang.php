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
                        
                        <form action='<?php echo base_url();?>kelbar/do_upload' enctype="multipart/form-data" method='post'>
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
                                    <input type="text" id="nambar" name="nambar" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Ukuran dan Stok</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>S</td>
                                            <td><input type="text" id="s" name="s" required></td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td><input type="text" id="m" name="m" required></td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td><input type="text" id="l" name="l" required></td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td><input type="text" id="xl" name="xl" required></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Berat Barang</td>
                                <td><input type="text" id="berat" name="berat" required></td>
                            </tr>
                            <tr>
                                <td>Harga Barang</td>
                                <td><input type="text" id="harga" name="harga" required></td>
                            </tr>
                             <tr>
                                <td>Unggah File</td>
                                <td><input type="file" name="userfile" size='20' required></td>
                            </tr>
                             <tr>
                                <td>Deskripsi Produk</td>
                                <td><input type="text" id="deskripsi" name="deskripsi" required></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
                                <td></td>
                            </tr>
                        </form>
                            <tr>
                                <td><form><button type="submit" class="btn btn-warning" formaction="<?php echo base_url();?>adminadmin/kelola_barang">Lihat Daftar Barang</button></form></td>
                                <td></td>
                            </tr>
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