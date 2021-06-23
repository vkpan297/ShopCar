<?php
$con=mysqli_connect('localhost','root','','otoonline1');

$id=$_POST['id'];
$td=$_POST['td'];
$anh=$_POST['anh'];


$sql="update tintuc set tieude='$td',hinhanh='$anh' where matt=$id";
mysqli_query($con,$sql);
header('location:quanlytintuc.php');
mysqli_close($con);
?>