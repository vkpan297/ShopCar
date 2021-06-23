<!DOCTYPE>
<html>
<head>
	<title>themtintuc</title>
</head>
<body>
<?php
$a=$_POST['td'];
$b=$_POST['anh'];
$c=$_POST['nd'];


$con=mysqli_connect('localhost','root','','otoonline1');

$e="insert into tintuc(tieude,hinhanh,noidung,ngaydang) values('$a','$b','$c',curdate())";

$sql=mysqli_query($con,$e);

mysqli_close($con);
header('location:quanlytintuc.php');
?>


</body>
</html>