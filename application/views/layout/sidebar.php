<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
						<?php 
							echo $username;
						?> 
						<b class="caret"></b>
					</a> 
					<ul class="dropdown-menu">					
						<li>
                            <a href="<?php echo base_url();?>adminadmin/my_account"><i class="fa fa-fw fa-user"></i> Profile</a>
						</li>                    
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>user_auth/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
		<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" >
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url();?>adminadmin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posting"><i class="fa fa-fw fa-file"></i> Management Barang<i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="posting" class="collapse">
							<li>
								<a href="<?php echo base_url();?>adminadmin/kelola_barang">Manage</a>
							</li>
						</ul>
					</li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#laporan"><i class="fa fa-fw fa-file"></i>Management Penjualan<i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="laporan" class="collapse">
							<li>
								<a href="<?php echo base_url();?>adminadmin/kelola_penjualan">Manage</a>
							</li>
						</ul>
					</li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#petugas"><i class="fa fa-fw fa-file"></i> Management Member<i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="petugas" class="collapse">
							<li>
								<a href="<?php echo base_url();?>adminadmin/daftarmember">Daftar Member</a>
							</li>
						</ul>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            