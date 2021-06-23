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
</nav>

<?php
        $con=mysqli_connect('localhost','root','','otoonline1');
        $id=$_GET['id'];
        $a=("select * from tintuc where matt=$id");
        $sql=mysqli_query($con,$a);
      ?>
      <?php
        while($rs=mysqli_fetch_assoc($sql)){
      ?>
      <div><?php echo $rs['noidung']; ?></div>
      <?php
    }
    ?>
</body>
</html>