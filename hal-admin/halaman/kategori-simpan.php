<?php

	
	$nama = $_POST['nama'];

	$sql = "INSERT INTO kategori VALUES ('', '$nama')";
	$que = mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah disimpan');
				window.location='?hal=kategori-data';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal disimpan');
				window.location='?hal=kategori-tambah';
			</script>
		";
	}



?>

