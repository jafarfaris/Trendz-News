<?php

	$idkomen = $_GET['id'];

	$sql = "DELETE FROM komentar WHERE id_komentar='$idkomen'";
	$que = mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah dihapus');
				window.location='?hal=komentar-data';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal dihapus');
				window.location='?hal=komentar-data';
			</script>
		";
	}


?>