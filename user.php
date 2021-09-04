<?php
include 'connect.php';

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Update</title>
  </head>
  <body>
    <div class="container my-5"> 
    <form method="post">
<div class="mb-3">
    <label>Product Name</label>
    <input type="text" class="form-control"
    placeholder="Enter Product Name" name="productName">
</div>

<div class="mb-3">
    <label>Number of Stocks</label>
    <input type="text" class="form-control"
    placeholder="Enter Number of Stocks" name="numStocks">
</div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
    </div>

  </body>
</html>