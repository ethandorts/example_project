<?php
  session_start();
  print_r($_SESSION);

  $conn = mysqli_connect("localhost", "root", "", "sportsking");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $contact_number = $_POST["contact_number"];
    $email_address = $_POST["email_address"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postcode = $_POST["postcode"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $password2 = $_POST["re-enter_password"];
    
    // validation here 
   $form_is_valid = true;
    
    if(empty($fname)) {
      $form_is_valid = false;
      $empty_fname = "Please enter a First Name";
    }
    if(empty($lname)) {
      $form_is_valid = false;
      $empty_lname = "Please enter a Last Name";
    }
    if(empty($contact_number)) {
      $form_is_valid = false;
      $empty_contact_number = "Please enter a Contact Number";
    }
    if (!empty($contact_number) && !preg_match('/^[0-9]{11}$/', $contact_number)) {
      $form_is_valid = false;
      $contact_number_wrong = "Please enter a valid Contact Number";
    }
    if(empty($email_address)) {
      $form_is_valid = false;
      $empty_email_address = "Please enter an Email Address";
    }
    if (!empty($email_address) && !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email_address)) {
      $form_is_valid = false;
      $email_address_error = "Email Address is invalid!";
    }
    if(empty($address)) {
      $form_is_valid = false;
      $empty_address = "Please enter your address";
    }
    if(empty($city)) {
      $form_is_valid = false;
      $empty_city = "Please enter your City";
    }
    if(empty($postcode)) {
      $form_is_valid = false;
      $empty_postcode = "Please enter a postcode";
      
    }
    if(!empty($postcode) && !preg_match('/^[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][A-Za-z]{2}$/', $postcode)) {
      $form_is_valid = false;
      $postcode_error = "Please enter a valid Postcode!";
    }
    if(empty($password)) {
      $form_is_valid = false;
      $empty_password = "Please enter a password";
      echo "<script>document.getElementById('error_empty_password').innerHTML = '<span class=\"error-message\">$empty_password</span>';</script>";
    }
    if(!empty($password) && !preg_match('/^(?=.*[A-Z])(?=.*\d).{6,}$/', $password)) {
      $form_is_valid = false;
      $password_error = "Please ensure that your password contains a capital letter, a number and must be more than 5 characters in length";
    }
    if(empty($password2)) {
      $form_is_valid = false;
      $empty_password2 = "Please enter a password";
    }
    
    if($password != $password2) {
      $form_is_valid = false;
      $no_match = "Passwords do not match!";
    }
    
    if ($form_is_valid) {
    
    $sql = "INSERT INTO customers (FirstName, LastName, ContactNumber, EmailAddress, Address, City, Postcode, Country, Passwd)
    VALUES ('$fname', '$lname', '$contact_number', '$email_address', '$address', '$city', '$postcode', '$country', '$password')";
    
    if ($conn->query($sql) === TRUE) {
      echo "<script> 
               alert('Account Created');
               setTimeout(function() {
                  window.location.href = 'login.php';
               }, 5000); 
             </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
  }
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
      <h1>Create a Sportsking Member</h1>
    </div>

    <div style="margin: 0 20px; padding: 10px;">
    <h1> Add a Sportsking Member <h1>
    </div>

    <div id="review_form" class="container" style="background-color:#f2f2f2;">
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <label for="fname">First Name:</label>
  <input type="text" id="fname" name="fname">
  <?php if(isset($empty_fname)) { echo "<span class=\"error-message\">$empty_fname</span>"; } ?>
  <br>
  
  <label for="lname">Last Name:</label>
  <input type="text" id="lname" name="lname">
  <?php if(isset($empty_lname)) { echo "<span class=\"error-message\">$empty_lname</span>"; } ?>
  <br>
  
  <label for="contact_number">Contact Number:</label>
  <input type="text" id="contact_number" name="contact_number">
  <?php if(isset($empty_contact_number)) { echo "<span class=\"error-message\">$empty_contact_number</span>"; } ?>
  <?php if(isset($contact_number_wrong)) { echo "<span class=\"error-message\">$contact_number_wrong</span>"; } ?>
  <br>
  
  <label for="email_address">Email Address:</label>
  <input type="text" id="email_address" name="email_address">
  <?php if(isset($empty_email_address)) { echo "<span class=\"error-message\">$empty_email_address</span>"; } ?>
  <?php if(isset($email_address_error)) { echo "<span class=\"error-message\">$email_address_error</span>"; } ?>
  <br>
  
  <label for="address">Address:</label>
  <input type="text" id="address" name="address">
  <?php if(isset($empty_address)) { echo "<span class=\"error-message\">$empty_address</span>"; } ?>
  <br>
  
  <label for="city">City:</label>
  <input type="text" id="city" name="city">
  <?php if(isset($empty_city)) { echo "<span class=\"error-message\">$empty_city</span>"; } ?>
  <br>
  
  <label for="postcode">Postcode:</label>
  <input type="text" id="postcode" name="postcode">
  <?php if(isset($empty_postcode)) { echo "<span class=\"error-message\">$empty_postcode</span>"; } ?>
  <?php if(isset($postcode_error)) { echo "<span class=\"error-message\">$postcode_error</span>"; } ?>
  <br>
  
  <label for="country">Country</label>
  <select name="country" required>
    <option> </option>
      <option value= "England"> England </option>
      <option value= "Northern Ireland"> Northern Ireland </option>
      <option value= "Republic of Ireland"> Republic of Ireland </option>
      <option value= "Scotland"> Scotland </option>
      <option value= "Wales"> Wales </option>
  </select>
  <br>
  <br>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
  <?php if(isset($empty_password)) { echo "<span class=\"error-message\">$empty_password</span>"; } ?>
  <?php if(isset($password_error)) { echo "<span class=\"error-message\">$password_error</span>"; } ?>
  <br>
  
  <label for="re-enter_password">Re-enter Password:</label>
  <input type="password" id="re-enter_password" name="re-enter_password">
  <?php if(isset($empty_password2)) { echo "<span class=\"error-message\">$empty_password2</span>"; } ?>
  <?php if(isset($no_match)) { echo "<span class=\"error-message\">$no_match</span>"; } ?>
  <br>
    
  <input type="submit" value="Create Account">

      </form>
    </div>


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



        </body> </html>