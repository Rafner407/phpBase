<?php
include 'connect.php';

$id = $_GET['idCidade'];

$sq="delete from city where idCidade=$id";
mysqli_query($con,$sq);
header('location:viewall_city.php');
?>