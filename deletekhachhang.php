<html>
<head>

</head>

<body>
<?php
$a=mysqli_connect('localhost','root','','otoonline1');
$id=$_GET['id'];
$sql="delete from khachhang where makh=$id";
mysqli_query($a,$sql);
header('location: trangqtkhachhang.php');
mysqli_close($a);
?>
</body>
</html>

