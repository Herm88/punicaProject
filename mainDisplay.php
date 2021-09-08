<?php include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Punica Inventory Management</title>
</head>
<body>
    <div class="container">
    <table class="table my-5">
  <thead>
    <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Product</th>
        <th scope="col">Stocks</th>
        <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="Select * from `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
      $row=mysqli_fetch_assoc($result);
      //echo $row['productName'];
      while($row=mysqli_fetch_assoc($result)){
          $itemNum=$row['itemNum'];
          $product=$row['productName'];
          $stocks=$row['stocks'];
          echo '<tr>
          <th scope="row">'.$itemNum.'</th>
          <td>'.$product.'</td>
          <td>'.$stocks.'</td>
            <td>
            <button class="btn btn-primary">
            <a href="edit.php? edit='.$itemNum.'" class="text-light">Edit
            </a></button>

            <button class="btn btn-danger">
            <a href="delete.php? del='.$itemNum.'" class="text-light">Delete
            </a></button>
            </td>
        </tr>';
      }
  }

  ?>
  
</tbody>
</table>
    <button class="btn btn-primary my-5">
        <a href="user.php"class="text-light">Add Product</a>
    </button>
    
    </div>
</body>
</html>