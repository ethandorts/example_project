<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportsKing Mens</title>
    <link rel="stylesheet" href="assets/index_style_reviews.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
      #link {
        font-family:'Open Sans', sans-serif;
      }
      @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Iceland&family=Open+Sans:wght@300&display=swap');
      </style>      

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
              <a class="nav-link" href="#">MENS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">WOMENS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">KIDS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ACCESSORIES</a>
            </li>
          </ul>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="#">
            <a class="nav-link" href="#">BASKET</a>
          </a>
          <a class="nav-link" href="#">
            <a class="nav-link" href="#">LOGIN</a>
          </a>
        </div>
      </div>
    </nav>

    <div id="opening-header" class="jumbotron">
      <h1>Reviews</h1>
      <h3>Don't take our word for it, read our customer reviews</h3>
    </div>

    <div id="review_form" class="container">
        <form id ="myForm" action="assets/review_form.php" method="post">

          <input type="hidden" id="reviewid" name="reviewid" value="1">
      
          <label for="customer_name">Customer Name</label>
          <input type="text" id="customer_name" name="customer_name" placeholder="Customer Name...">
      
          <label for="product">Product </label>
          <select id="product" name="product">
            <option value="Adidas">Adidas</option>
            <option value="North_Face">North Face</option>
            <option value="usa">USA</option>
            <option value="usa">Awesome</option>
          </select>

          <!--<div class = "rating">
            <input type ="radio" name="star" id="star1"><label for="star1">
            </label>
            <input type ="radio" name="star" id="star1"><label for="star2">
            </label>
            <input type ="radio" name="star" id="star1"><label for="star3">
            </label>
            <input type ="radio" name="star" id="star1"><label for="star4">
            </label>
            <input type ="radio" name="star" id="star1"><label for="star5">
            </label>
          </div>-->

          <label for="title">Rating</label>
          <input type="text" id="rating" name="rating" placeholder="Enter your Rating...">

          <label for="title">Review Title</label>
          <input type="text" id="title" name="title" placeholder="Review Title...">
      
          <label for="review">Subject</label>
          <textarea id="review" name="review" placeholder="Enter Review..." style="height:200px"></textarea>

      
          <input type="submit"  id="submitBtn" value="Submit Review">
      
        </form>
      </div>

      