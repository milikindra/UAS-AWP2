<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Sistem Informasi Pelanggara dan Dispensasi Siswa</title>
		
		 <!-- Bootstrap Core CSS -->
		 		 
		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/vendor/bootstrap/css/bootstrap.min.css')?>">

		<!-- MetisMenu CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/vendor/metisMenu/metisMenu.min.css')?>">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/sb-admin-2.css')?>">

		<!-- Custom Fonts -->
		<link rel="stylesheet" href="<?= base_url('assets/bootstrap/vendor/font-awesome/css/font-awesome.min.css')?>" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- pindah-->
		
		<!-- jQuery -->
		<script src="<?= base_url('assets/bootstrap/vendor/jquery/jquery.min.js')?>" ></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?= base_url('assets/bootstrap/vendor/bootstrap/js/bootstrap.min.js')?>" ></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="<?= base_url('assets/bootstrap/vendor/metisMenu/metisMenu.min.js')?>" ></script>

		<!-- Morris Charts JavaScript -->
		<script src="<?= base_url('assets/bootstrap/vendor/raphael/raphael.min.js')?>" ></script>
		<script src="<?= base_url('assets/bootstrap/vendor/morrisjs/morris.min.js')?>" ></script>
	   <script src="<?= base_url('assets/bootstrap/data/morris-data.js')?>" ></script>

		<!-- Custom Theme JavaScript -->
		<script src="<?= base_url('assets/bootstrap/dist/js/sb-admin-2.js')?>" ></script>

	</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= site_url('Point/view'); ?>">Sistem Informasi Pelanggaran dan Dispensasi Siswa</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--
						<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
						-->
                        <li>
						<a href="<?= site_url('Point/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?= site_url('point/view')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a  href="<?= site_url('user/v_user')?>"><i class="fa fa-bar-chart-o fa-fw"></i> Data User</a>
                        </li>
						<li>
                            <a href="<?= site_url('user/v_jsonxml')?>"><i class="fa fa-bar-chart-o fa-fw"></i> XML/JSON</a>
                        </li>
                        <!--
						<li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Pelanggaran<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Jenis Pelanggaran</a>
                                </li>
                                <li>
                                    <a href="#">Daftar Pelanggaran</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        <!--
						</li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Data Siswa</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Dispensasi</a>
						</li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Ketidakhadiran</a>
                        </li>
						-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
				</div>
				 <div>
					<b>Selamat Datang <i>
						<?php
							echo $this->session->userdata('username');
						?>
						</i> di Sistem Informasi Pengelolahan Data Pelanggaran, Dispensasi, & Ketidakhadiran Siswa SMAN 1 Giri</b>
				 </div>
				 <div class="foto ">
				 </br>
				 </br>
                     <img src="<?= base_url('images/master/logo.jpg')?>" name="DP" width="220" id="image" style="background-color: #D6D6D6" align="right">   
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  
</body>

</html>
