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
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body id="page-top">
		
	
		<section class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="section-text">
	<div>
	<?php foreach($mahasiswa as $u){?>
<form action="<?php echo base_url('index.php/crud/update'); ?>" method="POST">

	<h3>Edit Data Mahasiswa</h3>
 
	<label for="fname">Nama</label>
    <input type="text" id="fname" name="nama" value="<?php echo $u->nama ?>">

    <label for="lname">NIM</label>
    <input type="hidden" id="lname" name="nim" value="<?php echo $u->nim ?>">
    <input type="text" id="lname" name="nim" value="<?php echo $u->nim ?>">
    
    
   <label for="lname">Jenis Kelamin</label>
    <input type="text" id="lname" name="jenis_kelamin" placeholder="Jenis Kelamin..">
   
    <label for="lname">alamat</label>
    <input type="text" id="lname" name="alamat" value="<?php echo $u->alamat ?>">
 
	<input type="submit" value="update">

	<?php }?>
 </form>
</div>
</div>
					</div>
					
				</div>
			</div>
		</section>
					
		<script src="<?php echo base_url()?>https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php echo base_url()?>http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?php echo base_url()?>aset/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>aset/js/jquery.appear.js"></script>
	
</body>
</html>