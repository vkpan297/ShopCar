<html>
<head>

</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','otoonline1');

$mahang=$_POST['a'];
$tenxe=$_POST['b'];
$gia=$_POST['c'];
$phanloai=$_POST['e'];
$chitiet=$_POST['nd'];
$hinhanh=$_POST['d'];
$anha=$_POST['d1'];
$anhb=$_POST['d2'];
$anhc=$_POST['d3'];
$anhd=$_POST['d4'];
$sql="insert into sanpham(mahang, tenxe, gia, phanloai, chitietxe, ngaynhap, hinhanh, anha, anhb, anhc, anhd) values('$mahang', '$tenxe','$gia','$phanloai', '$chitiet', current_timestamp, '$hinhanh', '$anha', '$anhb','$anhc','$anhd')";

mysqli_query($conn, $sql);

header('Location: trangqtsanpham.php');
mysqli_close($conn);
?>
</body>
</html>


