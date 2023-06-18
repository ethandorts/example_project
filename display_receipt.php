<?php
  session_start();
  print_r($_SESSION);

  $conn = mysqli_connect("localhost", "root", "", "sportsking");
  $user_id = $_SESSION['USER_ID'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Mens</title>
    <link rel="stylesheet" href="assets/index_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
      <h1>Order Confirmation</h1>
    </div>

    <h1 class="text-center" style="margin-top:20px;"> Thank You for Shopping at Sportsking! </h1>
    
    <?php
  include 'db_connection.php';
  $order_id = $_GET['order_id'];
  $sql = "SELECT * FROM orders WHERE OrderID = '$order_id'";
  $result = mysqli_query($conn, $sql);
  $order = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Order Receipt</title>
  </head>
  <body>
    <h1>Order Receipt</h1>
    <p>Order ID: <?php echo $order['OrderID']; ?></p>
    <p>Order Date: <?php echo $order['OrderDate']; ?></p>
    <p>Order Total: <?php echo $order['OrderTotal']; ?></p>
    <hr>
    <h2>Order Details</h2>
    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM orderproduct, products WHERE orderproduct.ProductID = products.ProductID AND OrderID = '$order_id'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$row['ProductName'].'</td>';
            echo '<td>'.$row['ProductPrice'].'</td>';
            echo '<td>'.$row['Quantity'].'</td>';
            echo '<td>'.$row['ProductTotal'].'</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>

