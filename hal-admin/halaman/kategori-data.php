<h2><i class="fa fa-file"></i> Kategori-data</h2>
<hr>	
<br>

<a href="?hal=kategori-tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
<br><br>


  
<?php
	
	$sql = "SELECT * FROM kategori";
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
		      <th scope='col'>Nama Kategori</th>
		      <th scope='col'>Aksi</th>
		    </tr>
		  </thead>

		";
		$no=1;
		while ($data=mysqli_fetch_array($que)) {
			$idkategori = $data['id_kategori'];
			$nama 		= $data['nama_kategori'];

			echo 
			"
				<tbody>
				    <tr>
				      <th scope='row'>$no</th>
				      <td>$nama</td>
				      <td>
						<a href='?hal=kategori-edit&id=$idkategori' class='btn btn-info'><i class='fa fa-edit'></i> Edit</a>
						<a href='?hal=kategori-hapus&id=$idkategori' class='btn btn-danger' onclick='return hapus()'><i class='fa fa-eraser'></i> Hapus</a>
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
