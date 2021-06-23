<html>
<head>

</head>

<body>
<?php
$a=mysqli_connect('localhost','root','','otoonline1');
$id=$_GET['id'];
$sql="delete from dondathang where madh=$id";
mysqli_query($a,$sql);
header('location: trangquanlydonhang.php');
mysqli_close($a);
?>
</body>
</html>

