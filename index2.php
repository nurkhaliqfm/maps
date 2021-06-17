<!DOCTYPE html>
<html>
<head>
	<title>Website Admin Pangoje'</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	
	.table {
    color: #212529;
    background-color: lightgreen;
    text-align: center;
}
</style>

</head>
<body>
	<div class="container">
		<h2 style="text-align: center;"><br>Pendaftaran Mitra Usaha <br>PANGOJE'</h2>		
		<br>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Suksesss</h4>
					Pendaftaran Berhasil....
				</div> 								
				<?php
			}
		}
		?>
		<br>
		<!-- <a href="user_tambah.php" class="btn btn-info btn-sm">Daftar Mitra Lagi</a> -->
		<!-- <a href="../adminpangoje_informasi/index.php" class="btn btn-info btn-sm">Dashboard Informasi</a>
		<a href="../adminpangoje_driver/index.php" class="btn btn-info btn-sm">Dashboard Driver</a>
		<a href="../adminpangoje_warung/index.php" class="btn btn-info btn-sm">Dashboard Warung</a> -->
		<br>		
				
		<table class="table table-bordered">
			
			<th style='background-color: "lightgreen";'>
				<H5>Selamat Pendaftaran Anda Telah Selesai</H5>
			</th>

			
		
			


			<tr>
				<th width="100%">Terimakasih telah melakukan pendaftaran sebagai Mitra UMKM di aplikasi Pangoje
								Untuk menyelesaikan pendaftaran anda silahkan kirim berkas2 dibawah ini ke email mastertechindonesia15@gmail.com:<br>
					1. Foto KTP<br>
					2. Foto Kedai/Toko/resto<br>
					3. Foto Menu beserta Harga<br><br>

					Semoga hadirnya aplikasi Pangoje bisa meningkatkan omset anda😇🙏<br><br><br><a href="https://pangoje.id" class="btn btn-info btn-sm">Kembali ke Beranda</a>
				</th>
				<!-- <th width="20%">Hari Buka warung/Toko</th>
				<th width="20%">Jam Buka Warung/Toko</th>
				<th width="20%">Nama Pemilik</th>
				<th width="20%">Nomor Telepon</th>
				<th width="20%">Nomor WA</th>
				<th width="20%">Alamat email</th>
				<th width="20%">Alamat Lengkap Warung/Toko</th>
				<th width="20%">Alamat titik</th>
				<th width="20%">Foto Diri</th> -->

			</tr>

			


		</table>




	</div>
	<!-- <div>
		<H5>SSSelamat Pendaftaran Anda Telah Selesai</H5>
	</div>
	<p>SSSelamat Pendaftaran Anda Telah Selesai</p> -->
</body>
</html>