<html>
	<head>
	</head>
	<body>
		<?php
	$m=$_GET['id'];
	$con=mysqli_connect('localhost', 'root','','otoonline1');
$b="select * from sanpham where maxe=$m";
$q=mysqli_query($con, $b);
$r=mysqli_fetch_assoc($q);
$x=$r['maxe'];
$x1=$r['gia'];
$x3=$r['tenxe'];
$x2=$r['hinhanh'];
$b1="select * from giohang where maxe=$m";
$q1=mysqli_query($con,$b1);
$r1=mysqli_fetch_assoc($q1);
$b2="select count(*) as tongcot from giohang where maxe=$m";

$q2=mysqli_query($con, $b2);

$row1=mysqli_fetch_assoc($q2);

if($row1['tongcot']==0){
$b3="insert into giohang(maxe, tenxe, giaban, sldat, anh) values($x, '$x3', $x1, 1, '$x2')";
mysqli_query($con, $b3);
}
if($row1['tongcot']==1){
	$t=$r1['sldat']+1;
$b4="update giohang set sldat=$t where maxe=$m";
mysqli_query($con, $b4);
}
header('location:giohang.php');
	?>

	</body>
	</html>



