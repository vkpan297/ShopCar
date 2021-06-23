<html>
<head>

</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','otoonline1');

$id=$_POST['id'];
$hokh=$_POST['hokh'];
$tenkh=$_POST['tenkh'];
$tendn=$_POST['tendn'];
$matkhau=$_POST['matkhau'];
$sdt=$_POST['sdt'];
$diachi=$_POST['diachi'];
$email=$_POST['email'];
$gioitinh=$_POST['gioitinh'];



$sql="update khachhang set hokh='$hokh', tenkh='$tenkh',tendn='$tendn', matkhau='$matkhau',sdt='$sdt',diachi='$diachi',email='$email',gioitinh='$gioitinh' where makh=$id";

mysqli_query($conn, $sql);
header('Location: trangqtkhachhang.php');
mysqli_close($conn);
?>
</body>
</html>


