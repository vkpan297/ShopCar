<?php
session_start();
?>
<html>
<head>


	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
var offset = 300;
var duration = 750;
$(function(){
$(window).scroll(function () {
if ($(this).scrollTop() > offset)
$('#top-up').fadeIn(duration);else
$('#top-up').fadeOut(duration);
});
$('#top-up').click(function () {
$('body,html').animate({scrollTop: 0}, duration);
});
});
</script>
  <div title="Về đầu trang" onmouseover="this.style.color='#590059'" onmouseout="this.style.color='#004993'" id="top-up">
    <img src="image/up1.png" width="60px" height="auto"></img></div>

	<script>
	
		function ktf(){
			var x= document.forms['form1'].ten.value;
			if(x==""){
				alert("Ban can dien ten cua ban !");
				document.forms['form1'].ten.focus();
				return;
			}
			var sdt= document.forms['form1'].sdt.value;
			if(sdt==""){
				alert("Ban can dien so dien thoai cua ban !");
				document.forms['form1'].sdt.focus();
				return;
			}
			if(isNaN(sdt)==true){
				alert("so dien thoai cua ban phai la chu so !");
				document.forms['form1'].sdt.focus();
				return;
			}
			var add= document.forms['form1'].add.value;
			if(add==""){
				alert("Ban can dien dia chi cua ban !");
				document.forms['form1'].add.focus();
				return;
			}
			var email= document.forms['form1'].email.value;
			if(email==""){
				alert("Ban can dien email cua ban !");
				document.forms['form1'].email.focus();
				return;
			}
			
			
			
			
			if(document.forms['form1'].rdloai['0'].checked==false && document.forms['form1'].rdloai['1'].checked==false && document.forms['form1'].rdloai['2'].checked==false && document.forms['form1'].rdloai['3'].checked==false){
				alert("ban can chon 1 trong 4 loai xe !");
				document.forms['form1'].rdloai['0'].focus();
				return;
			}
			if(document.forms['form1'].rdlieu['0'].checked==false && document.forms['form1'].rdloai['1'].checked==false){
				alert("ban can chon 1 trong 2 loai nhien lieu xe ban dung !");
				document.forms['form1'].rdlieu['0'].focus();
				return;
			}
			
			if(document.forms['form1'].rdso['0'].checked==false && document.forms['form1'].rdso['1'].checked==false){
				alert("ban can chon 1 trong 2 loai !");
				document.forms['form1'].rdso['0'].focus();
				return;
			}
			var anh= document.forms['form1'].anh.value;
			if(anh==""){
				alert("Ban can chon anh xe cua ban !");
				document.forms['form1'].anh.focus();
				return;
			}
			var gia= document.forms['form1'].gia.value;
			if(gia==""){
				alert("Ban can dien gia xe cua ban !");
				document.forms['form1'].gia.focus();
				return;
			}
			document.forms['form1'].action='formbanxe2.php';
  document.forms['form1'].submit();
		}
	</script>
	<style>
#m1{background-color: green;}#m2{background-color: blue;}#m3{background-color: black; color: white}
		#m4{background-color: white ;}#m5{background-color: red;}#m6{background-color: yellow;}
		#m7{background-color: orange;}

		body{
  width: auto;
}
.s_icons{
-webkit-transition-duration: 0.5s; 
-moz-transition-duration: 0.5s;
-o-transition-duration: 0.5s;
margin: 0 10px 5px 0;
}
.s_icons:hover{
-webkit-transform:scale(1.3);
-moz-transform:scale(1.3);
-o-transform:scale(1.3);
}

#grad1 {
  height: 70px;
   background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
}


      #top-up {
background:none;
font-size: 3em;
text-shadow:0px 0px 5px #c0c0c0;
cursor: pointer;
position: fixed;
z-index: 9999;
color:#004993;
bottom: 40px;
right: 17px;
display: none;
}
    
      .navbar {
        margin-bottom: 50px;
        border-radius: 0;
      }

    
       .jumbotron {
        margin-bottom: 0;
        background-image: url(https://media.tinmoi.vn/resize_900x600/2016/02/25/1_49_1350026098_98_bmw-335i_1.jpg);
        color:white;
        height: 300px
      }
 }
  .container-fluid {
    padding: 60px 50px;
  }

  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }

g{
  text-decoration:line-through; 
  }
  g2{
color:red;
    }
    t{
      color:green;
      font-size:20px;
      }
      t2{
        color:brown;
        font-size: 14px;
      }
      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

       .btn-default {
      box-shadow: 1px 2px 5px #000000;   
  } 


  #abc{
 background: #FF3366;
    color: white;

  }
  #abc:hover {
  background: #fff;
      color: #000;

  }

  #tb{
float:right;
  }


  #rcorners3 {
  border-radius:30px 100px;
 

  padding: 20px; 
  width: 350px;
  height: 200px; 
  transition: width 1s, height 4s;
} 

#rcorners3:hover {
  border-radius: 100px 30px;
 
  padding: 20px; 
  width: 350px;
  height: 200px; 

}
label{
  float:left;
}

#ad{
  position: relative;
  left: 600px;
  font-size: 25px;
}
#ac{
  position: relative;
  right: 200px;
  font-size: 25px;
}
#zxc{
	position: relative;
	left: 400px;
	width: 300px;
}
table{
  background-color: silver;
}
	</style>
	</head>
	<body>


<nav class="navbar navbar-inverse">
     <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MY TRANSPORTATION</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="dangnhapkh.php">Trang chủ <span class="sr-only">(current)</span></a> </li>
        <li><a href="trangtintuc.php">Tin tức</a> </li>
        
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Hãng xe <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="audi.php" class="w3-bar-item w3-button">Hãng Audi</a></li>
            <li><a href="toyota.php" class="w3-bar-item w3-button">Hãng Toyota</a></li>
            <li><a href="honda.php" class="w3-bar-item w3-button">Hãng Honda</a> </li>
            <li><a href="bmw.php" class="w3-bar-item w3-button">Hãng BMW</a> </li>
            <li><a href="me.php" class="w3-bar-item w3-button">Hãng Mercedes</a></li>
            <li><a href="ford.php" class="w3-bar-item w3-button">Hãng Ford</a></li>
            <li><a href="mi.php" class="w3-bar-item w3-button">Hãng Misubishi</a></li>
            <li><a href="vk.php" class="w3-bar-item w3-button">Hãng Volkswagen</a></li>
            <li><a href="szk.php" class="w3-bar-item w3-button">Hãng Suzuki</a></li>
            <li><a href="ni.php" class="w3-bar-item w3-button">Hãng Nissan</a></li>
            
          </ul>
        </li>
        <li><a href="formbanxe.php" class="btn btn-primary disabled" style="color: white;background: black;">Bán xe</a> </li>
        <li><a href="formlienhe.php">Liên hệ</a> </li>



    </ul>
<ul class="nav navbar-nav navbar-right">
  
    <li><a href="dangnhap.php">Đăng nhập</a></li>
 
        
        <li><a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span></span></a> </li>
      </ul>
  <form action="timkiem.php" method="get" class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Tìm kiếm...">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
      </form>

  

   


</div>
  </div>


<div>



</div>

<section class="billboard">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://vnreview.vn/image/20/24/00/2024009.jpg" alt="" style="width:100%;height: 700px">
      </div>

      <div class="item">
        <img src="https://cdn-gd-v1.webbnc.net/useruploads/userfiles//509407/images/2-nang-hang-tai-cau-giay-ha-noi.jpg" alt="" style="width:100%;height: 700px">
      </div>
    
      <div class="item">
        <img src="https://www.carcomparing.com/store/carsubmodel/8200.jpg" alt="" style="width:100%;height: 700px">
      </div>
      
      <div class="item">
        <img src="https://autobikes.vn/stores/photo_data/hoanghiep/102017/02/10/105901_VinFast19.jpg" alt="" style="width:100%;height: 700px">
      </div>
      
      <div class="item">
        <img src="https://c.pxhere.com/photos/fc/28/audi_a8_black_sports_car_automobile_contour_metallic_sun_reflections-1165834.jpg!d" alt="" style="width:100%;height:700px">
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Trước</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Sau</span>
    </a>
    </div>  

  </section>



  </nav>



		<?php
$con=mysqli_connect('localhost','root','','otoonline1');
$b="select * from hangxe";
$q=mysqli_query($con,$b);
		?>
		<div id="zxc">
<form action="formbanxe2.php" method="post" name="form1" style="text-align: center;">
	
	<table class="table table-hover" align="center">
    <thead>
      <tr>
        <th colspan="2" style="text-align: center;"><h4><b>THÔNG TIN NGƯỜI BÁN</b></h4></th>
       

      </tr>
    </thead>
		<tbody>
     <tr>
			<td>Tên:</td><td><input type="text" name="ten" placeholder="Điền tên của bạn" /></td>
		</tr>
<tr>
	<td >Số điện thoại:</td><td><input type="text" name="sdt" placeholder="Điền sđt của bạn" /></td>
</tr>
<tr>
	<td>Địa chỉ</td><td><input type="text" name="add" placeholder="Tên thành phố, Tên huyện, Tên xã, Số nhà" size="50"/></td>
</tr>
<tr>
	<td>Email:</td><td><input type="email" name="email" placeholder="Nhập địa chỉ email" /></td>
</tr>
</tbody>

    <thead>
      <tr>
        <th colspan="2" style="text-align: center;"><h4><b>THÔNG TIN XE</b></h4></th>
     

      </tr>
    </thead>
		<tbody>
     <tr>
	<td>Hãng xe</td><td><select name="hangxe" required>
		<?php 
while($r=mysqli_fetch_assoc($q)){
		?>
<option name="a"  required><?php echo $r['tenhang']?></option>
<?php
}
?>
	</select></td>
</tr>
<tr>
	<td>Tên xe:</td><td><input type="text" name="tenxe" placeholder="tên xe" required /></td>
</tr>
<tr>
<td>Loại xe:</td><td><input type="radio" name="rdloai" value="1"/>Xe con
<input type="radio" name="rdloai" value="2"/>Xe chuyên dụng
<input type="radio" name="rdloai" value="3"/>Xe tải, xe ben
<input type="radio" name="rdloai" value="4"/>Xe khách</td>
</tr>
<tr>
	<td>Nhiên liệu</td><td><input type="radio" name="rdlieu" value="3"/>diesel
<input type="radio" name="rdlieu" value="4"/>Xăng</td>
</tr>
<tr>
	<td>Màu chủ đạo:</td><td>
		<select name="mau" required>
			<option value="mau" id="m1" required>Xanh Lục</option>
			<option value="mau" id="m2" required>Xanh lam</option>
			<option value="mau" id="m3" required>Đen</option>
			<option value="mau" id="m4" required>Trắng</option>
			<option value="mau" id="m5" required>Đỏ</option>
			<option value="mau" id="m6" required>Vàng</option>
			<option value="mau" id="m7" required>Cam</option>
		</select>

	</td>
</tr>
<tr>
	<td>
Kiểu số:
	</td>
<td colspan="2" ><input type="radio" name="rdso" value="1"/>Số tự động
<input type="radio" name="rdso" value="2"/>Số tay
</td>
<tr><td>Ảnh</td><td><input type="file" name="anh"/></td></tr>
<tr><td>Định giá bán</td><td><input type="text" name="gia"/>VNĐ</td></tr>
<tr><td colspan="2"><input type="button" value="Đăng tin (Phí:150000 VNĐ)" onclick="ktf()" /></td></tr>
</tbody>
	</table>
</form>
</div>

<footer style="background: #B7956B">
  <a class="up-arrow" id="to_top" data-toggle="tooltip" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <script>
    $('#to_top').click(function(){
    $("html, body").animate({
        scrollTop: 0
    }, 500);
});
  </script>
  <div id="contact" class="">
  <div class="row">
    <div class="col-sm-6">
      <h4>Hãy liên hệ với chúng tôi<h4>
      <p><span class="glyphicon glyphicon-map-marker"></span>  Hà Nội, Việt Nam</p>
      <p><span class="glyphicon glyphicon-phone"></span>     09xxxxxxxx</p>
      <p><span class="glyphicon glyphicon-envelope"></span>    choxeonline@gmail.com</p>
      <br>
      
    </div>
        <div class="col-sm-6">
<h4 align="left">Theo dõi chúng tôi để nhận được những điều thú vị</h4>
<hr />
  <div class="row">
       <form method="post" action="mailer.php">
        <div class="col-sm-8 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
         <div class="col-sm-1 form-group">
          <input class="btn btn-default pull-right" type="submit" value="Theo dõi">
        </div>
        </form>
      </div>
      <br> <br> <br>
      <div class="row">
      <div class="col-sm-4 form-group"> </div>
       
        <div class="col-sm-2 form-group" align="right">
      <a href="https://www.facebook.com"><i class="fa fa-facebook-official" style="font-size:36px;color:brown"></i></a>
        <a href="https://www.instagram.com"><i class="fa fa-instagram" style="font-size:36px;color:brown"></i></a>
         </div>
       </div>
    </div>
  </div>
  <div class="col-lsm-12" align="center">
<p class="copy" align="center">©Ô TÔ VIỆT NAM. All rights reserved.</p>
      </div>

</footer>
	</body>
</html>