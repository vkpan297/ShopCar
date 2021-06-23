<html>
<head>

</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','otoonline1');

$id=$_POST['id'];
$tenxe=$_POST['b'];
$giaxe=$_POST['c'];
$mota=$_POST['e'];
$hinhanh=$_POST['d'];



$sql="update sanpham set Tenxe='$tenxe', Gia='$giaxe',Phanloai='$mota', Hinhanh='$hinhanh' where maxe=$id";

mysqli_query($conn, $sql);

header('Location: trangqtsanpham.php');
?>
</body>
</html>


