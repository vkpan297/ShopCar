<html>
<head>
<script>
function checkform() {


//submit form
document.forms['form1'].action = 'updatekhachhang.php';
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
$b="select*from khachhang where makh=$id";
$ac=mysqli_query($a,$b);

$row=mysqli_fetch_assoc($ac);

?>
<div align="center">
<a href="trangchu.php"><img src='image/logo1.jpg' width='190' height='90'/></a>
</div>
<div id='all'>
<div id='form'>
<form class="login-form" name="form1" border="0" method="post" action="updatekhachhang.php">
<table>
<tr>
<td colspan="2" align="center"><b>Sua thong khach hang</b></td>
</tr>

<tr>
<td>Ho kh</td>
<td><input name="ho" type="text" size="40" value="<?php echo $row['hokh']; ?>"/>
 <input type="hidden" name="id" size="40" value="<?php echo $row['makh']; ?>" /></td>

</tr>

<tr>
<td>Ten kh</td>
<td><input name="ten" type="text" size="40" value="<?php echo $row['tenkh']; ?>"/></td>
</tr>

<tr>
<td>Ten dn</td>
<td><input name="tendn" type="text" size="40" value="<?php echo $row['tendn']; ?>"/></td>
</tr>

<tr>
<td>Mat khau</td>
<td><input name="matkhau" type="text" size="40" value="<?php echo $row['matkhau']; ?>"/></td>
</tr>

<tr>
<td>SĐT</td>
<td><input name="sdt" type="text" size="40" value="<?php echo $row['sdt']; ?>"/></td>
</tr>

<tr>
<td>Address</td>
<td><input name="add" type="text" size="40" value="<?php echo $row['diachi']; ?>"/></td>
</tr>

<tr>
<td>Email</td>
<td><input name="email" type="text" size="40" value="<?php echo $row['email']; ?>"/></td>
</tr>

<tr>
<td>Gioi tinh</td>
<td><input name="gioitinh" type="text" size="40" value="<?php echo $row['gioitinh']; ?>"/></td>
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


