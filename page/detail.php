<?php 

        $id = $_GET['id'];

        $sql = "SELECT posting.id_posting, 
                    posting.judul, 
                    posting.foto, 
                    posting.deskripsi_utama, 
                    posting.tanggal, 
                    posting.id_kategori, 
                    kategori.id_kategori, 
                    kategori.nama_kategori,
                    user.id_user,
                    user.nama_lengkap
                FROM posting
                LEFT JOIN kategori ON posting.id_kategori=kategori.id_kategori
                LEFT JOIN user ON posting.id_user=user.id_user
                WHERE posting.id_posting='$id'";

    $que = mysqli_query($koneksi, $sql); 

    while ($data=mysqli_fetch_array($que)) {
            $idpost     = $data['id_posting'];
            $namakat    = $data['nama_kategori'];
            $judul      = $data['judul'];
            $foto       = $data['foto'];
            $deskripsi  = $data['deskripsi_utama'];
            $tanggal    = $data['tanggal'];
            $author     = $data['nama_lengkap'];

    echo 
    "
    <title>$judul</title>
    <div class='container'>
       <h2 style='text-align: center;'>$judul</h2><br>
    <center><img src='hal-admin/foto/$foto' style='width: 70%; height: 400px;' alt='Gambar'></center><br><br>
    <p>
        $deskripsi
    </p><br>
    <div style='text-align: right;'>
        <small>Diposting pada $tanggal , by: <strong>$author</strong></small>
    </div> 
    </div><br>
    <div class='text-center'>
    
<a href='?pg=komentar&id=$idpost' class='btn btn-success' title='Beri komentarnya' style='margin-right: 150px;'>
    <i class='fa fa-comment'>&nbsp;&nbsp;Comment</i>
</a>

<a href='#' class='btn btn-warning' title='kembali' onclick='window.history.back()'>&nbsp;
    <i class='fa fa-long-arrow-left'>&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</i>
</a>
</div><br>
        
    ";        

}
?>

<h4 style='color: cornflowerblue; font-weight: bold;'>Komentar:</h4><hr>

<?php 

    $d  = "SELECT * FROM komentar WHERE id_posting='$id' AND status='Tampil'";
    $r  = mysqli_query($koneksi, $d);
    $c  = mysqli_num_rows($r);

    if ($c>0) {
        
        while ($e = mysqli_fetch_array($r)) {
            
            $nama   = $e['nama_pengunjung'];
            $komen  = $e['komentar'];

            echo 
            "
            <div class='container'>
                <div class='row'>
                    <div class='col-2'>
                        <img class='img-responsive mx-auto d-block' src='http://blog.springfield.k12.or.us/epage/files/2017/02/person-placeholder-4.png' width='100' height='100'>
                        <center><small><strong>$nama</strong></small></center>
                    </div>
                    <div class='col-10'>
                        <div class='card' style='padding: 5px;'>
                        <p>
                            $komen
                        </p>                            
                        </div>
                    </div>        
                </div>    
            </div><br><br>
            ";
        }
    }
    else {
        echo "<h5>Belum ada komentar....</h5><br><br>";
    }

 ?>













