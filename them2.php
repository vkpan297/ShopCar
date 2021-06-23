<html>
<head>

</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','otoonline1');


$tenxe=$_POST['b'];
$gia=$_POST['c'];
$phanloai=$_POST['e'];
$hinhanh=$_POST['d'];

$sql="insert into sanpham values('$tenxe','$gia','$phanloai','$hinhanh')";

mysqli_query($conn, $sql);
mysqli_close($conn);

header('Location: trangqtsanpham.php');
?>
</body>
</html>


