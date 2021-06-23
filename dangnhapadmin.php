<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>đăng nhập admin</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
 #all {
	 background-image:url(image/hinhnendangnhapadmin.jpg);
	 height:640px;
	 width:100%;
 }
 h1 {
	 margin:20px;
 }
 #form {
	 margin-top:45px;
 }
 
 .login-form {
    width: 360px;
	margin:auto;
    position: relative;
    background-color: rgba(255, 255, 255, .5);
    border: 0.5px solid #4b4f56;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}
 
 
.login-form .header {
    margin-left:100px;
}
 
.login-form .header h1 {
    font-family: 'Exo', sans-serif;
    font-weight: 300;
    font-size: 32px;
}
 

 
.login-form .content {
    padding: 0 30px 25px 50px;
}
 

.login-form .content .input {
    width: 200px;
    padding: 15px 25px;
    font-family: 'Exo', sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #000;
    background-color: rgba(255, 255, 255, .5);
    border: 0.5px solid #4b4f56;
    border-radius: 8px;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
    -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
    -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
}
 
/* Second input field */
.login-form .content .password, .login-form .content {
    margin-top: 8px;
}
 
.login-form .content .input:hover {
    background: #e9eaeb;
    color: #000;
}

.footer {
	margin-bottom:20px;
}

.button {
	width:80px;
	height:30px;
	font-family:'Exo', sans-serif;
	border: 0.5px solid #4b4f56;
}

.button:hover {
	background-color:#e9eaeb;	
}
.button2 {
	width:90px;
	height:30px;
	font-family:'Exo', sans-serif;
	border: 0.5px solid #4b4f56;
}

.button2:hover {
	background-color:#e9eaeb;	
}
</style>
<script language="javascript">
 function dangky() {
	 document.forms['form1'].action = 'dangky.php';
	 document.forms['form1'].submit();
 }

</script>
</head>

<body>
<div align="center">
<a href="trangchu.php"><img src='image/logo1.jpg' width='190' height='90'/></a>
</div>
<div id='all'>
<div id='form'>
<form name="form1" class="login-form" action="xulydangnhapadmin.php" method="post">
        <div class="header">
        <h1>ADMIN</h1>
        </div>
        <div class="content">
        <input name="txttdnam" type="text" class="input password" name="tendn" placeholder="Tên đăng nhập" required/> 
        <input name="txtmk" type="password" name="pass" class="input password" placeholder="Mật khẩu" required/>   
        </div>
        <div class="footer" align="center">
        <input type="submit" value="Đăng nhập" name="login" class="button"  />
        <input type="reset" value="Nhập lại" class="button" /><br /><br />
        Dành cho khách hàng:<br /><br />
        <input type='button' class='button2' value='Khách hàng' onclick='location.href="dangnhap.php"'/>
        </div>
</form>
</div>

</div>
</body>
</html>




