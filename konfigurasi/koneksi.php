<?php

    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "cerpen";

    $koneksi = mysqli_connect($server, $user, $pass, $db);

    if ($koneksi) {
        // echo "Berhasil";
    }
    else {
        echo "gagal";
    }


?>