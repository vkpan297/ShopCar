<?php

session_start();
require 'connect.php';


$sql2="SELECT * FROM khachhang WHERE email='".$_POST['email']."'";

$sql3=mysqli_query($connect,$sql2);

$sql4=mysqli_fetch_assoc($sql3);

$ktra = mysqli_num_rows($sql3);
if($ktra == 0){
	header('location: quenmk.php');
}

$ten=$sql4['tendn'];
$mk=$sql4['matkhau'];
$id = $sql4['makh'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Quên mật khẩu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<style >
		body{

	 background-image:url(image/hinhnendangnhapadmin.jpg);
	 height:740px;
	 width:100%;

		}
		p{
			color: white;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
	<div class="card-body" >
	<form method="post" action="xulydoimk.php" name="form1">
		<div class="input-group form-group">
		<p>Tên đăng nhập</p>
	</div>
	<div class="input-group form-group">
		<input type="text" readonly="true" value="<?=$ten?>" name="tendn">
		<input type="text" class="form-control" readonly="true" value="<?=$id?>" name="makh" hidden="true">
		</div>
		<div class="input-group form-group">
			
		<p>Mật khẩu cũ</p>
	</div>
	<div class="input-group form-group">
		<input type="text" class="form-control" readonly="true" value="<?=$mk?>" name="matkhau">
	</div>
		
		<div class="input-group form-group">
		<p>Đổi mật khẩu(nếu thích)</p>
	</div>
	<div class="input-group form-group">
		<input type="password" placeholder="Nhập mật khẩu mới" name="mkm">
		</div>
		<div class="form-group">
		<input type="submit"  name="btn" class="btn float-right login_btn" value="Đổi mật khẩu">
	</div><br>
		<a href="index.php">Quay lại</a>
	</form>
</div>
</body>
</html>