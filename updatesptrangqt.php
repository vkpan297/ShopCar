<html>
<head>

</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','otoonline1');

$id=$_POST['id'];
$mahang=$_POST['mh'];
$tenxe=$_POST['b'];
$giaxe=$_POST['c'];
$mota=$_POST['e'];
$hinhanh=$_POST['d'];

$chitietxe=$_POST['a'];
$anha=$_POST['d1'];
$anhb=$_POST['d2'];
$anhc=$_POST['d3'];
$anhd=$_POST['d4'];


$sql="update sanpham set mahang='$mahang', tenxe='$tenxe', gia='$giaxe',phanloai='$mota', hinhanh='$hinhanh', anha='$d1', anhb='$d2', anhc='$d3',anhd='$d4',chitietxe='$chitietxe' where maxe=$id";

mysqli_query($conn, $sql);
header('Location: trangqtsanpham.php');
mysqli_close($conn);
?>
</body>
</html>


