<?php
if(isset($_POST['btn'])){
	$mkm=$_POST['mkm'];
	$makh = $_POST['makh'];
	require 'connect.php';
	$a="update khachhang set matkhau='$mkm' where makh = $makh";
	mysqli_query($connect,$a);
	echo "Đổi mật khẩu thành công!! <a href='index.php'>Quay lai</a>";
}

?>