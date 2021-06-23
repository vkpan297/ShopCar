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

$sql="insert into adm(tendnadm, matkhau, ho, ten, gioitinh) values('$tendnadm','$mk','$ho','$ten','$gioitinh')";

mysqli_query($conn, $sql);

header('Location: trangqtadm.php');
mysqli_close($conn);
?>
</body>
</html>


