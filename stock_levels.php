<?php 

session_start();
print_r($_SESSION);

$conn = mysqli_connect("localhost", "root", "", "sportsking");
$customer_id = $_SESSION['USER_ID'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Mens</title>
    <link rel="stylesheet" href="assets/index_style_reviews.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
      #link {
        font-family:'Open Sans', sans-serif;
      }
      @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Iceland&family=Open+Sans:wght@300&display=swap');

      table {
        margin-left: auto;
        margin-right: auto;
      }

      th {
        border:1px solid black;
        padding:8px;
      }

      td {
        border:1px solid black; padding:8px;
      }
      </style>      
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
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
      <h1>Stock Levels</h1>
    </div>


    <div style="margin: 0 20px; padding: 10px;">
    <h1> Update Stock Levels Below: </h1>
</div>

<?php
if(isset($_POST['update_product'])) {

    $product_id = $_POST['product_id'];
    $new_quantity = $_POST['new_quantity'];

    // validate input to ensure only a number is entered
    if(!is_numeric($new_quantity)) {
        echo '<div style="background-color: #FFCCCC; margin: 0 20px; padding: 10px; text-align: center;">';
        echo 'Error: Please enter a valid number for the new quantity.';
        echo '</div>';
    } else {

        $sql = "UPDATE products SET Quantity = $new_quantity WHERE ProductID = $product_id";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo '<div style="border-radius:5px;background-color: green; margin: 20px 20px; padding: 10px; text-align: center;">';
            echo "<h1>Quantity for $product_id has been updated</h1>";
            echo '</div>';
        } else {
            echo '<div style="border-radius:5px;background-color: red; margin: 20px 20px; padding: 10px; text-align: center;">';
            echo "<h1>Error occurred updating the quantity: </h1>" . mysqli_error($conn);
            echo '</div>';
        }
    }
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo '<form style="margin-left: 40px; width: 80%" method="post">';
    echo '<label for="product_id">Select a product:</label>';
    echo '<select id="product_id" name="product_id">';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['ProductID'] . '">' . $row['ProductName'] . '</option>';
    }
    echo '</select>';
    echo '<br><br>';
    echo '<label style="margin-right:5px;" for="new_quantity">New Quantity:  </label>';
    echo '<input style=" border: 1px solid #ccc;padding: 8px; border-radius: 4px; box-sizing: border-box; type="number" id="new_quantity" name="new_quantity">';
    echo '<br><br>';
    echo '<input type="submit" name="update_product" value="Update Quantity">';
    echo '</form>';
} else {
    echo '<div style="background-color: #FFCCCC; margin: 0 20px; padding: 10px; text-align: center;">';
    echo "Product was not found in the database.";
    echo '</div>';
}
?>


<footer class="bg-light pt-5 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-3">
              <h5 class="mb-3" style="font-size: 16px;">Contact Us</h5>
              <img style="width:50%; margin-bottom:5px;" src="assets/Sports-World.png">
              <p style="font-size: 16px;margin-bottom:0px;">Address: 243 Upper Street, Islington<br>London, United Kingdom N1 1RU</p>
              <p style="font-size: 16px;">Phone: 020-56415816<br>Email: sportskingenquiries@gmail.com</p>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <h5 class="mb-3">Explore</h5>
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="mens.php">Mens</a></li>
                <li><a href="womens.php">Womens</a></li>
                <li><a href="kids.php">Kids</a></li>
                <li><a href="accesories.php">Accessories</a></li>
                <li><a href="reviews.php">Product Reviews</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <h5 class="mb-3">Connect With Us</h5>
              <ul class="list-unstyled">
              <div class="social-media">
              <a style="font-size:56px;" href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
              <a style="font-size:56px;margin-left:15px;" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
              <a style="font-size:56px;margin-left:15px;" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
              </div>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12 text-center">
              <p class="mb-0">&copy; 2023 Sportsking Retail Company Limited. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>