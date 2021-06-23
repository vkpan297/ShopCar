<?php

session_start();
require 'connect.php';


if(isset($_POST['sub'])){
		$sql="SELECT * FROM  khachhang WHERE email='".$_POST['email']."'";
		$sql1=mysqli_query($connect,$sql);
	if(!empty($_POST['email']) && mysqli_fetch_assoc($sql1)>0 && !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==FAlSE){
		$_SESSION['info']=$_POST['email'];

	header("location:infor.php");
}
if(empty($_POST['email'])){
	$r="What is your email?";
}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==true){
	$r="email";

}

elseif(mysqli_fetch_assoc($sql1)<1){
	$r="Email này không tồn tại!!";
}

}

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>

<html>
<head>
	<title>Quên mật khẩu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<style>
	body{
  
     background-image:url(image/hinhnendangnhapadmin.jpg);
	 height:740px;
	 width:100%;

	}
	#abc{
		height:100px;
	}
	#ad{
		position: relative;
		left: 70px;

	}
		#ac{
		position: relative;
		left:120px;

	}
</style>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">

<div class="card-body"  id="abc">
				<form action="infor.php" method="post" name="form1">
					<div class="input-group form-group" id="ad">
						
						<input type="email"  name="email" placeholder="Nhập email của bạn"><span><b>*<?php
		if(isset($r)){
			 echo $r; 
		}
	
	?>
</div>
<div class="form-group" id="ac">
						<input type="submit" class="btn  login_btn" name="sub" value="Gửi">
					</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>