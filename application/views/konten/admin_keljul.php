
                                <!-- main page -->
			<div id="page-wrapper">
				<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $ket;?>
                        </h1>
                    </div>
					 <div class="col-lg-12">
                         <div class="table-responsive">
                                    <table  id="myTable" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID Transaksi</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                               <!-- <th>Barang yang Dibeli</th>
                                                <th>Jumlah</th> -->
												<th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 

											 <?php
                                             if (empty($invoice)){}else{
                                                foreach ($invoice as $data) { //ngabsen data
                                            ?>
                                            <tr>
                                                <td><?php echo $data->id; ?></td> 
                                                <td><?php echo $data->nama; ?></td>
                                                <td><?php echo $data->email; ?></td>
                                               <!-- <td><?php echo $data->product_name; ?></td>
                                                <td><?php echo $data->qty; ?></td>-->
                                                <td><?php echo $data->status; ?></td>
                                                <td>
                                                      <a href="<?php echo base_url();?>adminadmin/delete_invoice_admin?id=<?php echo $data->id; ?>">Delete</a>
                                                        <a href="<?php echo base_url();?>adminadmin/konfirmasi_invoice?id=<?php echo $data->id; ?>">Edit</a>
                                                </td>

                                            </tr>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>                     
											
                                </div>

                     </div><!-- ./col -->

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Kelola Pembayaran
                        </h1>
                    </div>
                     <div class="col-lg-12">
                         <div class="table-responsive">
                                    <table  id="myTable1" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID Transaksi</th>
                                                <th>Dari Bank</th>
                                                <th>Pemilik Bank</th>
                                                <th>Tanggal</th>
                                                <th>Jumlah</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                             <?php
                                             if (empty($pembayaran)){}else{
                                                foreach ($pembayaran as $data) { //ngabsen data
                                            ?>
                                            <tr>
                                                <td><?php echo $data->id_invoice; ?></td> 
                                                <td><?php echo $data->dari_bank; ?></td>
                                                <td><?php echo $data->nama_pemilik; ?></td>
                                                <td><?php echo $data->tanggal; ?></td>
                                                <td><?php echo $data->jumlah_transfer; ?></td>
                                                 <td><img alt="Thumbnail image" src="<?php echo base_url();?>uploads/bukti/<?php echo $data->scan_struk?>" class="img-thumbnail" width="150" height="200"></td>
                                               
                                                <td>
                                                      <a href="<?php echo base_url();?>adminadmin/delete_bukti?id=<?php echo $data->id_invoice; ?>" class="btn btn-danger">Delete</a>
                                                        <a href="<?php echo base_url();?>adminadmin/accept_bukti?id=<?php echo $data->id_invoice; ?>" class="btn btn-primary">Accept</a>
                                                </td>

                                            </tr>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>                     
                                            
                                </div>

                     </div><!-- ./col -->

                </div>
                </div>
                <!-- /.row -->
			</div>

            <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
            </script>

             <script>
            $(document).ready(function(){
                $('#myTable1').DataTable();
            });
            </script>
            <!-- /.container-fluid -->