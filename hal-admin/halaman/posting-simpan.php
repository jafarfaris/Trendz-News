<?php 

	$judul 		= $_POST['judul'];
	$deskripsi	= $_POST['deskripsi'];
	$idkat		= $_POST['id_kategori'];
	$desksingkat= $_POST['desk_singkat'];
	$tanggal	= date("y.m.d");

	$namafoto	= $_FILES['foto']['name'];
	$lokasifoto	= $_FILES['foto']['tmp_name'];
	$namafotobaru= md5($namafoto);

	//untuk memindahkan foto hasil upload ke folder foto
	move_uploaded_file($lokasifoto, "foto/$namafotobaru");

	$sql = "INSERT INTO posting VALUES('', '$judul', '$namafotobaru', '$desksingkat', '$deskripsi', '$tanggal', '$idkat', '$user_id')";
	$que = mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah disimpan');
				window.location='?hal=kategori-posting';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal disimpan');
				window.location='?hal=posting-tambah';
			</script>
		";
	}

 ?>



 