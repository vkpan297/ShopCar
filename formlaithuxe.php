<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký lái thử</title>
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
   <?php

$a=mysqli_connect('localhost','root','','otoonline1');

$maxe=$_GET['id'];
$b="select*from sanpham where maxe=$maxe ";
$ac=mysqli_query($a,$b);


?>
<?php
while($row=mysqli_fetch_assoc($ac)){

?>
<div align="center">
<a href="trangchu.php"><img src='image/logo1.jpg' width='190' height='90'/></a>
</div>
<div id='all'>
<div id='form'>
<form name="form1" class="login-form" action="xulylaithu.php" method="post">
        <div class="header">
        <h1>ĐĂNG KÝ LÁI THỬ</h1>
        </div>
        <div class="content">
        <p class="btn btn-primary disabled"><input type="hidden" class="input password" name="f" value="<?php echo $row['tenxe']; ?>" required/><?php echo $row['tenxe']; ?></p>
        <p>Phí lái thử:<input  type="hidden" name="e" class="input password"  value="5000000" required/>5000000VNĐ </p>
         <input type="text" class="input password" name="a" placeholder="Người đăng ký" required/> 
          <input  type="text" class="input password" name="b" placeholder="Số điện thoại" required/> 
           <input  type="text" class="input password" name="c" placeholder="Email" required/> 
           <input  type="text" class="input password" name="d" placeholder="Ngày hẹn" required/>
       </div>
        <div class="footer" align="center">
        <input type="submit" value="Gửi" name="login" class="button"  />
        
       
        </div>
</form>
</div>

</div>
<?php
}
?>
</body>
</html>




