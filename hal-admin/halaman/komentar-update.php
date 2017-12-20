<?php 

	$id   = $_GET['idk'];
	$status = "Tampil";

	$sql	= "UPDATE komentar SET status='$status' WHERE id_komentar='$id'";
	$que	= mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah diubah');
				window.location='?hal=komentar-data';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal diubah');
				window.location='?hal=komentar-data';
			</script>
		";
	}





 ?>

 