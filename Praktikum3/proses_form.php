<?php

// POST nim,  nama, jenis kelamin, program studi, keahlian, domisili, email

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// Buat Tampilan Selamat Datang di IT Club Data Science


?>

<h1>Terima Kasih Sudah Mendaftar di IT Club Data Science <br></h1>
<h5>NIM : <?php echo $nim; ?></h5>
<h5>Nama : <?php echo $nama; ?></h5>
<h5>Jenis Kelamin : <?php echo $jenis_kelamin; ?></h5>
<h5>Prodi : <?php echo $prodi; ?></h5>
<h5>Keahlian : <?php echo $skill; ?></h5>
<h5>Domisili : <?php echo $domisili; ?></h5>
<h5>Email : <?php echo $email; ?></h5>