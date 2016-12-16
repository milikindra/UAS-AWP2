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
	</head>
	<body>
		<?php
		// echo heading('Silahkan Masuk', 1);
		// echo form_open('point/login');
		// echo form_label('Username : ', 'username');				echo form_input('username')."<br />";
		// echo form_label('Password : ', 'password');				echo form_password('password')."<br />";
		// echo form_submit('submit', 'Masuk');
		// echo form_close();
		// ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Silahkan Masuk</h3>
						</div>
						<div class="panel-body">
							
							<?php
								echo form_open('point/login', 'POST');
							?>
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="username" name="username" type="text" autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
									</div>
									<!-- Change this to a button or input when using this as a form -->
									<?php
									echo form_submit('submit', 'Masuk');
									?>
									<!--<a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
								</fieldset>
								<?php
								echo form_close();
								?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="<?= base_url('assets/bootstrap/vendor/jquery/jquery.min.js')?>"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?= base_url('assets/bootstrap/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="<?= base_url('assets/bootstrap/vendor/metisMenu/metisMenu.min.js')?>" ></script>

		<!-- Custom Theme JavaScript -->
		<script src="<?= base_url('assets/bootstrap/dist/js/sb-admin-2.js')?>" ></script>
		
		
		
	</body>
</html>