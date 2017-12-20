<?php

	$idpost = $_GET['id'];

	$sql = "DELETE FROM posting WHERE id_posting='$idpost'";
	$que = mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah dihapus');
				window.location='?hal=kategori-posting';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal dihapus');
				window.location='?hal=kategori-posting';
			</script>
		";
	}


?>