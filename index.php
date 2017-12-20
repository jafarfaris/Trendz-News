<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Vollkorn+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Lobster" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="artikel/style.css">
    <link rel="stylesheet" type="text/css" href="../dist/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="artikel/fingers.ico">
</head>

<body>
    <?php 

        include 'konfigurasi/koneksi.php';

    ?>
          <div class="container-fluid">  
        <header style="height: 100px; position: relative;">
            <div class="row">
                <div class="col-sm-12 col-md-8" style="padding-left: 110px;">
                    <a href="index.php" style="text-decoration: none;"><h1 class="relief"><i class="fa fa-angellist"></i>  Trendz News</h1></a>
                    <span style="padding-left: 75px; font-family: 'Lobster', cursive;" class="kecil"><small><em>" Berita dan artikel terhangat masa kini "</em></small></span>
                </div>
                <div class="col-sm-12 col-md-4" style="padding-top: 15px; padding-right: 70px; text-align: right;">
                    <a href="../trendznews/hal-admin/index.php" style="text-decoration: none; color: cornflowerblue;"><i class="fa fa-sign-in"></i>  Sign in &nbsp;</a><br><br>
                    <h5 style="color: gray;">Follow Us &nbsp;&nbsp;    
                        <a href="#" style="color: gray;"><i class="fa fa-facebook-square">&nbsp;</i></a>
                        <a href="#" style="color: gray;"><i class="fa fa-twitter">&nbsp;</i></a>
                        <a href="#" style="color: gray;"><i class="fa fa-instagram">&nbsp;</i></a>
                      </h5>
                </div>
            </div>
        </header>
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left, #a1ffce, #faffd1); height: 70px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 30px;">
                <ul id="highlight" class="nav navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home &nbsp;</a>
                    </li>
                   <?php 
                   ini_set('display_errors',0);

                    $perintah = "SELECT * FROM kategori";
                    $eksekusi = mysqli_query($koneksi, $perintah);

                    while ($list = mysqli_fetch_array($eksekusi)) {
                        
                        $idkat      = $list['id_kategori'];
                        $namakate   = $list['nama_kategori'];

                        echo 
                        "
                        <li class='nav-item active'>
                        <a class='nav-link' href='?pg=kategori&id=$idkat'>$namakate &nbsp;</a>
                        </li>
                        ";
                    }

                    ?>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="?pg=cari-posting" method="post">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> 
        </div>
    </div>
    </div>
   
    <section id="home">
        <div class="container">
            
        </div><br>
    </section>
    <section id="content" style="margin-top: -30px; min-height: 400px;">
        <div class="container">          
       <?php 

        include 'konfigurasi/panggil-hal.php';       

        ?>
          
        </div>
    </section>
 <footer id="footer" class="py-1" style="clear: both; background: #222;">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-4 text-md-center" style="padding-top: 15px;">
                    <h1 class="glow"><i class="fa fa-angellist"></i>   Trendz News</h1>
                    <p>
                        Bandung, Indonesia
                    </p>
                </div>
                <div class="col-md-4 text-md-center">
                   
                </div>
                <div class="col-md-4 text-md-center" style="padding-top: 8px;">
                     Proudly powered by<br>
            <a href="http://jafarfaris.epizy.com/" target="_blank"><img src="http://jafarfaris.epizy.com/dist/image/Jafar(1).png" alt="jafarfaris" width="80px" height="80px" style="border-radius: 50%;"></a>
                </div>
            </div><hr style="background-color: lightcyan;">
        <p style="text-align: center; color: #fff;">Copyright © 2017 "Trendz News" All rights reserved</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCByFIWJvMWjnVTBaI0ppuTwCgzMYOgQDo"
    type="text/javascript"></script>


    <script type="text/javascript">
   $(".nav li a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});
    </script>
</body>

</html>