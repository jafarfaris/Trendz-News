<?php

	$id	  = $_POST['idkategori'];
	$nama = $_POST['nama'];

	$sql = "UPDATE kategori SET nama_kategori='$nama'
			WHERE id_kategori='$id'";
	$que = mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah diubah');
				window.location='?hal=kategori-data';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal diubah');
				window.location='?hal=kategori-edit&id=$id';
			</script>
		";
	}



?>

