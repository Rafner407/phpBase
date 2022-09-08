<?php
include 'connect.php';

$id = $_GET['id'];

$sq="delete from city where id=$id";
mysqli_query($con,$sq);
header('location:profileDelete.php');
?>