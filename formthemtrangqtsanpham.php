<html>
<head>
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
	<div align="center">
<a href="trangchu.php"><img src='image/logo1.jpg' width='190' height='90'/></a>
</div>
<div id='all'>
<div id='form'>
<form class="login-form" name="form1" border="0" method="post" action="themsptrangqt.php">
<table>
<tr>
<td colspan="2" align="center"><b>Them tin</b></td>
</tr>

<tr>
<td>Mã hãng</td>
<td><input name="a" type="text" size="40"/></td>
</tr>

<tr>
<td>Tên xe</td>
<td><input name="b" type="text" size="40"/></td>
</tr>

<tr>
<td>Giá</td>
<td><input name="c" type="text" size="40"/></td>
</tr>

<tr>
<td>Mô tả</td>
<td><input name="e" type="text" size="40"/></td>
</tr>
<tr>
<td>Chi tiết</td>
<td><textarea cols="30" rows="5" name="nd"></textarea></td>
</tr>
<tr>
<td>Ảnh tổng quan:</td>
<td colspan="2"><input type="file" name="d" /></td>
</tr>

<tr>
    <td colspan="2">Ảnh phụ(trước, sau, nội thất, hai bên)</td>
</tr>
<tr>
<td colspan="2"><input type="file" name="d1" /></td>
</tr>

<tr>
<td colspan="2"><input type="file" name="d2" /></td>
</tr>

<tr>
<td colspan="2"><input type="file" name="d3" /></td>
</tr>

<tr>
<td colspan="2"><input type="file" name="d4" /></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="button" value="Them tin"/>
<input type="reset" name="button2" value="Nhap lai"/>
</td>
</tr>
</table>
</form>	
</div>
</div>
</body>
</html>


