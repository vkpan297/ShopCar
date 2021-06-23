<html>
<head>

</head>

<body>
<?php
$a=mysqli_connect('localhost','root','','otoonline1');
$id=$_GET['id'];
$sql="delete from xecu where id=$id";
mysqli_query($a,$sql);
header('location: trangqtxeraoban.php');
mysqli_close($a);
?>
</body>
</html>


