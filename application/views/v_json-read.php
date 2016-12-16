<!DOCTYPE html>
<html>
	<head>
		<title>
			baca data json dari data encoding Sari
		</title>
	</head>
	<body>
		
		<div id="demo"></div>
		 <!-- jQuery -->
		<script src="<?= base_url('assets/bootstrap/vendor/jquery/jquery.min.js')?>" ></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?= base_url('assets/bootstrap/vendor/bootstrap/js/bootstrap.min.js')?>" ></script>

		<script type="text/javascript">
			var source = "http://uas-awp2.pe.hu/index.php/welcome/jsontulis";
			$.getJSON(source, function(data){
				$.each(datay, function(i,dtsiswa){
					$("#demo").append(
						"Id Siswa : " + dtsiswa + "<br>" +
						"Nama Siswa : " + dtsiswa + "<br>" +
						"Asal Sekolah : " + dtsiswa + "<br>" +
						"Alamat : " + dtsiswa + "<br>" +
						"Telepon : " + dtsiswa + "<br>" 

					);
				});
			});
		
		</script>
	</body>
		
</html>