<?php
$con=mysqli_connect('localhost','root','','otoonline1');
$m=$_GET['id'];
$b="update dondathang set hientrang = 1, ngaygh= CURRENT_TIMESTAMP() where madh=$m";
mysqli_query($con,$b);
header('location:trangquanlydonhang.php');

?>