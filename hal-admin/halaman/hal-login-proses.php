<?php

    include '../../konfigurasi/koneksi.php';
    session_start();

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
    $que = mysqli_query($koneksi, $sql);
    $cek = mysqli_num_rows($que); //untuk menghitung data dari database
    
    $data = mysqli_fetch_array($que);
    $_SESSION['iduser'] = $data['id_user'];

    if ($cek>0) {
        echo 
        "
        <script>
        alert('Selamat Datang di form Admin');
        window.location='../index.php';
        </script>
        ";
    }
    else {
        echo 
        "
        <script>
        alert('Maaf, Username/Password SALAH!');
        window.location='../index.php';
        </script>
        ";
    }


?>

