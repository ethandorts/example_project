<?php
  session_start();
  print_r($_SESSION);

  $conn = mysqli_connect("localhost", "root", "", "sportsking");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Mens</title>
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
          <a class="nav-link" href="basket.php">
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
      <h1>Men's Fashion</h1>
      <h3>Shop the latest in men's fashion with a variety of top brands like Adidas, Nike and North Face</h3>
    </div>

  <div class="container mt-5">
    <div class="row">
      <?php $sql = "SELECT * FROM products WHERE ProductID BETWEEN 201 AND 224";
				$res = mysqli_query($conn, $sql);
				if(mysqli_num_rows($res) > 0)
				{
					while($row = mysqli_fetch_array($res))
					{?>

    <div class="col-md-3">
        <div class="card">
        <a href="#" >
          <img src="assets/photos/<?php echo $row['image'];?>" class="card-img-top img1" alt="Product 1 image">
          </a>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['ProductName']?></h5>
            <div class='wrapper text-center'>
              <form action="basket.php" method="post">
              <div class="btn-group btn-group-sm mb-3">
              <label for="quantity" style="font-weight:700;font-size: 20px; margin-right: 20px;">Quantity:</label>
              <input type="text" name="quantity" id="quantity" value="1" class="form-control" style="width: 60px; font-size: 16px;"/>
              </div>
              </div>
              <div class="d-flex justify-content-between align-items-center" style="margin-top:1px;">
                <p class="mb-1">£<?php echo $row['Price']?></p>
                <input type="hidden" name="product_id" value="<?php echo $row['ProductID']?>" />
                <input type="hidden" name="product_name" value="<?php echo $row['ProductName']?>" />
                <input type="hidden" name="product_price" value="<?php echo $row['Price']?>" />
                <button type="submit" name="add_to_basket" class="btn btn-primary">Add to Cart</button>
              </form>   
              </div>
          </div>
        </div>
      </div>

     

  <?php
          }};
  ?>

     
     
     
     

   
     

   

      <!-- Jumbotron for title here
      <div class="container">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4" id="jumbotron-1-heading">MENS CLOTHING</h1>
          <p class="lead" id="below">Find the freshest styles from the biggest brands here in our men’s clothing collection. From the likes of Nike, adidas, The North Face, Champion, SikSilk, Under Armour and many more we have you covered! Prepare yourself for the cold with on-trend tees, tracksuits, jackets, joggers and loads of other picks to suit your style. Check out the unbeatable selection below and find exactly what you’re looking for.</p>
        </div>
      </div>
      </div>

      <div class ="container">
      <div class="card-columns justify-content-center">
     
      <div class="card m-4">
        <img src="assets/photos/north-face-nuptse-blue.jpg"  alt="Denim Jeans" style="width:100%">
        <h1>The North Face Nuptse 1996 Jacket</h1>
        <p class="price">£300.00</p>
        <p>Some text about the jeans..</p>
        <p><button>Add to Cart</button></p>
      </div>

      <div class="card m-4">
        <img src="assets/photos/north-face-nuptse-blue.jpg"  alt="Denim Jeans" style="width:100%">
        <h1>The North Face Nuptse 1996 Jacket</h1>
        <p class="price">£300.00</p>
        <p>Some text about the jeans..</p>
        <p><button>Add to Cart</button></p>
      </div>

      <div class="card m-4">
        <img src="assets/photos/north-face-nuptse-blue.jpg"  alt="Denim Jeans" style="width:100%">
        <h1>The North Face Nuptse 1996 Jacket</h1>
        <p class="price">£300.00</p>
        <p>Some text about the jeans..</p>
        <p><button>Add to Cart</button></p>
      </div>

       <div class="card m-4 ">
        <img src="assets/photos/north-face-nuptse-blue.jpg"  alt="Denim Jeans" style="width:100%">
        <h1>The North Face Nuptse 1996 Jacket</h1>
        <p class="price">£300.00</p>
        <p>Some text about the jeans..</p>
        <p><button>Add to Cart</button></p>
      </div>-->

      <!--<div class="container">
  <div class="row">
    <div class="col-md-2 mb-3">
      <div class="card h-100">
        <img src="assets/photos/womens.jpg" class="card-img-top" alt="Product 1">
        <div class="card-body">
          <h5 class="card-title">Product 1</h5>
          <p class="card-text">Product description goes here.</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card h-100">
        <img src="assets/photos/north-face-nuptse-blue.jpg" class="card-img-top" alt="Product 2">
        <div class="card-body">
          <h5 class="card-title">Product 2</h5>
          <p class="card-text">Product description goes here.</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card h-100">
        <img src="assets/photos/run1.jpg" class="card-img-top" alt="Product 3">
        <div class="card-body">
          <h5 class="card-title">Product 3</h5>
          <p class="card-text">Product description goes here.</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card h-100">
        <img src="assets/photos/kids.jpg" class="card-img-top" alt="Product 4">
        <div class="card-body">
          <h5 class="card-title">Product 4</h5>
          <p class="card-text">Product description goes here.</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
</div> -->

     

     

    </div>
  </div>
     


     


     
      <!--<div class="container">
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
      </div>-->


     
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
