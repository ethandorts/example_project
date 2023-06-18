<?php $msg = " " ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Login</title>
    <link rel="stylesheet" href="assets/index_style_reviews.css">
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

    <br>
    <div id="review_form" class="container" style="background-color:#f2f2f2;">
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="email_address">Email Address</label>
            <input type="text" id="email_address" name="email_address" placeholder="Email Address..." size="35" />
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password..." size = "35"/>

            <input type="submit" name="submit" value="Login">

            <div class="error">
              <?php echo $msg = "" ?>
            </div>

    </form>
    </div>
  <?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "sportsking");
  if(isset($_POST['submit'])) {
    //echo "<pre>";
    //print_r($_POST);

    $email= mysqli_real_escape_string($conn, $_POST['email_address']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = mysqli_query($conn, "SELECT * FROM customers WHERE EmailAddress = '$email' && Passwd = '$password'");
    $num = mysqli_num_rows($sql);
    if($num > 0) {
     
      $row = mysqli_fetch_assoc($sql);
      $_SESSION['USER_ID'] = $row['CustomerID'];
      $_SESSION['EMAIL'] = $row['EmailAddress'];
      
      header("location:mens.php");
    } else {
      echo $msg = "Please Enter Valid Details!";
    }
  }

  if(isset($_POST['logout'])) {
    unset($_SESSION['EMAIL']);
    echo "You have logged out";
    die();
  }
?>
   
      
    
    </body>
    </html>