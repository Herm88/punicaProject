<?php
include 'connect.php';
if(isset($_GET['del'])){
        $itemN=$_GET['del'];
        $sql="delete from `crud` where itemNum=$itemN";
        $result=mysqli_query($con,$sql);
        if($result){
            //echo "Deleted Successfully";
            header('location:mainDisplay.php');
        }else{
            die(mysqli_error($con));
        }
        
}
?>