<?php 

	$nama 	= $_POST['nama'];
	$email 	= $_POST['email'];
	$komen	= $_POST['komentar'];
	$idpost	= $_POST['idpost'];
	$tgl	= date("y/m/d h:i:s");
	$status	= "Belum Tampil";

	$sql 	= "INSERT INTO komentar VALUES ('', '$nama', '$email', '$komen', '$tgl', '$status', '$idpost')";
	$que	= mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
		<script type='text/javascript'>
		 	alert('Maaf, komentar Anda kami simpan terlebih dahulu untuk pengecekan');
		 	window.location='?pg=detail&id=$idpost'
		 </script>
		";
	}
	else {
		echo 
		"
		<script type='text/javascript'>
		 	alert('Maaf, komentar gagal disimpan');
		 	window.location='?pg=komentar&id=$idpost'
		 </script>
		";
	}



 ?>

 