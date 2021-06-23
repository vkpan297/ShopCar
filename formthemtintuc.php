<!DOCTYPE html>
<html>
<head>
	<title>formthemtintuc</title>
</head>
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
<body>
	<div align="center">
<a href="trangchu.php"><img src='image/logo1.jpg' width='190' height='90'/></a>
</div>
<div id='all'>
<div id='form'>
<form class="login-form" name="form1" action="codethemtintuc.php" method="post">
<table border="0" cellspacing="10" align="center">

		<tr>
		<th colspan="2" align="center">Thêm tin tức:</th>
		
	</tr>

	<tr>
		<th>Tiêu đề:</th>
		<td><input type="text" name="td" size="30" /> </td>
	</tr>

		<tr>
		<th>Hình ảnh:</th>
		<td><input type="file" name="anh" size="30" /> </td>
	</tr>

		<tr>
		<th>Nội dung:</th>
		<td><textarea cols="30" rows="5" name="nd"></textarea></td>
	</tr>



		<tr>
		<th colspan="2" align="center"><input type="submit" name="them" value="Thêm tin">
			<input type="reset" name="re" value="Nhập lại">

		</th>
	</tr> 
</table>



</form>
</div>
</div>
</body>
</html>