<?php
include 'connect.php';
$itemNum=$_GET['edit'];
if(isset($_POST['submit'])){
  $product=$_POST['productName'];
  $stocksN=$_POST['stocks'];

  $sql="update `crud` set itemNum=$itemNum,productName='$product',stocks='$stocksN'
  where itemNum=$itemNum";
  $result=mysqli_query($con,$sql);
  if($result){
      //echo "Data updated Successfully";
      header('location:mainDisplay.php');
  }else{
      die(mysqli_error($con));
  }
}
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
    placeholder="Enter Number of Stocks" name="stocks">
</div>
  <button type="submit" class="btn btn-primary"name="submit">Update</button>
</form>
    </div>

  </body>
</html>