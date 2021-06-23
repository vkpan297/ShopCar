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
	<link rel="stylesheet" type="text/css" href="css/styles1.css">

<style >
		body{

	 background-image:url(image/hinhnendangnhapadmin.jpg);
	 height:1250px;
	 width:100%;

		}
</style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>ĐĂNG KÝ</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a></span>
					<span><a href="https://myaccount.google.com/"><i class="fab fa-google-plus-square"></i></a></span>
					

				</div>
			</div>
			

			<div class="card-body">
				<form  name="form1" action="dangky.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="tendn" id="tendn" placeholder="Tài khoản">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="matkhau"  id="matkhau" placeholder="Mật khẩu">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="password" class="form-control" name="pa2" id="pa2" placeholder="Nhập lại mật khẩu">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="hokh" id="hokh" placeholder="Họ" >
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="tenkh" id="tenkh" placeholder="Tên">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="sdt" id="sdt" placeholder="Số điện thoại">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<textarea cols="5" rows="5" class="form-control" name="diachi" id="diachi" placeholder="Địa chỉ"></textarea> 
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email@gmail.com">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<table>
							<tr>
						<td style="color: white;"><input type="radio" name="gioitinh" value="female">Nữ
                        <input type="radio" name="gioitinh" value="male">Nam</td>
                    </tr>
						</table>
					</div>



					
					<input type="submit" name="submit" value="Đăng ký" onclick="chk()" class="btn btn-success btn-block">
					
					
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>