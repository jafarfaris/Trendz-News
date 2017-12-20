<?php 

		$keyword = $_POST['search'];

		$sql = "SELECT posting.id_posting, 
					posting.judul, 
					posting.foto, 
					posting.deskripsi_singkat, 
					posting.tanggal, 
					posting.id_kategori, 
					kategori.id_kategori, 
					kategori.nama_kategori,
					user.id_user,
					user.nama_lengkap
				FROM posting
				LEFT JOIN kategori ON posting.id_kategori=kategori.id_kategori
				LEFT JOIN user ON posting.id_user=user.id_user
				WHERE 
				posting.judul LIKE '%$keyword%' OR
				posting.deskripsi_singkat LIKE '%$keyword%' OR
				kategori.nama_kategori LIKE '%$keyword%' OR
				user.nama_lengkap LIKE '%$keyword%'
				";

	$que = mysqli_query($koneksi, $sql);
	
	$cek = mysqli_num_rows($que);

	//untuk nama kategorinya

	$kat = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$idkat'");
	$vie = mysqli_fetch_array($kat);

	echo 
	"
		<h5 style='color: cornflowerblue; font-weight: bold;'> Ditemukan $cek artikel</h5>
	";

	if ($cek==0) {
		echo 
		"
			<div class='alert alert-info' role='alert'>
			  <h4 style='color: cornflowerblue; font-weight: bold;'>Pencarian tidak ditemukan</h4>
			</div>
		";
	}
	else {
		
		while ($data=mysqli_fetch_array($que)) {
			$idpost     = $data['id_posting'];
			$namakat    = $data['nama_kategori'];
			$judul 		= $data['judul'];
			$foto 		= $data['foto'];
			$desk 		= $data['deskripsi_singkat'];
			$tanggal 	= $data['tanggal'];
			$author     = $data['nama_lengkap'];


			echo 
		"
			
			 <div class='card' style='width: 20rem; float: left; margin: 10px;'>
                <img class='card-img-top' src='hal-admin/foto/$foto' alt='Card image cap'>
                <div class='card-body'>
                    <h4 class='card-title' style='text-align: center;'>$judul</h4><hr>
                    <p class='card-text'>$desk</p><br>
                   <div class='row'>
						<div class='col-md-6'>
							<small>$tanggal</small>
						</div>

						<div class='col-md-6' style='text-align: right;'>
							<small>By: $author</small>
						</div>
						
					</div>
                    <a href='?pg=detail&id=$idpost' class='btn btn-primary'>Read More</a>
                </div>
          
 			</div>
		";
	}
}

?>

