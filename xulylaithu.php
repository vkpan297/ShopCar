<!DOCTYPE>
<html>
<head>
	<title>Lái thử</title>
</head>
<body>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];


$con=mysqli_connect('localhost','root','','otoonline1');

$e="insert into laithu(tenxe,philaithu,tennguoidangkylaithu,ngaylaithu,sdt,email) values('$f','$e','$a','$d','$b','$c')";

$sql=mysqli_query($con,$e);
header('Location: audi.php');
mysqli_close($con);

?>


</body>
</html>