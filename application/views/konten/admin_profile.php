
                                <!-- main page -->
			<div id="page-wrapper">
				<div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Profile Management
                        </h1>
                    </div>
					 <div class="col-lg-12">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Detail Akun</h3>
                            </div>
                            <div class="panel-body">
                                <form action="fungsi/updateprofile.php" method="post">
                                <?php 
                                //    echo $err;
                                ?>
                                <table style="width:50%">
                                    <tr>
                                        <td>
                                            <label for="username">User Name    </label>
                                        </td>
                                        <td>
                                            <input type="text" id="username" name="username" class="form-control" value="<?php echo $username;?>" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            &nbsp
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="email">Email</label>
                                        </td>
                                        <td>
                                            <input type="text" id="email" name="email" class="form-control" value="<?php echo $email;?>" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            &nbsp
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="password">Password Lama</label>
                                        </td>
                                        <td>
                                            <input type="password" id="passwordlama" name="passwordlama" class="form-control" placeholder="Password Lama" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            &nbsp
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="password">Password Baru</label>
                                        </td>
                                        <td>
                                            <input type="password" id="passwordbaru" name="passwordbaru" class="form-control" placeholder="Password Baru" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            &nbsp
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="cfmpassword">Confirm Password</label>
                                        </td>
                                        <td>
                                            <input type="password" id="cfmpassword" name="cfmpassword" class="form-control" placeholder="Confirm Password Baru" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <input type="submit" name="change" value="Change Password" class="btn btn-primary">
                                        </td>
                                    </tr>
                                </table>
                                <form>
                            </div>
                        </div>
                </div>
                </div>
                <!-- /.row -->
			</div>
            <!-- /.container-fluid -->