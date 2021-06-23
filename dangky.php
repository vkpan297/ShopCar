

<?php
$conn=mysqli_connect('localhost','root','','otoonline1');
$a="select * from khachhang";
$a1=mysqli_query($conn,$a);
$a2=mysqli_fetch_assoc($a1);
$tendn=$_POST['tendn'];
$matkhau=$_POST['matkhau'];
$ho=$_POST['hokh'];
$ten=$_POST['tenkh'];
$gioitinh=$_POST['gioitinh'];
$email=$_POST['email'];
$diachi=$_POST['diachi'];
$sdt=$_POST['sdt'];

if (!$tendn || !$matkhau || !$ho || !$ten || !$gioitinh || !$email || !$diachi || !$sdt   )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
$c="insert into khachhang(hokh,tenkh,sdt,diachi,email,gioitinh,tendn,matkhau) values('$ho','$ten','$sdt','$diachi','$email','$gioitinh','$tendn','$matkhau')";

$b=mysqli_query($conn,$c);
 if ($b)
        echo "Đăng ký thành công. <a href='index.php'>Quay lai</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>
   







