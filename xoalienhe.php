<?php
$a=$_GET['id'];

$con=mysqli_connect('localhost','root','','otoonline1');

$b=("delete from lien_he where malh=$a");

$sql=mysqli_query($con,$b);

mysqli_close($con);
header('location:hienthilienhe.php');


?>