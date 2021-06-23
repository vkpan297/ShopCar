<!DOCTYPE html>
<html>
<head>
	<title>lienhe</title>
</head>
<body>

<?php

$tenkh=$_POST['tenkh'];
$sdt=$_POST['sdt'];
$email=$_POST['email'];
$address=$_POST['address'];
$nd=$_POST['nd'];


$con=mysqli_connect('localhost','root','','otoonline1');


$c="insert into lien_he(tennguoilh,sdtnguoilh,emailnguoilh,diachinguoilh,noidung,ngaylh) values('$tenkh',$sdt,'$email','$address','$nd',curdate())";
$sql=mysqli_query($con,$c);

mysqli_close($con);
echo "Cảm ơn bạn đã gửi phản hồi cho chúng tôi! Chúng tôi sẽ trả lời trong thời gian ngắn nhất!!"


?><br>
<a href="trangchu.php"><button>Quay về trang chủ</button></a>
</body>
</html>