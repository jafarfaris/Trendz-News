<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../dist/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../artikel/style.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <style>
        form {
            margin: 150px auto;
            width: 500px;
            background-color: whitesmoke;
            padding: 30px;
            border: 1px solid gray;
        }

        input[type=text], input[type=password] {
            border: 1px solid black;
        }
    </style>
</head>
<body style="background-color:black;">
    <form action="halaman/hal-login-proses.php" method="POST" role="form">
        <legend style="text-align:center;"><i class="fa fa-user"></i> Login Administrator</legend>
    <div class="form-group">
      <label for="">Username</label>
      <input type="text" name="username" id="" class="form-control" placeholder="username = jafar"><br>
      <label for="">Password</label>
      <input type="password" name="password" id="" class="form-control" placeholder="password = faris"><br>
      <div class="row">
        <div class="col-md-4">
           <button type="submit" class="btn btn-primary" name="submit">Login</button> 
        </div>
       
        <div class="col-md-8">
            <a href="../index.php" class="glow" style="text-decoration: none;"><h4 style="text-align: right;"><i class="fa fa-angellist"></i>   Trendz News</h4></a>
        </div>
          
      </div>     
      
    </div>   
    </form> 

    
</body>
</html>