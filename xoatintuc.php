<?php
$m=$_GET['id'];

$con=mysqli_connect('localhost','root','','otoonline1');

$b="delete from tintuc where matt=$m";

$sql=mysqli_query($con,$b);

mysqli_close($con);

header('location:quanlytintuc.php');




?>
