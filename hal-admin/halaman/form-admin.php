<!doctype html>
<html lang="en">
  <head>
    <title>Form Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../dist/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../artikel/style.css">
    <link rel="shortcut icon" href="../artikel/fingers.ico">
    

  <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.4.2/b-flash-1.4.2/fc-3.2.3/fh-3.1.3/datatables.min.css"/>     
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.4.2/b-flash-1.4.2/fc-3.2.3/fh-3.1.3/datatables.min.js"></script>

         <script type="text/javascript">
        $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>

    <style>
        img {
            width: 150px;
            height: 150px;   
           
        }
    
    </style>

   
</head>

  <body>
  <nav id="myNav" class="navbar navbar-dark bg-dark fixed-top navbar-expand-sm">
        <a href="../index.php" style="text-decoration: none;"><h3 class="glow"><i class="fa fa-angellist"></i>  Trendz News</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarMain"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navBarMain">
            <ul class="navbar-nav">
               
            </ul>

        </div>
    </nav>
<div class="row" style="margin-top:65px;">
        <div class="col-md-2">
            <?php
            ini_set('display_errors',0);
            
            include '../konfigurasi/koneksi.php';
            $user_id = $_SESSION['iduser'];
            $sql = "SELECT * FROM user WHERE id_user='$user_id'";
            $que = mysqli_query($koneksi, $sql);

            while ($akun = mysqli_fetch_array($que)) {
                $nama = $akun['nama_lengkap'];
                echo 
                "
                <img class='img-responsive mx-auto d-block' src='http://blog.springfield.k12.or.us/epage/files/2017/02/person-placeholder-4.png'>
                <h6 style='text-align:center;'>$nama</h6>
                ";
            }
            

            ?>

            <hr>
            <ul class="nav flex-column">
                <h4>
                <li class="nav-item">
                    <a class="nav-link" href="?hal=home"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?hal=kategori-data"><i class="fa fa-file"></i> Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?hal=kategori-posting"><i class="fa fa-pencil"></i> Posting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?hal=komentar-data"><i class="fa fa-commenting"></i> Komentar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?hal=logout"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
                </h4>
            </ul>
        </div>
        <div class="col-md-10" style="padding-top: 40px;">
            <div class="container">
            
         <?php
            // include 'fungsi/koneksi.php';
            include 'fungsi/panggil-halaman.php';
            
         
        ?>
        </div>
    </div>
    </div>


  </body>
</html>