  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    <style>
body {  
font-family:Arial, Helvetica, sans-serif;   
overflow-x: hidden;
}
 

 
.preview {  
display: -webkit-box;   
display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
} 
 
@media screen and (max-width: 996px) { 
.preview { 
margin-bottom: 20px;
}
}
 
.preview-pic {  
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.preview-thumbnail.nav-tabs {   
border: none;   
margin-top: 15px;
}
 
.preview-thumbnail.nav-tabs li {    
width: 18%; 
margin-right: 2.5%;
}
 
.preview-thumbnail.nav-tabs li img {    
max-width: 100%;    
display: block;
}
 
.preview-thumbnail.nav-tabs li a {  
padding: 0; 
margin: 0;  
cursor:pointer;
}
 
.preview-thumbnail.nav-tabs li:last-of-type {   
margin-right: 0;
}
 
.tab-content {  
overflow: hidden;
}
 
.tab-content img {  
width: 100%;    
-webkit-animation-name: opacity;    
animation-name: opacity; 
-webkit-animation-duration: .3s; 
animation-duration: .3s;
}
 
.card { 
margin-top: 0px;       
padding: 3em;   
line-height: 1.5em;

} 
 
@media screen and (min-width: 997px) { 
.wrapper { 
display: -webkit-box; 
display: -webkit-flex; 
display: -ms-flexbox; 
display: flex;
}
}
 
.details {  
display: -webkit-box;
    display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
}
 
.colors {   
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.product-title, .price, .sizes, .colors {   
text-transform: UPPERCASE;  
font-weight: bold;
}
 
.checked, .price span { 
color: #ff9f1a;
}
 
.product-title, .rating, .product-description, .price, .vote, .sizes {  
margin-bottom: 15px;
}
 
.product-title {    
margin-top: 0;
}
 
.size {
    margin-right: 10px;
}
 
.size:first-of-type {   
margin-left: 40px;
}
 
.color {    
display: inline-block;  
vertical-align: middle; 
margin-right: 10px; 
height: 2em;    
width: 2em; 
border-radius: 2px;
}
 
.color:first-of-type {  
margin-left: 20px;
}
 
.add-to-cart, .like {   
background: #ff9f1a;    
padding: 1.2em 1.5em;   
border: none;   
text-transform: UPPERCASE;  
font-weight: bold;  
color: #fff;    
text-decoration:none; 
-webkit-transition: background .3s ease; 
transition: background .3s ease;
}
 
.add-to-cart:hover, .like:hover {   
background: #b36800;    
color: #fff;    
text-decoration:none;
}
 
.not-available {    
text-align: center; 
line-height: 2em;
}
 
.not-available:before { 
font-family: fontawesome;   
content: "\f00d";   
color: #fff;
}
 
.orange {   
background: #ff9f1a;
}
 
.green {    
background: #85ad00;
}
 
.blue { 
background: #0076ad;
}
 
.tooltip-inner {    
padding: 1.3em;
} 
 
@-webkit-keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
} 
 
@keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
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
        width: 100%;
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
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + #content {
      padding-top: 50px;
  }
    .navbar{
      z-index: 99;
    }
    .modal-content {
    position: relative;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
    box-shadow: 0 3px 9px rgba(0,0,0,.5);
    outline: 0;
}
#abcd{
  width: 530px;
}
#sub{
      position:fixed;
      width: 250px;
      top: 7%;
      margin-left: -125px;
      left: 50%;
      box-shadow: 0 0 5px 3px #27ae60;
      opacity:0;
      z-index: 1000;
      }

    </style>
  
 
  </head>
  <body>
<?php
  if(isset($_GET["sub"])){
?>
<div class="alert alert-success" id="sub" label="alert">Cảm ơn bạn đã đăng ký theo dõi.</div>
<script>
$(document).ready(function(){
  $('#sub').animate({opacity: 1,});
  setTimeout(function(){
    $('#sub').animate({opacity: 0,});
  },1500);
});
</script>
<?php
  }
?>
  <div class="jumbotron text-center">
  <h1>CHỢ XE ONLINE</h1> 
  <p>Chất lượng, giá cả hợp lý, đa dạng</p> 
</div>

  <nav class="navbar navbar-inverse">
     <div class="container-fluid" > 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" >MY TRANSPORTATION</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
        <li><a href="formbanxe.php">Bán xe</a> </li>
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
    <!-- /.navbar-collapse --> 
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

<div class="container-fluid text-center">
  <div id="grad1" style="text-align:center;margin:auto;color:yellow;font-size:40px;font-weight:bold">
<h2>DỊCH VỤ CỦA CHÚNG TÔI</h2>
  <h4>Đáp ứng mọi nhu cầu bạn cần</h4>
</div>

  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-star logo-small"></span><span class="glyphicon glyphicon-star logo-small"></span><span class="glyphicon glyphicon-star-empty logo-small"></span>  <span class="glyphicon glyphicon-star logo-small"></span>  <span class="glyphicon glyphicon-star logo-small"></span>
      <h4>ĐÁNH GIÁ</h4>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-fire logo-small"></span>
      <h4>NHIỆT HUYẾT-NĂNG ĐỘNG</h4>
  
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>AN TOÀN-BẢO MẬT</h4>

    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span><span class="glyphicon glyphicon-usd logo-small"></span><span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>GIÁ CẢ HỢP LÝ</h4>
  
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-earphone logo-small"></span>
      <h4>TRỰC TUYẾN 24/24</h4>
 
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4 style="color:#303030;">THÂN THIỆN VỚI MÔI TRƯỜNG</h4>

    </div>
  </div>
</div>



  <div class="container"> 
    <p><h2><b>XE MỚI NHẬP CỦA SHOP</b></h2></p>
    <div class="row">
          <?php
$a=mysqli_connect('localhost','root','','otoonline1');
$b="select * from sanpham order by ngaydang DESC limit 0, 9";
$c=mysqli_query($a, $b);
    ?>
    <?php
while ($row=mysqli_fetch_assoc($c)) {
?>
      <div class="col-sm-4">

        <div class="panel ">
       
          <img id="rcorners3" src="image/<?php echo $row['hinhanh']; ?>"  height="100%" width="100%" >
          <div class="panel-footer"> <h3><p style="font-size:18px;font-weight: bold"> <?php echo $row['tenxe'];?></h3>
    
                    <h5><?php echo number_format($row['gia'],0,',','.');?> VNĐ</h5>
                     <p class="descroption"><button class="w3-button w3-black"><a href="them.php?id=<?php echo $row['maxe']; ?>">Lưu xe<i class="fa fa-shopping-cart"></i></a></button>
 <button style="padding: 10px!important" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['maxe']; ?>">Xem chi tiết</button></p>
                  </div>
        </div>
      </div>
       <div id="myModal<?php echo $row['maxe']; ?>" class="modal fade" role="dialog" id="ab">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-size:20px;font-weight: bold"> <?php echo $row['tenxe'];?></h4>
        </div>
        <div class="modal-body">

          <div class="container"> 
 <div class="card"> 
  <div class="container-fliud" id="abcd"> 
   <div class="wrapper row"> 
       <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
      <div class="tab-pane active" id="pic-1"><img src="image/<?php echo $row['hinhanh']; ?>" width="auto" height="200px"/>
      </div> 
    
     </div> 
 
    </div>
    <div class="details col-md-6"> 
     <h3 class="product-title">Tên xe:    <?php echo $row['tenxe'];?></p></h3> 
     <h4><b>Giá:</b> <?php echo $row['gia'];?>VNĐ</h4>
      <h4><b>Năm sản xuất:</b> <?php echo $row['namsx'];?></h4>
      <h3>Số lượng: <?php echo $row['soluong'];?></h3>
     <div class="rating"> 
      <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
      </div> <span class="review-no">123 đánh giá</span> 
     </div> 
   <div class="action"> <a href="them.php?id=<?php echo $row['maxe']; ?>"><button class="add-to-cart btn btn-default" type="button">MUA NGAY</button> </a>
   <a href="thongtinsp.php?id=<?php echo $row['maxe']; ?>"><button class="add-to-cart btn btn-default" type="button">Xem thêm </button> </a>  
     </div> 
     
    </div> 
   </div> 
  </div> 
 </div>
</div>
          
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

</div>
</div>
              <?php
}
?>
    </div>
  </div><br>

  <div class="container"> 
  <p><h2><b>XE ĐANG ĐƯỢC RAO BÁN</b></h2></p>   
    <div class="row">
                <?php
$a=mysqli_connect('localhost','root','','otoonline1');
$b4="select * from xecu order by ngaydang DESC limit 0, 9";
$c=mysqli_query($a, $b4);
    ?>
    <?php
while ($row=mysqli_fetch_assoc($c)) {
?>
      <div class="col-sm-4">
        <div class="panel ">
         
          <img id="rcorners3" src="image/<?php echo $row['anh']; ?>" class="img-responsive" style="width:100%" alt="Image">
          <div class="panel-footer">
<h3><p style="font-size:18px;font-weight: bold"> <?php echo $row['tenxe'];?></h3>
    
                    <h5><?php echo number_format($row['gia'],0,',','.');?> VNĐ</h5>
                    <p class="descroption"><button style="padding: 10px!important" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>">Xem chi tiết</button></p>
                  </div>
        </div>
      </div>
         <div id="myModal<?php echo $row['id']; ?>" class="modal fade" role="dialog" id="ab">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-size:20px;font-weight: bold"> <?php echo $row['tenxe'];?></h4>

        </div>
        <div class="modal-body">
          <p><img src="image/<?php echo $row['anh']; ?>" width="auto" height="200px" /></p>
       
          <p style="font-size:20px;font-weight: bold">Chủ xe:    <?php echo $row['tennguoiban'];?></p>
          <p style="font-size:18px;color: red">Số điện thoại liên hệ:    <?php echo $row['sdt'];?></p>
          <p style="font-size:20px;font-weight: bold">Địa chỉ:    <?php echo $row['diachi'];?></p>
          <p style="font-size:18px;color: red">Email:    <?php echo $row['email'];?></p>
          <p style="font-size:20px;font-weight: bold">Tên xe:    <?php echo $row['tenxe'];?></p>
          <p style="font-size:18px;color: red">Giá bán:    <?php echo number_format($row['gia'],0,',','.');?>VNĐ</p>
          
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

</div>
</div>
   
                  <?php
}
?>
 </div>
  </div>
  
  <div class="container"> 
  <p><h2><b>TIN TỨC NỔI BẬT</b></h2></p>   
    <div class="row">
                <?php
$a=mysqli_connect('localhost','root','','otoonline1');
$b="select * from tintuc order by ngaydang DESC limit 0, 9";
$c=mysqli_query($a, $b);
    ?>
    <?php
while ($row=mysqli_fetch_assoc($c)) {
?>
      <div class="col-sm-4">
        <div class="panel ">
         
          <img id="rcorners3" src="hinhanh/<?php echo $row['hinhanh']; ?>" class="img-responsive" style="width:100%" alt="Image">
          <div class="panel-footer">
<h3><a href="chitiettintuc.php?id=<?php echo $row['matt']; ?>"><p style="font-size:18px;font-weight: bold"> <?php echo $row['tieude'];?></h3></p></a></div>
        </div>
      </div>
   <?php
 }
 ?>
    </div>
  </div>



  <br><br>

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

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>



  </body>
  </html>

