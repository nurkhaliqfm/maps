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



</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Website Admin <br> Dasboar Pendaftaran Mitra</h2>		
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
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Mantap Bosss
				</div> 								
				<?php
			}
		}
		?>
		<br>
		<a href="user_tambah.php" class="btn btn-info btn-sm">Tambah Data</a>
		<!-- <a href="../adminpangoje_informasi/index.php" class="btn btn-info btn-sm">Dashboard Informasi</a>
		<a href="../adminpangoje_driver/index.php" class="btn btn-info btn-sm">Dashboard Driver</a>
		<a href="../adminpangoje_warung/index.php" class="btn btn-info btn-sm">Dashboard Warung</a> -->
		<br>		
		<br>		
		<table class="table table-bordered">
			<tr>
				<th width="20%">Nama warung/Toko</th>
				<th width="20%">Hari Buka warung/Toko</th>
				<th width="20%">Jam Buka Warung/Toko</th>
				<th width="20%">Nama Pemilik</th>
				<th width="20%">Nomor Telepon</th>
				<th width="20%">Nomor WA</th>
				<th width="20%">Alamat email</th>
				<th width="20%">Alamat Lengkap Warung/Toko</th>
				<th width="20%">titik lokasi</th>
				<th width="20%">Foto Diri</th>


			</tr>



			<?php
			include 'koneksi.php'; 
			// $id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM form_mitra");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					
					<td><?php echo $d['namatoko_mitra']; ?></td>
					<td><?php echo $d['haribuka_mitra']; ?></td>
					<td><?php echo $d['jambuka_mitra']; ?></td>
					<td><?php echo $d['nama_mitra']; ?></td>
					<td><?php echo $d['nohp_mitra']; ?></td>
					<td><?php echo $d['nowa_mitra']; ?></td>
					<td><?php echo $d['email_mitra']; ?></td>
					<td><?php echo $d['alamat_mitra']; ?></td>
					<td><?php echo $d['lat_long']; ?></td> 
					<td><img src="gambar/<?php echo $d['foto_mitra'] ?>" width="35" height="40"></td>
				</tr>
				<?php
			}
			?>






			<!-- <?php
			include 'koneksi.php'; 
			$data = mysqli_query($koneksi,"SELECT * FROM user WHERE user_id= 2 ");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<th width="20%">Promo 2</th>
					<td><?php echo $d['user_nama']; ?></td>
					<td><?php echo $d['user_kontak']; ?></td>
					<td><?php echo $d['user_alamat']; ?></td>
					<td><img src="gambar/<?php echo $d['user_foto'] ?>" width="35" height="40">
	                    <a href="ubah_promo2.php"><button>Ubahhh</button></a></td>
				</tr>
				<?php
			}
			?>

			<?php
			include 'koneksi.php'; 
			$data = mysqli_query($koneksi,"SELECT * FROM user WHERE user_id= 3 ");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<th width="20%">Promo 3</th>
					<td><?php echo $d['user_nama']; ?></td>
					<td><?php echo $d['user_kontak']; ?></td>
					<td><?php echo $d['user_alamat']; ?></td>
					<td><img src="gambar/<?php echo $d['user_foto'] ?>" width="35" height="40">
	                    <a href="ubah_promo3.php"><button>Ubahhh</button></a></td>
				</tr>
				<?php
			}
			?>

			<?php
			include 'koneksi.php'; 
			$data = mysqli_query($koneksi,"SELECT * FROM user WHERE user_id= 4 ");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<th width="20%">Promo 4</th>
					<td><?php echo $d['user_nama']; ?></td>
					<td><?php echo $d['user_kontak']; ?></td>
					<td><?php echo $d['user_alamat']; ?></td>
					<td><img src="gambar/<?php echo $d['user_foto'] ?>" width="35" height="40">
	                    <a href="ubah_promo4.php"><button>Ganti</button></a></td>
				</tr>
				<?php
			}
			?> -->


		</table>
	</div>
</body>
</html>