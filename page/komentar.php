<h3 style='color: cornflowerblue; font-weight: bold;'>Kolom Komentar</h3><br>

<?php 

	$idpost = $_GET['id'];

	$sql = "SELECT * FROM posting WHERE id_posting=$idpost";
	$que = mysqli_query($koneksi, $sql);

	$data = mysqli_fetch_array($que);	

 ?>

 <form action="?pg=komentar-simpan" method="post">
 	<input type="hidden" name="idpost" value="<?php echo "$idpost" ?>">
  <div class="form-group">
  	<div class="form-group">
    <label for="Nama">Nama :</label>
    <input type="text" class="form-control" placeholder="Tuliskan Nama Anda" name="nama">
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email anda" name="email"><br>
    <div class="form-group">
    <label for="Nama">Komentar Anda :</label><br>
    <textarea name="komentar" style="width: 100%;" rows="5"></textarea>  
	</div>
    
  </div>
  
  <button type="submit" class="btn btn-secondary">Beri Komentar</button><br><br><br>
</form>