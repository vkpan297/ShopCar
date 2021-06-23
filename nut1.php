<html>
<head>
	</head>
	<body>
<?php
	$m=$_GET['id'];
	$m2=$_GET['od'];
$con=mysqli_connect('localhost','root','','otoonline1');
$b="select * from giohang where madh=$m2";
$q=mysqli_query($con, $b);
$r=mysqli_fetch_assoc($q);
$x=$r['giaban'];

$n=$_GET['id'];


if($n=="1"){
$y=$r['sldat']-1;
	}


if($n=="2"){
$y=$r['sldat']+1;
	}	
$b1="update giohang set sldat=$y where madh=$m2";
mysqli_query($con,$b1);

header('location:giohang.php');
?>

	</body>
</html>