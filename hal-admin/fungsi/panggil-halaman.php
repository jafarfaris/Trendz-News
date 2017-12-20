<?php

    $hal = $_GET['hal'];

    if ($hal=='home') {
        include 'halaman/home.php';
    }
    elseif ($hal=='logout') {
        include 'halaman/hal-logout.php';
    }


    elseif ($hal=='kategori-data') {
        include 'halaman/kategori-data.php';
    }
     elseif ($hal=='kategori-tambah') {
        include 'halaman/kategori-tambah.php';
    }
     elseif ($hal=='kategori-simpan') {
        include 'halaman/kategori-simpan.php';
    }
    elseif ($hal=='kategori-edit') {
        include 'halaman/kategori-edit.php';
    }
    elseif ($hal=='kategori-hapus') {
        include 'halaman/kategori-hapus.php';
    }
    elseif ($hal=='kategori-update') {
        include 'halaman/kategori-update.php';
    }

    elseif ($hal=='kategori-posting') {
        include 'halaman/kategori-posting.php';
    }
    // End of Halaman Kategori

     elseif ($hal=='posting-tambah') {
        include 'halaman/posting-tambah.php';
    }

     elseif ($hal=='posting-simpan') {
        include 'halaman/posting-simpan.php';
    }

     elseif ($hal=='posting-hapus') {
        include 'halaman/posting-hapus.php';
    }

     elseif ($hal=='posting-edit') {
        include 'halaman/posting-edit.php';
    }    

      elseif ($hal=='posting-update') {
        include 'halaman/posting-update.php';
    }

      elseif ($hal=='posting-filter') {
        include 'halaman/posting-filter.php';
    }    

    // End of Halaman Posting

      elseif ($hal=='komentar-data') {
        include 'halaman/komentar-data.php';
    }    
       elseif ($hal=='komentar-hapus') {
        include 'halaman/komentar-hapus.php';
    }      
          elseif ($hal=='komentar-update') {
        include 'halaman/komentar-update.php';
    }      

    // End of Halaman Komentar

    elseif (empty($hal)) {
        include 'halaman/home.php';
    }
    else {
        echo "Maaf, halaman yg anda tuju tidak tersedia";
    }


?>