<?php 

	$idpost     = $_POST['idposting'];
	$judul 		= $_POST['judul'];
	$deskripsi	= $_POST['deskripsi'];
	$idkat		= $_POST['id_kategori'];
	$desksingkat= $_POST['desk_singkat'];
	// $tanggal	= date("y-m-d h:i:sa");

	$namafoto	= $_FILES['foto']['name'];
	$lokasifoto	= $_FILES['foto']['tmp_name'];
	$namafotobaru= md5($namafoto);

	

	if (empty($namafoto)) {
		$sql = "UPDATE posting SET judul='$judul', deskripsi_utama='$deskripsi', deskripsi_singkat='$desksingkat', 								id_kategori='$idkat'
	   			WHERE id_posting='$idpost'";
	}
	else {
		//untuk memindahkan foto hasil upload ke folder foto
	move_uploaded_file($lokasifoto, "foto/$namafotobaru");
	$sql = "UPDATE posting SET judul='$judul', deskripsi_utama='$deskripsi', deskripsi_singkat='$desksingkat', 								foto='$namafotobaru', id_kategori='$idkat'
	   		WHERE id_posting='$idpost'";
	}

	
		
	$que = mysqli_query($koneksi, $sql);

	if ($que) {
		echo 
		"
			<script type='text/javascript'>
				alert('Data telah diupdate');
				window.location='?hal=kategori-posting';
			</script>
		";
	}
	else {
		echo 
		"
			<script type='text/javascript'>
				alert('Gagal diupdate');
				window.location='?hal=posting-edit&id=$idpost';
			</script>
		";
	}

 ?>



 