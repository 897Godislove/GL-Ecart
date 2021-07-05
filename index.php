<?php

  if (isset($_POST['submit'])) {

    $name=$_POST['productName'];
    $price=$_POST['productPrice'];
    $desc=$_POST['productDes'];

      //connection
    $servername='localhost';
    $username='root';
    $password='';
    $databasename='ecart';

    $conn=mysqli_connect($servername, $username, $password, $databasename);
    if ($conn) {
      echo '<h1><center>CONNECTED</center></h1>';
    } else{
      die('Error'.mysqli_error());
    }

      //INSERTION
    $query="INSERT INTO test(productname,productprice,productdesc) VALUES ('$name','$price','$desc')";

      //QUERY
    $query_result=mysqli_query($conn, $query);

    if ($query_result) {
      echo '<br><h1><center>Record Created Sucessfully!</center></h1>';
    }

    
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Shopping Cart</title>
  <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body class="text-center">
  <div id="main">
    <header>
      <img src="assets/cart-icon.jpg" alt="cart_icon" class="icon">
      <h1 id="text">Stop 2 Shop</h1>
    </header>
  </div>
  <form id="form" method="POST" action="index.php">
    <label>Product Name</label>
    <input class="write" type="text" placeholder="name" name="productName">
    <label>Product Price</label>
    <input class="write" type="text" placeholder="price" name="productPrice">
    <label>Product Description</label>
    <input class="write" type="text" placeholder="description" name="productDes">
    <div class="w-100 mt-4">
      <button id="button" type="submit" name="submit" class="btn w-50 ">ADD</button>  
    </div>
  </form>

  <div id="footer">&copy; 4th of July, 2021.</div>


  <script src="js/jquery.min.js"></script>
  <script>
    $("#button").on("mouseover", function(){
      $("#button").animate({opacity: 0.5});
    })
  </script>
</body>
</html>


<!-- FROM TEMITOPE -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP TOPE</title>
  <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body class="text-center">

    <form class="w-50" action="index.php" method="post">
      <div class="form-group">
        <label for="productname">Product Name</label>
        <input class="form-control" name="productName" type="text">
      </div>

      <div class="form-group">
        <label for="productprice">Product Price</label>
        <input class="form-control" name="productPrice" type="text">
      </div>

      <div class="form-group">
        <label for="productdesc">Product Description</label>
        <textarea class="form-control" name="productDes" id=""></textarea>
      </div>

      <div class="mt-4">
        <button type="submit" class="btn btn-primary" name="submit">ADD</button>
      </div>

    </form>
  
</body>
</html> -->

