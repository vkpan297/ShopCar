<html>
<head>

</head>

<body>
<?php
$a=mysqli_connect('localhost','root','','otoonline1');
$madh=$_POST['madh'];

foreach($madh as $ma){
	$sql="delete from giohang where madh=$ma";
	mysqli_query($a, $sql);
}
mysqli_close($a);
header('Location: giohang.php ');
?>
</body>
</html>