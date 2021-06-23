<html>
<head>
	
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','otoonline1');
$ten=$_POST['ten'];
$sdt=$_POST['sdt'];
$diachi=$_POST['add'];
$email=$_POST['email'];

$hangxe=$_POST['hangxe'];
$tenxe=$_POST['tenxe'];

$loaixe=$_POST['rdloai'];
$so=$_POST['rdso'];

$mau=$_POST['mau'];
$gia=$_POST['gia'];
$anh=$_POST['anh'];

$b="insert into xecu(tennguoiban, sdt, diachi,email, tenxe, hangxe, loaixe, so, mau,gia, anh, ngaydang) values ('$ten', '$sdt', '$diachi', '$email', '$tenxe', '$hangxe', '$loaixe', '$so', '$mau', '$gia', '$anh',CURRENT_TIMESTAMP);";
mysqli_query($con, $b);
header('Location: dangnhapkh.php');
?>

	</body>
</html>