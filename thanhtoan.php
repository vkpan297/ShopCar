<?php
session_start();
?>
<?php
$con=mysqli_connect('localhost','root','','otoonline1');
$tendangnhap = $_SESSION['tendn'];
 $b2="select * from khachhang where tendn='$tendangnhap'";
 $q2=mysqli_query($con, $b2);
 $r2=mysqli_fetch_assoc($q2);
 $makh=$r2['makh'];


 $b="select*from giohang";
 $q=mysqli_query($con, $b);
 while ($r=mysqli_fetch_assoc($q)){

 	$x1=$r['tenxe']; 
 	$x2=$r['giaban'];
 	$x3= $r['sldat'];
 	$x4=$r['anh'];
$b1 ="insert into ctdondathang(Makh, tensp, giasp, sldat, ngaydat, anh) value($makh, '$x1',$x2,$x3,CURRENT_TIMESTAMP(),'$x4')";
mysqli_query($con, $b1);
}
$makh2=$_POST['makh'];
$ten=$_POST['txttnn'];
$sdt=$_POST['txtsdt'];
$tong=$_POST['tong'];
$diachi=$_POST['txtdcgh'];
$b4 ="insert into dondathang(makh, nguoinhan, sdt, ngaydat, ngaygh, diachi, hientrang, giatien) value($makh2,'$ten',$sdt,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP(),'$diachi',0,$tong)";
mysqli_query($con, $b4);
 
 $b7="select * from ctdondathang";
 $q7=mysqli_query($con, $b7);
 while($r7=mysqli_fetch_assoc($q7)){
 	$mx=$r7['tensp'];
 	$sl1=$r7['sldat'];
$b6="select * from sanpham where tenxe='$mx'";
 $q6=mysqli_query($con, $b6);
 $r6=mysqli_fetch_assoc($q6);
 $sl=$r6['soluong'];
 $conlai=$sl-$sl1;
 $b10="update sanpham set soluong= $conlai where tenxe='$mx'";
 mysqli_query($con,$b10);
  $b11="delete from giohang";
 mysqli_query($con,$b11);
 }

header('Location:abc.php');


?>