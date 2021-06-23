<html>
<head>

</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','otoonline1');

$id=$_POST['id'];
$tendnadm=$_POST['b'];
$mk=$_POST['c'];
$ho=$_POST['e'];
$ten=$_POST['f'];
$gioitinh=$_POST['gioitinh'];




$sql="update adm set tendnadm='$tendnadm', matkhau='$mk',ho='$ho', ten='$ten', gioitinh='$gioitinh' where maadm=$id";

mysqli_query($conn, $sql);
header('Location: trangqtadm.php');
mysqli_close($conn);
?>
</body>
</html>


