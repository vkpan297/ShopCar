<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
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
	</style>

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>ĐĂNG NHẬP</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a></span>
					<span><a href="https://myaccount.google.com/"><i class="fab fa-google-plus-square"></i></a></span>
					

				</div>
			</div>
			<div class="card-body" >
				<form name="form1" action="xulydangnhapkhachhang.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="usename" id="usename" placeholder="Tài khoản" required/>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="psw" id="psw" placeholder="Mật khẩu" required/>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Nhớ tài khoản
					</div>
					<div class="form-group">
						<a href="dangnhapkh.php"><button type="submit" value="Login" class="btn float-right login_btn" onclick="ktf()" >Đăng nhập</button></a>
						<a href="formdangky.php"><button type="button">Đăng ký</button></a>
					</div>
					<div>
<p align="center" style="color: white;">Dành cho quản trị viên:</p>
<p style="font-size: 18px" align="center"><button type="button"   class='button' onclick='location.href="dangnhapadmin.php"'>Admin</button>
            </div>
			
					
				</form>
			</div>
			
				<div class="d-flex justify-content-center">
					<a href="quenmk.php"><button>Quên mật khẩu</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>