<html>
<head>

</head>

<body>
<?php
$a=mysqli_connect('localhost','root','','otoonline1');
$id=$_GET['id'];
$sql="delete from sanpham where maxe=$id";
mysqli_query($a,$sql);
header('location: trangqtsanpham.php');
mysqli_close($a);
?>
</body>
</html>


