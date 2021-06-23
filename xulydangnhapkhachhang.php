<?php
 session_start();
?>

<html>
<head>

</head>

<body>
<?php
 $a=mysqli_connect('localhost','root','','otoonline1');
 $tendangnhap = $_POST['usename'];
 $matkhau = $_POST['psw'];
 $sql = "select * from khachhang where tendn = '".$tendangnhap."' and matkhau  = '".$matkhau."'";
 $result = mysqli_query($a,$sql);
 $numberrow = mysqli_fetch_assoc($result);
 if($numberrow > 0) {
	 $_SESSION['tendn'] = $tendangnhap;
	 header('Location: dangnhapkh.php');
	} else {
	 header('Location: trangbaoloi.php?error=errorfailed');
	}
 
?>
</body>
</html>