<html>
<head>
<title>Bài tập 6</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   body {  
font-family:Arial, Helvetica, sans-serif;   
overflow-x: hidden;
}
 
img {   
max-width: 100%;
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
background: #eee;   
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
#a{
  position: relative;
  top:55px;
  left: 200px;

}
#a{
  position: fixed;
}
    
 #b{
  position: relative;
  top:0px;

}   
   #c{
     position: relative;
  top:500px;
   }
</style>



</head>
<body>
  <nav class="navbar navbar-default" data-spy="affix" data-offset-top="0" id="b">
  <div class="container-fluid"> 
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
        <li><a href="formlienhe.php">Liên hệ</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
 
    

        
<li><a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span></span></a> </li>      </ul>
      <form action="timkiem.php" method="get" class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Tìm kiếm...">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>

  <!-- /.container-fluid -->
   
  
  
  
</nav>


   <?php

$a=mysqli_connect('localhost','root','','otoonline1');
mysqli_query($a, "set utf-8");
$maxe=$_GET['id'];
$b="select*from sanpham where maxe=$maxe ";
$ac=mysqli_query($a,$b);


?>
<?php
while($row=mysqli_fetch_assoc($ac)){

?>
<div class="container" id="a"> 
 <div class="card"> 
  <div class="container-fliud" id="abcd"> 
   <div class="wrapper row"> 
       <div class="preview col-md-6" > 
     <div class="preview-pic tab-content" > 
      <div class="tab-pane active" id="pic-1"><img src="image/<?php echo $row['hinhanh']; ?>" />
      </div> 
    <div class="tab-pane" id="pic-2"><img src="image/<?php echo $row['anha']; ?>">
      </div> 
      <div class="tab-pane" id="pic-3"><img src="image/<?php echo $row['anhb']; ?>">
      </div> 
      <div class="tab-pane" id="pic-4"><img src="image/<?php echo $row['anhc']; ?>">
      </div> 
      <div class="tab-pane" id="pic-5"><img src="image/<?php echo $row['anhd']; ?>">
      </div>
     </div> 
   <ul class="preview-thumbnail nav nav-tabs">
      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="image/<?php echo $row['hinhanh']; ?>"></a>
      </li> 
      <li><a data-target="#pic-2" data-toggle="tab"><img src="image/<?php echo $row['anha']; ?>"></a>
      </li> 
      <li><a data-target="#pic-3" data-toggle="tab"><img src="image/<?php echo $row['anhb']; ?>"></a>
      </li> 
      <li><a data-target="#pic-4" data-toggle="tab"><img src="image/<?php echo $row['anhc']; ?>"></a>
      </li> 
      <li><a data-target="#pic-5" data-toggle="tab"><img src="image/<?php echo $row['anhd']; ?>"></a>
      </li> 
     </ul> 
    
    </div>
    <div class="details col-md-6"> 
     <h3 class="product-title">Tên xe:    <?php echo $row['tenxe'];?></p></h3> 
     <div class="rating"> 
      <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
      </div> <span class="review-no">123 đánh giá</span> 
       <p class="product-description"><?php echo $row['chitietxe'];?></p> 
     <h4 class="price">Giá bán: <?php echo number_format($row['gia'],0,',','.');?> VNĐ</h4> 
     <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
     </p> 
     </div> 
   <div class="action"> <a href="them.php?id=<?php echo $row['maxe']; ?>"><button class="add-to-cart btn btn-default" type="button">MUA NGAY</button> </a> 
    <a href="formlaithuxe.php?id=<?php echo $row['maxe']; ?>"><button class="add-to-cart btn btn-default" type="button">ĐĂNG KÝ LÁI THỬ</button> </a> 
     </div> 
     
    </div> 
   </div> 
  </div> 
 </div>

</div>

          <?php
   }
   ?>

</body>
</html>


