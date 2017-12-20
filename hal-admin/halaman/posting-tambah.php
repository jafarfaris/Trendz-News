<h2><i class="fa fa-plus"></i> Tambah Posting</h2>
<hr>

<div class="jumbotron">
	<form action="?hal=posting-simpan" method="post" enctype="multipart/form-data" style="margin-top: -30px;">
<div class="row">
	<div class="col-md-8">
	  <div class="form-group">
	    <label for="judul">Judul</label>
	    <input type="text" class="form-control" name="judul" placeholder="Masukan Judul">
	   </div>

	   <div class="form-group">
	   <textarea name="deskripsi" class="ckeditor"></textarea>
	   </div>

		</div>
	
	<div class="col-md-3" style="border: 1px solid gainsboro; border-radius: 5px;">
	<div class="form-group">
  	<label for="sel1">Pilih Kategori :</label>

	<?php 

	$sql    = "SELECT * FROM kategori";
	$result = mysqli_query($koneksi, $sql);

	echo "<select class='form-control' style='width:auto' name='id_kategori'>";
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
	    <textarea name="desk_singkat" class="form-control"></textarea>
	</div>

	<div class="form-group">
	    <label for="judul">Foto Thumb</label>
	    <input type="file" class="form-control" name="foto">
	</div>

  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
</form>
	
</div>
</div>
</div>
</form>
</div>





