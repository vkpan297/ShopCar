<?php
 session_start();
?>

<html >
<head>

</head>

<body>
<?php
 $a=mysqli_connect('localhost','root','','otoonline1');
 $tendangnhapadmin = $_POST['txttdnam'];
 $matkhau = $_POST['txtmk'];
 $sql = "select * from adm where tendnadm = '".$tendangnhapadmin."' and matkhau = '".$matkhau."'";
 $result = mysqli_query($a,$sql);
 $numberrow = mysqli_fetch_assoc($result);
 if($numberrow > 0) {
	 $_SESSION['tendnadm'] = $tendangnhapadmin;
	 header('Location: trangquantri.php');
	} else {
	 header('Location: dangnhapadmin.php?error=errorfailed');
	}
 
?>
</body>
</html>