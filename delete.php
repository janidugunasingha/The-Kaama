<?php
include 't_db.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `adminpayment` where id= $id";
    $result= mysqli_query($con,$sql);

    if($result){
       // echo '<script>alert("Deleted successfully !")</script>';
        header('location:display.php');

    }else{
        die(mysqli_error($con));
    }
}

?>