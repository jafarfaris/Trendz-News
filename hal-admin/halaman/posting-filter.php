
<a href="?hal=posting-tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>

<a href="?hal=kategori-posting" class="btn btn-success"><i class="fa fa-refresh"></i> Refresh</a>
<br><br>


  
<?php
	
	$id_kategori 	= $_GET['idkat'];

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
				WHERE posting.id_kategori=$id_kategori";
	$que = mysqli_query($koneksi, $sql);
	
	$cek = mysqli_num_rows($que);

	if ($cek==0) {
		echo 
		"
			<div class='alert alert-info' role='alert'>
			  <h4>Data masih kosong</h4>
			</div>
		";
	}
	else {
		echo 
		"
		<table class='table' id='table_id' style='text-align:center';>
		  <thead class='thead-dark'>
		    <tr>
		      <th scope='col'>No</th>
		      <th scope='col'>Judul</th>
		      <th scope='col'>Foto Thumb</th>
		      <th scope='col'>Kategori</th>
		      <th scope='col'>Desk Singkat</th>
		      <th scope='col'>Nama Author</th>
		      <th scope='col'>Tanggal Posting</th>
		      <th scope='col'>Aksi</th>
		    </tr>
		  </thead>

		";
		$no=1;
		while ($data=mysqli_fetch_array($que)) {
			$idpost     = $data['id_posting'];
			$namakat     = $data['nama_kategori'];
			$judul 		= $data['judul'];
			$foto 		= $data['foto'];
			$desk 		= $data['deskripsi_singkat'];
			$tanggal 	= $data['tanggal'];
			$author     = $data['nama_lengkap'];

			echo 
			"
				<tbody>
				    <tr>
				      <th scope='row'>$idpost</th>
				      <td>$judul</td>
				      <td><img src='foto/$foto' alt='Foto Thumbnail' style='width:100px; height:80px;'></td>
				      <td>$namakat</td>
				      <td>$desk</td>
				      <td>$author</td>
				      <td>$tanggal</td>
				      <td>
						<a href='?hal=posting-edit&id=$idpost' class='btn btn-info'><i class='fa fa-edit'></i> Edit</a>
						<a href='?hal=posting-hapus&id=$idpost' class='btn btn-danger' onclick='return hapus()'><i class='fa fa-eraser'></i> Hapus</a>
				      </td>
				    </tr>
				
			";
			$no++;
		}
		echo 
		"
			  </tbody>
			</table>
		";
	}

?>

<style type="text/css">
	table { border-collapse: collapse; }
    tr { border: none; }
    td {
     border-right: solid 1px #333; 
     border-left: solid 1px #333;
}
</style>

<script type="text/javascript">
	function hapus() {
		var pesan;
		pesan = confirm('Apakah anda ingin menghapus data ini?');

		if (pesan) {
			return true;
		}
		else {
			return false;
		}
	}
</script>

<br><br><br>
<h4>Pilih Kategori</h4>
<hr>

<ol>
	<h5>
	
	<?php 

	$kat 	= "SELECT * FROM kategori";
	$qqq 	= mysqli_query($koneksi,$kat);

	while ($tampil=mysqli_fetch_array($qqq)) {
		$idkat 	= $tampil['id_kategori'];
		$namkat = $tampil['nama_kategori'];

		echo 
		"
			<li><a href='?hal=posting-filter&idkat=$idkat'>$namkat</a></li>
		";
	}


	 ?>
	</h5>
</ol>





















