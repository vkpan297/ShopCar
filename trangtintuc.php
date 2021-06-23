<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head>
<title>Trang tin tức</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
#hi :hover{
  color:red;

}
#hi{
  color:white;
}

c{
  color: blue;
}
n{
  color: blue;
}
#ch{
  position: relative;
  left: 120px;
  color: red; 
}
#cha{
  position: relative;
  left: 0px;
  color: red; 
}
#bang1{
  width: 100%;
}
#bang2{
  width: 20%;
}
#anh{
  width: 10px;
}

#ten{
  background: #6699FF;
  text-align: center;
  color: white;
}
#ta{
  text-align: center;

}
#tai{
  text-align: center;
}
#anh5{
  text-align: center
}
#trang ul li{
  list-style-type: none;
}
</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
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
        <li><a href="trangtintuc.php" class="btn btn-primary disabled" style="background: black;">Tin tức</a> </li>
        
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
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white" style="background-image:url(hinhanh/anh1.jpg);">
    <h1 class="w3-xxxlarge" id="hi"><b>Trang tin tức</b></h1>
    <h6><span class="w3-tag">Chào mừng bạn đến với trang tin tức của chúng tôi</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="hinhanh/anh2.jpg" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Tin tức xe hơi</b></h1>
     
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border" style="background: #F5F5F5">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
      <?php
        $con=mysqli_connect('localhost','root','','otoonline1');
        $a=("select * from tintuc");
        $sql=mysqli_query($con,$a);
      ?>
        <table border="1" cellspacing="10" style="background: #FFFFFF" id="bang1">
         
      <?php
        while($rs=mysqli_fetch_assoc($sql)){
      ?>
     
       <tr>
        <td id="anh"><img src="hinhanh/<?php echo $rs['hinhanh']; ?> "width:100% height:100px/></td>
         <td valign="top" ><c><?php echo $rs['tieude']; ?></c><br><br><br>
          

         <br><br><br><br>
           <a  href="chitiettintuc.php?id=<?php echo $rs['matt']; ?>"> <button id="ch">Xem thêm chi tiết</button></a>
       </td>
         
          
      
       </tr>

       <?php
     }
     ?>
      

     </table>
      <!-- Blog entry -->
      
      <hr>

      <!-- Blog entry -->
      

      <!-- Blog entry -->
      
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="hinhanh/anh3.jpg" alt="Jane" style="width:100% " class="w3-grayscale">
        <div class="w3-container w3-green">
          <h4 id="ten">Hỗ trợ trực tuyến</h4>
          <p style="color:white" id="tai"> NHÂN VIÊN TƯ VẤN <br><b style="color:red;font-size: 15px">0343872043</b></p><br>

        <p id="anh5"><img src="hinhanh/anh4.jpg"  height="40" width="40"><b style="color:red;font-size: 16px"> 0353691067</b></p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
    
      <hr>

      <!-- Advertising -->
      
     

      <!-- Tags -->
   
      <hr>

      <!-- Inspiration -->
      

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <a href="https://www.facebook.com"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
          <a href="https://www.instagram.com"><i class="fa fa-instagram w3-hover-opacity"></i></a>
          <a href="https://www.snapchat.com/"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
          <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <a href="https://twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
          <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
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
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>