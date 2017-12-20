<?php 

	$hal = $_GET['pg'];

	if ($hal=='home') {
		include 'page/home.php';
	}

	elseif ($hal=='kategori') {
		include 'page/kategori.php';
	}
	elseif ($hal=='detail') {
		include 'page/detail.php';
	}
	elseif ($hal=='cari-posting') {
		include 'page/cari-posting.php';
	}
	elseif ($hal=='komentar') {
		include 'page/komentar.php';
	}
	elseif ($hal=='komentar-simpan') {
		include 'page/komentar-simpan.php';
	}

	elseif (empty($hal)) {
		include 'page/home.php';
	}
	else {
		echo "<strong>Maaf halaman yg anda tuju belum tersedia !<strong>";
	}

 ?>