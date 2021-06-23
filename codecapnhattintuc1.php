<?php
$con=mysqli_connect('localhost','root','','otoonline1');

$id=$_POST['id'];
$anh=$_POST['anh'];
$nd=$_POST['nd'];

$sql="update tintuc set hinhanh='$anh',noidung='$nd' where matt=$id";
mysqli_query($con,$sql);
header('location:quanlytintuc1.php');
mysqli_close($con);
?>