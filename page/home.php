<h1 style='color: cornflowerblue; font-weight: bold;'>Home</h1><hr>

<?php 

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
				LEFT JOIN user ON posting.id_user=user.id_user";
	$que = mysqli_query($koneksi, $sql);
	
	$cek = mysqli_num_rows($que); // menghitung jumlah database

	if ($cek==0) {
		echo 
		"
			<div class='alert alert-info' role='alert'>
			  <h4>Data masih kosong</h4>
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
			 <title>Welcome to Trendz News!</title>
			 <div class='card' style='width: 350px; float: left; margin: 10px;'>
			 <a href='?pg=detail&id=$idpost' style='text-decoration: none; color: #333;'>
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
                </div></a>
          
 			</div>
		";
	}
}

?>