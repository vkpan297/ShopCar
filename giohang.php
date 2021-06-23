<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    #bt{
width:30px;
height:30px;
    }
#tong{
float:right;
}
#btt{
width:200px;
height:50px;
background-color: green;
font-size:30px;
color:white;
  }
  #btt:hover{
   width:200px;
height:50px;
background-color: white;
font-size:30px;
color:green;
  }
  }
  </style>


</head>

<body>
<div class="container">
  <h2>Giỏ hàng</h2>
  <div style="float:right;">
  <a href="audi.php"><button>Quay Lại</button></a>
</div>                              
  <table class="table table-hover">
    <thead>
      <tr>
        <th><h4><b>Sản phẩm</b></h4></th>
        <th></th>
        <th><h4><b>Số lượng:</b></h4></th>
      </tr>
    </thead>
    <?php
$con=mysqli_connect('localhost', 'root','','otoonline1');
$b="select * from giohang";
$q=mysqli_query($con,$b);
while($r=mysqli_fetch_assoc($q)){
$x=$r['giaban'];
$v=$r['sldat'];
$tong=$x*$v;
    ?>

    <tbody>
     <tr>
      <td style="width:20% ;height:75px;"><img src="image/<?php echo $r['anh'];?>" width="200px" height="100px"/></td>
      <td style="width:50% ;height:75px"><h4><b>Tên sản phẩm:</b>  <?php echo $r['tenxe'];?><h4>
        <h4><b>Giá:</b>   <?php echo $r['giaban'];?> VNĐ</h4>

      </td> 
      <td style="width:30% ;height:100px;  vertical-align: middle;">

      <table id="ab">
<tr >
  <td>
      <a href="nut1.php?id=1&od=<?php echo $r['madh']?>"><button id="bt">-</button></a></td>
      <td style="width:50px; text-align: center;"><?php echo $r['sldat'];?></td>
      <td><a href="nut1.php?id=2&od=<?php echo $r['madh']?>"><button id="bt">+</button></a></td>
</tr>

      </table>
<h4><b>$</b> <?php echo $tong; ?> VNĐ</h4>
    </td>

    <td style="text-align: left; vertical-align: middle;"><a href="xoa.php?vl=<?php echo $r['madh']?>"><img src="https://image.flaticon.com/icons/png/512/1175/1175088.png" width="30px" height="30px"/></a></td>
</tr>

    </tbody>
    <?php
  }
  ?>
  </table>
  <div id="tong">
    <table style="text-align: right;">
      <tr>
        <td>
<label>Tổng:</label></td><td style="width: 100px;"></td>
<td>
  <?php
  $tong=0;
$b4="select*from giohang";
$q4=mysqli_query($con, $b4);
while($r4=mysqli_fetch_assoc($q4)){
$x5=$r4['sldat']*$r4['giaban'];
$tong=$tong+$x5;}
echo $tong;
  ?>
  </td>
</tr>
  <tr>

 <td> <label>Thuế VAT(10%):</label><td style="width: 100px;"></td>
<td>
  <?php
  $vat=($tong*10)/100;
echo $vat;
  ?>
</td>
</tr>
<tr>
  <?php 
$b7="select count(*) as tongcot from giohang";
$q7=mysqli_query($con,$b7);
$r7=mysqli_fetch_assoc($q7);
$k=$r7['tongcot'];
if($k=='0'){
  $s=0;
  $link="trong.php";
}
if($k!='0'){
  $s=20000000;
  
  $link="formthanhtoan.php";
}

  ?>
  <td> <label>Phí ship:</label></td><td style="width: 100px;"></td><td><?php echo $s?> VNĐ</td>
</tr>
<tr>
  <td><label>TỔNG GIÁ TRỊ ĐƠN HÀNG:</label></td><td style="width: 100px;"></td><td>
    <?php
$tongall=$tong+$vat+$s;
echo "<b>$tongall VNĐ</b>";

    ?>

  </td>
</tr>
<tr><td></td>
  <td></td>
  <td><a href="<?php echo $link;?>?tong=<?php echo $tongall;?>"><button id="btt">Thanh Toán</button></a></td></tr>
</table>
</div>

</div>

</body>
</html>