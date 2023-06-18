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
      <h1>Your Basket</h1>
    </div>


<?php
$connect = mysqli_connect("localhost", "root", "", "sportsking");

if(isset($_SESSION['EMAIL'])) {
  if(isset($_POST["add_to_basket"]))
  {
      if(isset($_SESSION["basket"]))
      {
          $basket_items = array_column($_SESSION["basket"], "product_id");
          if(!in_array($_POST['product_id'], $basket_items))
          {
              $count = count($_SESSION["basket"]);
              $item_array = array(
                  'product_id' => $_POST["product_id"],
                  'product_name' => $_POST['product_name'],
                  'product_price' => $_POST['product_price'],
                  'product_quantity' => $_POST['quantity']
              );
              $_SESSION["basket"][$count] = $item_array;
          }
          else
          {
              foreach($_SESSION['basket'] as $keys => $values) {
                  if($values['product_id'] == $_POST['product_id']) {
                      $_SESSION["basket"][$keys]['product_quantity'] += $_POST['quantity'];
                  }
              }
          }
      }
      else
      {
          $item_array = array(
              'product_id' => $_POST["product_id"],
              'product_name' => $_POST['product_name'],
              'product_price' => $_POST['product_price'],
              'product_quantity' => $_POST['quantity']
          );
          $_SESSION["basket"][0] = $item_array;
      }
  }

  if(isset($_GET["action"])) {
      if($_GET["action"] == "delete") {
          if(isset($_SESSION["basket"])) {
              foreach($_SESSION["basket"] as $keys => $values) {
                  if($values["product_id"] == $_GET["id"]) { 
                      unset($_SESSION["basket"][$keys]); 
                      echo '<script>alert("Item removed from cart")</script>';
                      echo '<script>window.location="mens.php"</script>';
                  }
              }
          }
      }
  }
} else {
  echo '<script>alert("Please log in to add products to the basket")</script>';
  echo '<script>window.location="mens.php"</script>';
}
?>

		
<div style="clear:both"></div>
<br />
<h4>Your Basket</h4>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th width="25%">Product name</th>
            <th width="25%">Product quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
        <?php
        if(!empty($_SESSION["basket"])) {
            $total = 0;
            foreach($_SESSION["basket"] as $keys => $values) {
        ?>
        <tr>
            <td><?php echo $values["product_name"]; ?></td>
            <td><?php echo $values["product_quantity"]; ?></td>
            <td>£<?php echo $values["product_price"]; ?></td>
            <td>£<?php echo number_format($values["product_quantity"] * $values["product_price"], 2);?></td>
            <td><a href="basket.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-dark">Remove</span></a></td>
        </tr>
        <?php
                $total = $total + ($values["product_quantity"] * $values["product_price"]);
            }
        ?>
        <tr>
            <td colspan="3" align="right">Total</td>
            <td align="left">£<?php echo number_format($total, 2); ?></td>
            <td></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div></div> </div><br />
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="customer_id" value="<?php echo $user_id ?>">
    <input type="hidden" name="total" value="<?php echo $total; ?>">
    <button type="submit" name="buy">Buy Now</button>
      </form>

        <?php 
        if(isset($_POST['buy'])) {
          $customer_id = $_POST['customer_id'];
          $total = $_POST['total'];
          $date= date('Y-m-d H:i:s');

          $sql = "INSERT INTO orders(OrderDate, OrderTotal, CustomerID) VALUES ('$date', '$total', '$customer_id')";
          $res = mysqli_query($conn, $sql);

          if($res) {
            $sql = "SELECT LAST_INSERT_ID()";
            $res = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($res);
            $order_id = $row['LAST_INSERT_ID()'];
            foreach($_SESSION['basket'] as $product) {
              $product_id = $product['product_id'];
              $quantity = $product['product_quantity'];
              $total_product_price = $product['product_price'] * $product['product_quantity'];
              $sql = "INSERT INTO orderproduct(OrderID, ProductID, Quantity, ProductTotal) VALUES ($order_id, $product_id, $quantity, $total_product_price)";
              $res = mysqli_query($conn, $sql);

              if(!$res) {
                echo "Error occured : " . mysqli_error($conn);
              }
            }

            $_SESSION['basket'] = array();

            echo "Order placed successfully!";
          } else {
            echo "Error: " . mysqli_error($conn);
          }
        }
        

        ?>



	</body> </html>
<?php

//Debugging tools.Delete or uncomment as needed */
//print_r($_SESSION). "<br>";
"<br>";
//echo var_dump($total) . "<br>";
//echo var_dump($values["item_quantity"]) . "<br>";
//echo var_dump($values["item_price"]) . "<br>";
//get_defined_vars() gets all the defined variables including built-ins and custom variables (print_r to view them)}*/
$total = get_defined_vars();


//print_r($total);
//Dumps the variable with its reference counts. This is useful when there are multiple paths to update a single reference.*/
//debug_zval_dump ($total)

?>
<?php

//If you are using an older version of PHP and having some issues. Uncomment this function.
/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>

