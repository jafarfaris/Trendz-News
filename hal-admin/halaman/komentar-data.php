
<h2><i class="fa fa-commenting"></i>  Komentar</h2>
<hr><br>

<?php
	
	$sql = "SELECT  posting.id_posting, 
					posting.judul,
					komentar.id_komentar,
					komentar.id_posting,
					komentar.nama_pengunjung,
					komentar.email,
					komentar.komentar,
					komentar.tgl_komentar,
					komentar.status,
					kategori.id_kategori,
					kategori.nama_kategori
				FROM komentar
				LEFT JOIN posting ON komentar.id_posting=posting.id_posting
				LEFT JOIN kategori ON posting.id_kategori=kategori.id_kategori
				";

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
		<table class='table' style='text-align:center;'>
		  <thead class='thead-dark'>
		    <tr>
		      <th scope='col'>No</th>
		      <th scope='col'>Nama</th>
		      <th scope='col'>Kategori</th>		      
		      <th scope='col'>Judul</th>
		      <th scope='col'>Komentar</th>
		      <th scope='col'>Tgl Komentar</th>
		      <th scope='col'>Status</th>
		      <th scope='col'>Aksi</th>
		    </tr>
		  </thead>

		";

		$no=1;
		while ($data=mysqli_fetch_array($que)) {
			$idkomen    			= $data['id_komentar'];
			$nama_pengunjung 		= $data['nama_pengunjung'];
			$kate                   = $data['nama_kategori'];
			$judul                  = $data['judul'];
			$komentar               = $data['komentar'];
			$status                 = $data['status'];
			$tanggal 				= $data['tgl_komentar'];


			echo 
			"
				<tbody>
				    <tr>
				      <th scope='row'>$idkomen</th>
				      <td>$nama_pengunjung</td>	
				      <td>$kate</td>			      
				      <td>$judul</td>
				      <td>$komentar</td>
				      <td>$tanggal</td>
				      <td>$status</td>
				      <td>
						<a href='?hal=komentar-update&idk=$idkomen' class='btn btn-info'><i class='fa fa-edit'></i> Tampil</a><br>
						<a href='?hal=komentar-hapus&id=$idkomen' class='btn btn-danger' onclick='return hapus()'><i class='fa fa-eraser'></i> Hapus</a>
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