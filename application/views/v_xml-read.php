<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>baca data XML dari data encoding Sari</title>
		
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
	<div class="table-responsive" >
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">			<thead>
				<tr>
					<th width="13%">id</th>
					<th width="24%">Nama</th>
					<th width="9%">Asal Sekolah</th>
					<th width="7%">Alamat</th>
					<th width="12%">No. Telp</th>
				</tr>
			</thead>
			<tbody >
				
				<?PHP

					if(isset($xml) AND !empty($xml)){
						foreach($xml AS $dataxml){
				?>
							<tr>
								<td><?php echo $dataxml->id ?></td>
								<td><?php echo $dataxml->nama ?></td>
								<td><?php echo $dataxml->asal_sekolah ?></td>
								<td><?php echo $dataxml->alamat ?></td>
								<td><?php echo $dataxml->telepon ?></td>
							</tr>
				<?php	
						}
					}
					else {
						echo "Belum ada data<br>";
					}
				?>
			</tbody>
		</table>
	</div>
	</body>
		
</html>