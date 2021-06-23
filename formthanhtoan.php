<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style >
    body,html {
    background-image: url('https://dep.anh9.com/imgs/13924hinh-nen-sieu-xe-o-to-aston-martin.jpg');
    background-size: cover;
    height: 100%;
}

#profile-img {
    height:180px;
}
.h-80 {
    height: 80% !important;
}

#chu{
  color:white;
}
h2{
  color:red;
}

#abc{
  width: 600px;
position: relative;
right: 200px
}

</style>
<script>
  function ktf(){
    var x =document.forms['form1'].txttnn.value;
      if(x==""){
        alert("bạn cần nhập tên của bạn !");
        document.forms['form1'].txttnn.focus();
        return;
      }
      var y =document.forms['form1'].txtsdt.value;
      if(y==""){
        alert("bạn cần nhập số điện thoại của bạn !");
        document.forms['form1'].txtsdt.focus();
        return;
      }
      if(isNaN(y)==true){
        alert(" số điện thoại của bạn phải là số !");
        document.forms['form1'].txtsdt.focus();
        return;
      }
var z =document.forms['form1'].txtdcgh.value;
      if(z==""){
        alert("bạn cần nhập địa chỉ của bạn !");
        document.forms['form1'].txtdcgh.focus();
        return;
      }
document.forms['form1'].action='thanhtoan.php';
  document.forms['form1'].submit();
  }
  
</script>
</head>
<body>
  <?php

$con=mysqli_connect('localhost', 'root','','otoonline1');

$k=$_GET['tong'];


  ?>
<?php
$a=$_SESSION['tendn'];
if(isset($a)){
$b5="select * from khachhang where tendn='$a'";
$q5=mysqli_query($con,$b5);
$r5=mysqli_fetch_assoc($q5);

?>
  <div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center" id="abc">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQcntG0BKOcCppKmi6ZsP69K-q1oVsuwtYJwce-fA3V0OgG3NL4&usqp=CAU" />
            <p id="profile-name" class="profile-name-card"></p>
<form name='form1' class="form-signin" method='post' action='thanhtoan.php'>
 <table>
  <tr>
   <th colspan='2'><center><h2>Thanh toán hóa đơn</h2></center></th>
  </tr>
  <tr>
   <td width="203" height="46" id="chu" style="color: red;">Tài khoản khách hàng:</td>
   <td width="281" id="chu" style="color: red;"><?php echo $_SESSION['tendn']; ?><input type="hidden" name="makh" value="<?php echo$r5['makh'];?>"/>
   </td>
  </tr>
  <tr>
   <td height="51" id="chu" style="color: red;">Tên người nhận:</td>
   <td><input type='text' name='txttnn' size='43' class="form-control form-group"  required autofocus/></td>
  </tr>
  <tr>
   <td height="65" id="chu" style="color: red;">Số điện thoại:</td>
   <td><input type='text' name='txtsdt' size='43' class="form-control form-group"  required autofocus/></td>
  </tr>
  <tr>
   <td style="vertical-align:top;color: red;" height="103" id="chu" >Địa chỉ giao hàng:</td>
   <td><textarea name='txtdcgh' class="form-control form-group" required autofocus cols='41' rows='4'></textarea></td>
  </tr>
  <tr>
   <td height="47" id="chu" style="color: red;">Tổng số tiền hóa đơn:</td>
   <td id="chu" style="color: yellow; font-size: 20px;"><input type="hidden" name="tong" value="<?php echo $k;?>"/><?php echo $k;?> VND</td>
  </tr>
  <tr>
   <th colspan='2'><center><input id='button7' class="btn btn-lg btn-primary btn-block btn-signin" type='button' value='Đặt hàng' onclick="ktf()" /></center></th>
  </tr>
 </table>
</form>
</div>
</div>
</div>
</div>
<?php
}else{
  header('location:trangbaoloidn.php');
}
?>

</body>
</html>