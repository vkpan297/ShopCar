<?php
$con=mysqli_connect('localhost','root','','otoonline1');
$m=$_GET['id'];
$b="delete from dondathang where madh=$m";
mysqli_query($con,$b);
header('location:trangquanlydonhang.php');

?>