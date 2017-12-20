<?php

    session_start();
    include '../konfigurasi/koneksi.php';

    if (empty($_SESSION['iduser'])) {
        include 'halaman/hal-login-input.php';
    }
    else {
        include 'halaman/form-admin.php';
    }


?>