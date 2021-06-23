	<html>
	<head>
	</head>
	<body>
		<?php
	$m=$_GET['id'];
	$con=mysqli_connect('localhost', 'root','','otoonline1');
$b="select * from phukien where masp=$m";
$q=mysqli_query($con, $b);
$r=mysqli_fetch_assoc($q);
$x=$r['masp'];
$x1=$r['gia'];
$x3=$r['tensp'];
$x2=$r['hinhanh'];
$b1="insert into giohang(maxe, tenxe, giaban, sldat, anh) value($x, '$x3', $x1, 1, '$x2')";
mysqli_query($con, $b1);
header('location:giohang.php');

	?>

	</body>
	</html>