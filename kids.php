< <?php 
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
      <h1>Kids Fashion</h1>
      <h3>Shop the latest in kids fashion with a variety of top brands like Adidas, Nike and North Face</h3>
     </div>

      <div class="container mt-5">
        <div class="row">
  
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Nike_Tech_Fleece_Hoodie_Jr.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Nike Tech Fleece Hoodie Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Nike_Windrunner_Jacket_Jr.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Nike Windrunner Jacket Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Berghaus_Padded_Jacket.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Berghaus Colour Block Padded Jacket Children</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Adidas_Padded_Jacket.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">adidas Badge Of Sport Padded Jacket Infant</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/adidas_Girls_Hoodie.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">adidas Originals Girls' Trefoil Overhead Crop Hoodie Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/McKenzie_Hoodie.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">McKenzie Essential 2 Overhead Hoodie Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Lacoste_T-Shirt.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Lacoste Small Logo T-Shirt Children</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Puma_Girls_Hoodie.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Puma Girls' Core Logo Hoodie Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Nike_T-Shirt.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Nike Sportswear All Over Print T-Shirt Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/North_Face_T-Shirt.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">The North Face Fine Box Logo T-Shirt Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
      
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Sonneti_Girls_Hoodie.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Sonneti Girls' Porto Overhead Hoodie Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Under_Armour_T-Shirt.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Under Armour Colour Block T-Shirt Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
        
        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/adidas_T-Shirt.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">adidas Originals Fade Grid T-Shirt Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>
<div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/TH_T-Shirt.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Tommy Hilfiger Cut & Sew Essential T-Shirt Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Blue_Nike_Hoodie.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Nike Club Fleece Hoodie Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>


        <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/kids/Black_Nike_T-Shirt.jpg" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title">Nike Dri-FIT Short Sleeve T-Shirt Junior</h5>
            <a href="#" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        </div>

        

     



     
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>