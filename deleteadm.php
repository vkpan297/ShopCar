<html>
<head>

</head>

<body>
<?php
$a=mysqli_connect('localhost','root','','otoonline1');
$id=$_GET['id'];
$sql="delete from adm where maadm=$id";
mysqli_query($a,$sql);
header('location: trangqtadm.php');
mysqli_close($a);
?>
</body>
</html>


