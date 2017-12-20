<?php

	$idkat = $_GET['id'];

	$sql = "DELETE FROM kategori WHERE id_kategori='$idkat'";
	$que = mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah dihapus');
				window.location='?hal=kategori-data';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal dihapus');
				window.location='?hal=kategori-data';
			</script>
		";
	}


?>