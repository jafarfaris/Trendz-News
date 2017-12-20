<h2><i class="fa fa-edit"></i> Edit Posting</h2>
<hr>

<?php

	$idpost = $_GET['id'];

	$sql = "SELECT posting.id_posting, 
					posting.judul, 
					posting.foto, 
					posting.deskripsi_utama,
					posting.deskripsi_singkat, 
					posting.tanggal, 
					posting.id_kategori, 
					kategori.id_kategori, 
					kategori.nama_kategori
				FROM posting
				LEFT JOIN kategori ON posting.id_kategori=kategori.id_kategori
				WHERE posting.id_posting='$idpost'";

	$que    = mysqli_query($koneksi, $sql);

	while ($data=mysqli_fetch_array($que)) {
			$idpost 	= $data['id_posting'];
			$judul 		= $data['judul'];
			$foto 		= $data['foto'];
			$idkategori= $data['id_kategori'];
			$namakat    = $data['nama_kategori'];
			$desk 		= $data['deskripsi_singkat'];
			$deskripsi  = $data['deskripsi_utama'];
	}		

?>

<div class="jumbotron">
	<form action="?hal=posting-update" method="post" enctype="multipart/form-data" style="margin-top: -30px;">
		<input type="hidden" name="idposting" value="<?php echo $idpost; ?>">
<div class="row">
	<div class="col-md-8">
	  <div class="form-group">
	    <label for="judul">Judul</label>
	    <input type="text" class="form-control" name="judul" value="<?php echo "$judul" ?>">
	   </div>

	   <div class="form-group">
	   <textarea name="deskripsi" class="ckeditor"><?php echo "$deskripsi" ?></textarea>
	   </div>

		</div>
	
	<div class="col-md-3" style="border: 1px solid gainsboro; border-radius: 5px;">
	<div class="form-group">
  	<label for="sel1">Pilih Kategori :</label>

	<?php 

	$sql    = "SELECT * FROM kategori";
	$result = mysqli_query($koneksi, $sql);


	echo "<select class='form-control' style='width:auto' name='id_kategori'>";
	echo 
	"
		<option value='$idkategori'>$namakat</option>
	";
	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	echo "<option value='" . $row['id_kategori'] ."'>" . $row['nama_kategori'] ."</option>";
	}
	echo "</select>";
	} else {
	     echo "0 results";
	}

	?> <br>

	<div class="form-group">
	    <label for="judul">Deskripsi Singkat</label>
	    <textarea name="desk_singkat" class="form-control"><?php echo "$desk"; ?></textarea>
	</div>

	<div class="form-group">
	    <label for="judul">Foto Thumb</label>
	    <img src="<?php echo "foto/$foto"; ?>" width="100" height="100" alt="">
	    <input type="file" class="form-control" name="foto">
	</div>

  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
</form>
	
</div>
</div>
</div>
</form>
</div>

