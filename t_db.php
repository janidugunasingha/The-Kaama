<?php
$con = new mysqli('localhost','root','','a_payment');
if (!$con){
    die(mysqli_error($con));
}
?>