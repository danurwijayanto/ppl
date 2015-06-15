
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
                         <div>
                                    <table id="myTable" class="table table-bordered table-hover table-striped" >
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Username</th>
                                                <th>No Handphone</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
											 <?php
                                                foreach ($query as $data) { //ngabsen data
                                            ?>
                                            <tr>
                                                <td><?php echo $data->id; ?></td> 
                                                <td><?php echo $data->nama; ?></td>
                                                <td><?php echo $data->no_hp; ?></td>
                                                <td><?php echo $data->email; ?></td>
                                                <td><?php echo $data->alamat; ?></td>
                                                <td>
                                                      <a href="<?php echo base_url();?>keluser/delete_user?id=<?php echo $data->id; ?>">Delete</a>
                                                        <a href="<?php echo base_url();?>keluser/edit_user?id=<?php echo $data->id; ?>">Edit</a>
                                                </td>

                                            </tr>
                                            <?php
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
            <!-- /.container-fluid -->