<html>
<head>
<script>
function checkform() {


//submit form
document.forms['form1'].action = 'xulyupdateadm.php';
document.forms['form1'].submit(); 
}
</script>
<style type="text/css">
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
    width: 450px;
	margin:auto;
    position: relative;
    background-color: rgba(255, 255, 255, .5);
    border: 0.5px solid #4b4f56;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}
</style>
</head>
<body>
<?php
$a=mysqli_connect('localhost','root','','otoonline1');
$id=$_GET['id'];
$b="select*from adm where maadm=$id";
$ac=mysqli_query($a,$b);

$row=mysqli_fetch_assoc($ac);

?>
<div align="center">
<a href="trangchu.php"><img src='image/logo1.jpg' width='190' height='90'/></a>
</div>
<div id='all'>
<div id='form'>
<form  class="login-form" name="form1" border="0" method="post" action="xulyupdateadm.php">
<table>
<tr>
<td colspan="2" align="center"><b>Sua tin</b></td>
</tr>

<tr>
<td>Ten đăng nhập:</td>
<td><input name="b" type="text" size="40" value="<?php echo $row['tendnadm']; ?>"/>
 <input type="hidden" name="id" size="40" value="<?php echo $row['maadm']; ?>" /></td>

</tr>

<tr>
<td>Mật khẩu</td>
<td><input name="c" type="text" size="40" value="<?php echo $row['matkhau']; ?>"/></td>
</tr>

<tr>
<td>Họ</td>
<td><input name="e" type="text" size="40" value="<?php echo $row['ho']; ?>"/></td>
</tr>
<tr>
<td>Tên</td>
<td><input name="f" type="text" size="40" value="<?php echo $row['ten']; ?>"/></td>
</tr>
<tr>
	<td>Giới tính</td>
<td ><input type="radio" name="gioitinh" value="female">Nữ
<input type="radio" name="gioitinh" value="male">Nam</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="button" value="Cap nhat"  onClick="checkform()" />
<input type="reset" value="Nhap lai"/>
</td>
</tr>
</table>
</form>	
</div>
</div>
</body>
</html>