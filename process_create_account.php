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
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$contact_number = $_POST["contact_number"];
$email_address = $_POST["email_address"];
$address = $_POST["address"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];
$country = $_POST["country"];
$password = $_POST["password"];

// Inserting data into database
$sql = "INSERT INTO customers (FirstName, LastName, ContactNumber, EmailAddress, Address, City, Postcode, Country, Password)
VALUES ('$fname', '$lname', '$contact_number', '$email_address', '$address', '$city', '$postcode', '$country', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Closing database connection
$conn->close();
?>