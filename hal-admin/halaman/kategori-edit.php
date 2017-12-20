<?php

	$idkat = $_GET['id'];
	$sql   = "SELECT * FROM kategori WHERE id_kategori='$idkat'";
	$que   = mysqli_query($koneksi, $sql);

	while ($data=mysqli_fetch_array($que)) {
		$nama = $data['nama_kategori'];
	}

?>


<h2><i class="fa fa-edit"></i> Edit Kategori</h2>
<hr>

<form action="?hal=kategori-update" method="post">
	<input type="hidden" name="idkategori" value="<?php echo $idkat; ?>">
  <div class="form-group">
    <label for="nama kategori">Nama Kategori</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Kategori" value="<?php echo "$nama"; ?>">
   </div>
  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
</form>