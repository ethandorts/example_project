<?php
// Create a connection to the database
$servername = "localhost"; // Update the servername if needed
$username = "root"; // Update the username if needed
$password = ""; // Update the password if needed
$dbname = "sportsking"; // Update the database name if needed

$conn = new mysqli($servername, $username, $password, $dbname);

// Checking our connection to database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving form data from POST request

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
  echo "Please enter a First Name";
  $form_is_valid = false;
}
if(empty($lname)) {
  echo "Please enter a Last Name";
  $form_is_valid = false;
}
if(empty($contact_number)) {
  echo "Please enter a first name";
  $form_is_valid = false;
}
if (!preg_match('/^[0-9]{11}$/', $contact_number)) {
  echo "Please ensure that the phone number provided is 11 characters and consists of numeric values.";
  $form_is_valid = false;
}
if(empty($address)) {
  echo "Please enter your address";
  $form_is_valid = false;
}
if(empty($city)) {
  echo "Please enter your City";
  $form_is_valid = false;
}
if(empty($postcode)) {
  echo "Please enter a postcode";
  $form_is_valid = false;
}
if(!preg_match('/^[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][A-Za-z]{2}$/', $postcode)) {
  echo "Please enter a valid Postcode!";
  $form_is_valid = false;
}

if(!preg_match('/^(?=.*[A-Z])(?=.*\d).{6,}$/', $password)) {
  echo "Please ensure that your password contains a capital letter, a number and must be more than 5 characters in length";
  $form_is_valid = false;
}

if($password != $password2) {
  echo "Passwords do not match!";
  $form_is_valid = false;
}

if ($form_is_true) {

$sql = "INSERT INTO customers (FirstName, LastName, ContactNumber, EmailAddress, Address, City, Postcode, Country, Passwd)
VALUES ('$fname', '$lname', '$contact_number', '$email_address', '$address', '$city', '$postcode', '$country', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Your Sportsking has been successfully created!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}

// Closing database connection
$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Mens</title>
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
          <a class="nav-link" href="#">
            <a class="nav-link" href="basket.php">BASKET</a>
          </a>
          <a class="nav-link" href="#">
            <a class="nav-link" href="login.php">LOGIN</a>
          </a>
        </div>
      </div>
    </nav>
    
    <br>
    <div id="review_form" class="container" style="background-color:#f2f2f2;">
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
      
          <label for="fname"> First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Enter your First Name..." required>

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Enter your Last Name..." required>

          <label for="contact_number">Contact Number</label>
          <input type="text" id="contact_number" name="contact_number" placeholder="Enter your Contact Number" required>

          <label for="email_address">Email Address</label>
          <input type="text" id="email_address" name="email_address" placeholder="Enter your Email Address..." required>

          <label for="address">Address</label>
          <input type="text" id="address" name="address" placeholder="Enter your Address..."required>

          <label for="city">City</label>
          <input type="text" id="city" name="city" placeholder="Enter your City..." required>

          <label for="postcode">Postcode</label>
          <input type="text" id="postcode" name="postcode" placeholder="Enter your Postcode..."required>

          <label for="country">Country</label>
          <select name="country" required>
          <option> </option>
          <option value= "England"> England </option>
          <option value= "Northern Ireland"> Northern Ireland </option>
          <option value= "Republic of Ireland"> Republic of Ireland </option>
          <option value= "Scotland"> Scotland </option>
          <option value= "Wales"> Wales </option>
          </select>


          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your Password..."required>

          <label for="re-enter_password">Re-Enter Password</label>
          <input type="password" id="re-enter_password" name="re-enter_password" placeholder="Re-Enter Password..."required>
      
          <input type="submit" value="Create Account">

        
      
        </form>
    </div>

    </body>
    </html>