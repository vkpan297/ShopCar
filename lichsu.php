<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lịch sử mua hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$a=$_SESSION['tendn'];
$con=mysqli_connect('localhost','root','','otoonline1');
$b="select * from khachhang where tendn='$a'";
$q=mysqli_query($con,$b);
$r=mysqli_fetch_assoc($q);
$m=$r['makh'];
$b1="select * from dondathang where makh=$m order by hientrang ASC";
$q1=mysqli_query($con,$b1);
$b2="select count(*) as tongcot from dondathang where makh = $m";

$q2=mysqli_query($con, $b2);

$r2=mysqli_fetch_assoc($q2);
?>
<div class="container">
  <h2>Lịch sử mua hàng</h2>
  
  <p><b>Tên khách hàng:</b> <?php echo $r['hokh'];?> <?php echo $r['tenkh'];?></p>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
      	<th>Thời gian đặt hàng</th>
        <th>Địa chỉ người nhận</th>
        <th>Thành tiền</th>
        <th style="text-align: center;">Hiện trạng</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
 <?php
 $tong=0;
while($r1=mysqli_fetch_assoc($q1)){
	$ht=$r1['hientrang'];
	$ngay=$r1['ngaydat'];

$x=$r1['giatien'];
 $tong=$tong+$x;

	if($ht=='1'){
$ht1="<b>Đã giao</b><br>$ngay";
	}
	if($ht=='0'){
$ht1="Chưa giao";
	}
 ?>
<tr style="text-align: left;">
	<td><?php echo $r1['ngaydat'];?></td><td><?php echo $r1['diachi'];?></td>
	<td><?php echo $r1['giatien'];?> VNĐ</td><td style="text-align: center;"><?php echo $ht1;?></td>
	<td><a href="ctdonhang.php?id=<?php echo $r1['madh']?>">Chi tiết</a></td>
</tr>

 <?php
}
 ?>
 <tr><td colspan="5" style="text-align: center;"><b>Số Đợt Mua Hàng:</b>&nbsp<?php echo $r2['tongcot']?></td></tr>
 <tr><td colspan="5" style="text-align: center;"><b>Tổng Tiền Đã Tiêu:</b>&nbsp<?php echo $tong?> VNĐ</td></tr>
    </tbody>
    </tbody>
  </table>
</div>

</body>
</html>
