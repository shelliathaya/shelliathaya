<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Data Mahasiswa</title>
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>aset/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>aset/css/style.css" rel="stylesheet">
		<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 12px;
}

tr:nth-child(even){background-color: black}

th {
  background-color: #66CDAA;
  color: black;
}
</style>
</head>
<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<h2><a class="page-scroll" href="#UNIVERSITAS SUMATERA UTARA">UNIVERSITAS SUMATERA UTARA</a></h2>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>

						<li>
							<a class="page-scroll" href="#home">HOME</a>
						</li>
						<li>
							<a class="page-scroll" href="#datamahasiswa">Data Mahasiswa</a>
						</li>
						<li>
							<a class="page-scroll" href="#about">About</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->
		<header>
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in"> WELCOME TO DATA STUDENT FORM</div>
						<div class="intro-heading">PLEASE COMPLETE THIS FORM CORRECTLY!</div>
						<center><h3><a class="page-scroll btn btn-xl" href="<?php echo base_url('index.php/crud/input'); ?>">INPUT DATA</a></center></h3>
					</div>
				</div>
			</div>
		</header>

<section id="home" class="dark-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<a href="view/v_tampil.php"></a></div></div></div></div></section>
		<section id="datamahasiswa" class="dark-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<br>
							<h2>Data Mahasiswa</h2>
							<p>DATA MAHASISWA UNIVERSITAS SUMATERA UTARA</p>
						</div>
					</div>
				</div>
			<br>

	<table style="margin:20px auto;" border="1">
	
			<th>NO</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>ACTION</th>
		</tr>
		<?php
		$no = 1;
		foreach($mahasiswa as $u) {
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td><?php echo $u->alamat ?></td>
			<td>
			<button type="button" class="btn btn-primary"><?php echo anchor('crud/edit/'.$u->nim,'Edit');?></button>
				<button type="button" class="btn btn-danger"><?php echo anchor('crud/delete/'.$u->nim,'Delete');?></td></button>
		</tr>
		<?php } ?>
	</table>
						</div>
					</div>
					
				</div>
			</div>
		</section>

				

		<section id="about" class="dark-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>ABOUT</h2>
							<p>Terima kasih telah mengunjungi web Data Mahasiswa. Adapun rekomendasi lebih lengkap anda dapat mengunjungi situs dibawah ini. Semoga harimu menyenangkan</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-briefcase ot-circle"></i>
							<h3>BERANDA</h3>
							<p>adalah sebuah universitas negeri yang terletak di Kota Medan, Indonesia...</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-photo ot-circle"></i>
							<h3>TENTANG USU</h3>
							<p>Pada tahun 2019 usu memiliki sebanyak 16 fakultas dan lebih dari 130 program studi atau jurusan...</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-camera-retro ot-circle"></i>
							<h3>AKADEMIK</h3>
							<p>Adalah komitmen kami untuk mengembangkan secara konsisten sebuah komunitas belajar yang selalu melangkah...</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-cube ot-circle"></i>
							<h3>ARSIP</h3>
							<p>Berita MEDAN – HUMAS USU : Internasionalisasi perguruan tinggi bagi Universitas Sumatera Utara</p>
						</div>
					</div>
					<!-- end about module -->
				</div>
			</div>
			<!-- /.container -->

			<footer>
			<div class="container text-center">
				<p>Contact Us <a href="https://www.usu.ac.id/id/abdimas-kontak.html"><span>UNIVERSITAS SUMATERA UTARA</span></a></p>
			</div>
		</footer>

		<script src="<?php echo base_url()?>https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php echo base_url()?>http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>aset/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>aset/js/jquery.appear.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
			</header>
				</body>
					</html>