<!DOCTYPE html>
<html>
<head>
	<title>themtintuc</title>
</head>
<body>
<?php
$b=$_POST['anh'];
$c=$_POST['nd'];
$d=$_POST['link'];


$con=mysqli_connect('localhost','root','','otoonline1');

$e="insert into tintuc1(hinhanh,noidung,link) values('$b','$c','$d')";

$sql=mysqli_query($con,$e);

mysqli_close($con);
header('location:quanlytintuc1.php');
?>


</body>
</html>