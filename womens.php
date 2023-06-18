<?php 
session_start();
print_r($_SESSION);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Women</title>
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
      <h1>Women's Fashion</h1>
      <h3>Shop the latest in Women's fashion with a variety of top brands like Adidas, Calvin Klein and EA7</h3>
    </div>

    <div class="container mt-5">
      <div class="row">

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/nike-pink-jacket-w1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Nike Pink Jacket</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/adidas-green-jacket-w1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Adidas Green Jacket</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/los-angeles-lakers-jacket1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Los Angeles Lakers Jacket</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/converse-white-tshirt-w1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Converse White T-Shirt</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/ck-purple-sweatshirt.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Calvin Klein Purple Sweatshirt</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/armani-green-sweat-w1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Armani Green Sweatshirt</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/black-north-face-w1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">North Face Black Coat</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/red-adidas-jacket1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Adidas Red Jacket</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/north-face-beige.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">North Face Beige Jacket</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/newbalance-blue-sweatshirt.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">New Balance Blue Sweatshirt</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/columbia-pink-fleece-wq1.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Columbia Pink Fleece</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/hugo_t-shirt.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">BOSS Black T-Shirt</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/puma_orange_joggers.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Puma Orange Joggers</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/tommy_joggers.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Joggers</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/black-nike-joggers.2jpg.webp" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Nike Black Joggers</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
          <a href="#" >
            <img src="assets/photos/womens/adidas-black-cargo-pants.jpg" class="card-img-top img1" alt="Product 1 image">
            </a>
            <div class="card-body">
              <h5 class="card-title">Adidas Black Cargo Pants</h5>
              <div class='wrapper text-center'>
              <div class="btn-group btn-group-sm mb-3">
                <button type="button" class="btn btn-outline-secondary">Small</button>
                <button type="button" class="btn btn-outline-secondary">Medium</button>
                <button type="button" class="btn btn-outline-secondary">Large</button>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">£300</p>
                <button type="button" class="btn btn-primary">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
  
        



      </div>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>