<!doctype html>

<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- javascript sama jQuery nya ba -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
  .green{
    background-color: #93bc7e;
  }
</style>
    <title>Matcha Addict - A Good Deal of Matcha</title>
  </head>
  <body>
    <div class="container">
      <div class="row green">
        <div class="col-xl-12">
          <h2 align="left"> 
            <font face="sweet pea">
          <u>
          MatchaAddict
          </u>
        </font> 
      </h2>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Dessert.php">Dessert</a>
          <a class="dropdown-item" href="Baverage.php">Baverage</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="alert('Oops! Cannot Found') ">Search</button>
    </form>
  </div>
</nav>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row green">
        <div class="col-md-12">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="400px" class="d-block w-100" src="https://images.japancentre.com/recipes/pics/1250/main/1250-matcha-pudding.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img height="400px" class="d-block w-100" src="https://i2.wp.com/en.blog.kkday.com/wp-content/uploads/matchafeat.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img height="400px" class="d-block w-100" src="https://www.healthstartsinthekitchen.com/wp-content/uploads/2017/12/matcha-latte-feature-1024x683.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img height="400px" class="d-block w-100" src="http://blog.matchazentea.com/wp-content/uploads/2016/01/Matcha-Powder-1140x500.jpg" alt="Fourth slide">
    </div>
  </div>
</div>

</div>
</div>
</div>
  

  
<div class="container">
  <div class="row green">
    <div class="col-md-12">
      <p align="left">Copyright © 2018 Matcha Addict Indonesia. All rights reserved. Disclaimer. Privacy Policy</p>
      <?php 
    include 'Koneksi.php';
    $no = 1;
    ?>
    </div>
  </div>
</div>
  </body>
</html>