<?php
session_start();
print_r($_SESSION);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Kids</title>
    <link rel="stylesheet" href="assets/index_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
      #link {
        font-family:'Open Sans', sans-serif;
      }
      @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Iceland&family=Open+Sans:wght@300&display=swap');
      </style>      
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/Sports-World.png" alt="Logo" width="140" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="mens.php">MENS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="womens.php">WOMENS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kids.php">KIDS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accesories.php">ACCESSORIES</a>
            </li>
          </ul>
        </div>
        <div class="navbar-nav">
        <a class="nav-link" href="#">
            <a class="nav-link" href="basket.php">BASKET</a>
          </a>
          <?php if(isset($_SESSION['EMAIL'])) {
            if($_SESSION['EMAIL']) {
          echo '<a class="nav-link" href="logout.php">LOGOUT</a>';}}
          else {
           echo '<a class="nav-link" href="login.php">LOGIN</a>';
          } ?>
        </div>
      </div>
    </nav>

    <div id="opening-header" class="jumbotron">
      <h1>Accessories</h1>
      <h3>Shop the latest Accessories with a variety of top brands like Adidas, Nike and North Face</h3>
    </div>

    <div class="container mt-5">
      <div class="row">

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/armani_navy_cap.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Armanni Navy Cap</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/boss_grey_cap.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Boss Grey Cap</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/north_face_black.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">North Face Black Cap</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/nike_green_cap.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Nike Green Cap</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/nike_white_socks.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Nike White Socks 3 Pack</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/nike_coloured_socks.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Black Adidas Socks 5 Pack</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/boss_white_socks.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Boss Stripe Socks 3 Pack</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/black_adidas_socks.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Black Adidas Socks</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/adidas_black_bucket_hat.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Adidas Black Bucket Hat</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/adidas_beige_bucket_hat.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Adidas Beige Bucket Hat</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/liverpool_fc_bucket_hat.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Liverpool FC Bucket Hat</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/reebok_bucket_hat.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Reebok Bucket Hat</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submmit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/adidas_festival_bag.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Adidas Festival Bag</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/ea7_festival_bag.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Armani Festival Bag</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/boss_festival_bag.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Boss Festival Bag</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/accessories/north_face_black_festival_bag.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">North Face Festival Bag</h5>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>


      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-1 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
        </footer>
      </div>


      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>