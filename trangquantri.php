<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="sumit kumar"> 
    <title>admin-template</title> 
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
   
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  	

        body{background-color: #ecf0f1;}

.navbar-inverse {
    background-color: #2C3E50;
    border-color: #2C3E50;
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 0px solid transparent;
}
.navbar-nav > li > a {
    padding-top: 20px;
    padding-bottom: 10px;
    line-height: 20px;
}
@media (min-width: 768px){

.navbar {
    border-radius: 0px;
}}

.navbar-brand {
    float: left;
    height: auto;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.sidebar-toggle {
    color: #fff;
    font-size: 28px;
    display: inline-block;
    padding: 3px 22px;
}
@media (min-width:768px){
.container-1{width:15%;float:left;}
.container-2{width:100%;float: left;}
}

@media (max-width:768px){
.container-1{width:100%;}
.container-2{width:100%;}
}
.container-1:after,
.container-2:before,
{
  display: table;
  content: " ";
}
.container-1:after,
.container-2:after,
{clear: both;}

.container-1{display: none;}
/*navbar-right=====START==========*/

.social-icon{margin:0px;padding:0px;}
.social-icon li {margin: 0px;padding: 0px;list-style-type: none;}
.social-icon li a {
    display: block;
    padding: 15px 14px;
    text-decoration:none;
}
.social-icon li a:focus{
   color:#fff;
    text-decoration:none;
}

.messages-link{
        color: #fff !important;
    background: #16a085 !important;

}

.alerts-link{
        color: #fff !important;
    background: #f39c12 !important;

}

.tasks-link{
        color: #fff !important;
    background: #2980b9 !important;

}

.user-link{
        color: #fff !important;
    background: #E74C3C !important;

}
 .number {
    position: absolute;
    bottom: 25px;
    left: 3px;
    width: 20px;
    height: 20px;
    padding-right: 1px;
    border-radius: 50%;
    text-align: center;
    font-size: 11px;
    line-height: 20px;
    background-color: #2c3e50;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: -105px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
/*navbar-right=======END========*/

/*sidebar-toggle=============*/
.sidebar-toggle:hover, .sidebar-toggle:focus {
    color: #fff;
    text-decoration: underline;
}


/*sidr-NAVBAR=======START========*/
.navbar-nav-1{width: 100%;background-color:#34495E;height:auto;overflow: hidden;z-index: 1020;position: relative;}

.side-user {
    display: block;
    width: 100%;
    padding: 15px;
    border-top: none !important;
    border-bottom: 1px solid #142638;
    text-align: center;
}
.close-btn {
    position: absolute;
    z-index: 99;
    color: #fff;
    font-size: 31px;
    top: 0px;
    left: 223px;    
    display: none;
    padding: 0px;
    cursor: pointer;
}
.close-btn .fa-window-close{color:#fff;font-size: 25px;}
.welcome {
    margin: 0;
    font-style: italic;
    color: #9aa4af;
}

.name {
    margin: 0;
    font-family: "Ubuntu","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 20px;
    font-weight: 300;
    color: #ccd1d7;
}
.side-user a{
   color:#fff;
}
.nav-search{border-top: 1px solid #54677a;}
.nav-search .form-control{border: 1px solid #000;border-radius: 0px;}
.nav-search .btn{border: 1px solid #000;border-radius: 0px;}

.dashboard>a{
    color:#fff;
    }
.side-nav li {
    border-top: 1px solid #54677a;
    border-bottom: 1px solid #142638;
}

.side-nav>li>a:active {
    text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
    outline: none;
    color: #fff;
    background-color: #34495e;
}

.panel {
    margin-bottom: 0;
    border: none;
    border-radius: 0;
    background-color: transparent;
    box-shadow: none;
}

.panel>a{
    position: relative;
    display: block;
    padding: 10px 15px;
    color: #fff;
}

.panel>ul>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    color: darkcyan;
    background: black;
}
.nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    background-color: #3d566e;
}
/*sidr-NAVBAR=======END========*/
@media (min-width: 768px){

#page-wrapper {
   
    padding: 0 30px;
    min-height: 1300px;
    border-left: 1px solid #2c3e50;
}
}

#page-wrapper {
    padding: 0 15px;
    border: none;
    
}

.date-picker{    
    border-color: #138871;
    color: #fff;
    background-color: #149077;
    margin-top: -7px;
    border-radius: 0px;
    margin-right: -15px;
}

#page-wrapper .breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #e0e7e8;
    border-radius: 0px;
    
}




@media (min-width: 768px){
.circle-tile {
    margin-bottom: 30px;
}
}

.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}

.circle-tile-heading {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto -40px;
    border: 3px solid rgba(255,255,255,0.3);
    border-radius: 100%;
    color: #fff;
    transition: all ease-in-out .3s;
}

/* -- Background Helper Classes */

/* Use these to cuztomize the background color of a div. These are used along with tiles, or any other div you want to customize. */

 .dark-blue {
    background-color: #34495e;
}

.green {
    background-color: #16a085;
}

.blue {
    background-color: #2980b9;
}

.orange {
    background-color: #f39c12;
}

.red {
    background-color: #e74c3c;
}

.purple {
    background-color: #8e44ad;
}

.dark-gray {
    background-color: #7f8c8d;
}

.gray {
    background-color: #95a5a6;
}

.light-gray {
    background-color: #bdc3c7;
}

.yellow {
    background-color: #f1c40f;
}

/* -- Text Color Helper Classes */

 .text-dark-blue {
    color: #34495e;
}

.text-green {
    color: #16a085;
}

.text-blue {
    color: #2980b9;
}

.text-orange {
    color: #f39c12;
}

.text-red {
    color: #e74c3c;
}

.text-purple {
    color: #8e44ad;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}



.circle-tile-heading .fa {
    line-height: 80px;
}

.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-description {
    text-transform: uppercase;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}

.circle-tile-number {
    padding: 5px 0 15px;
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
}

.circle-tile-footer {
    display: block;
    padding: 5px;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.1);
    transition: all ease-in-out .3s;
}

.circle-tile-footer:hover {
    text-decoration: none;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.2);
}


.morning {
    background: url(https://lh3.googleusercontent.com/-1YbV7nsVnX8/WMugaq-6BEI/AAAAAAAADSg/0wPfQ84vMUcCle_SkgiUDOumUKscMaA8QCL0B/w530-d-h353-p-rw/widget-bg-morning.jpg) center bottom no-repeat;
    background-size: cover;
}

.time-widget {
    margin-top: 5px;
    overflow: hidden;
    text-align: center;
    font-size: 1.75em;
}

.time-widget-heading {
    text-transform: uppercase;
    font-size: .5em;
    font-weight: 400;
    color: #fff;
}
#datetime{color:#fff;}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0,0,0,0.9);
}

.tile {
    margin-bottom: 15px;
    padding: 15px;
    overflow: hidden;
    color: #fff;
}
  .shape{    
    border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
    -ms-transform:rotate(360deg); /* IE 9 */
    -o-transform: rotate(360deg);  /* Opera 10.5 */
    -webkit-transform:rotate(360deg); /* Safari and Chrome */
    transform:rotate(360deg);
}
.offer{
    background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer:hover {
    -webkit-transform: scale(1.1); 
    -moz-transform: scale(1.1); 
    -ms-transform: scale(1.1); 
    -o-transform: scale(1.1); 
    transform:rotate scale(1.1); 
    -webkit-transition: all 0.4s ease-in-out; 
-moz-transition: all 0.4s ease-in-out; 
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
    }
.shape {
    border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
    border-radius:7px;
}
.offer-danger { border-color: #d9534f; }
.offer-danger .shape{
    border-color: transparent #d9534f transparent transparent;
}
.offer-success {    border-color: #5cb85c; }
.offer-success .shape{
    border-color: transparent #5cb85c transparent transparent;
}
.offer-default {    border-color: #999999; }
.offer-default .shape{
    border-color: transparent #999999 transparent transparent;
}
.offer-primary {    border-color: #428bca; }
.offer-primary .shape{
    border-color: transparent #428bca transparent transparent;
}
.offer-info {   border-color: #5bc0de; }
.offer-info .shape{
    border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {    border-color: #f0ad4e; }
.offer-warning .shape{
    border-color: transparent #f0ad4e transparent transparent;
}

.shape-text{
    color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
    -ms-transform:rotate(30deg); /* IE 9 */
    -o-transform: rotate(360deg);  /* Opera 10.5 */
    -webkit-transform:rotate(30deg); /* Safari and Chrome */
    transform:rotate(30deg);
}   
.offer-content{
    padding:0 20px 10px;
}
@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
}
@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }

  </style>

    
    </head>



<body>
    
 
                                  <!--=============================
                                             NAVIGATION
                                   =============================-->
    
<!--top nav start=======-->
<nav class="navbar navbar-inverse top-navbar" id="top-nav">
  <div class="container-fluid">
    <div class="navbar-header">      
      
        <a href="javascript:;" class="sidebar-toggle">
        <i class="fa fa-bars"></i></a>
        <span class="close-btn" id="hide-btn"><i class="fa fa-times" aria-hidden="true"></i></span>
    </div>
      
    <ul class="social-icon pull-right list-inline">
          
          
          
          
          
           
          
         <li class="dropdown" id="ad"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-user"></span> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </a>
            
           <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTO1AJW5GYLIZevelbewqM2ksvCs5dyVRQSh0Nt-pILWUTAcaNA&usqp=CAU" class="img-circle" alt="User Image">

               
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="../user/" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="dangxuatadmin.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

      </ul>       
    </div>  
</nav>    
<!--    top nav end===========-->
    
    <!-- begin SIDE NAV USER PANEL -->     
<div class="container-1" id="user-profil">                  
<ul id="side" class="nav navbar-nav-1 side-nav">
    
 <li class="side-user">  
    <i class="fa fa-users fa-fw fa-3x"></i>
                                    
    <p class="welcome"><i class="fa fa-key"></i> Logged in as</p>
    <p class="name tooltip-sidebar-logout"> Admin
    <a href="#"><i class="fa fa-sign-out"></i></a>
    </p>        
 </li>
    
    <li class="nav-search">
   <form class="navbar-form">
    <div class="input-group">
     <input type="text" class="form-control" placeholder="Search">
     <div class="input-group-btn">
     <button class="btn btn-default" type="submit">
     <i class="glyphicon glyphicon-search"></i>
     </button>
     </div>
   </div>
  </form>
 </li>
    
    <li class="dashboard">
   <a class="active" href="trangqtadm.php">    <i class="fa fa-users fa-fw fa-3x"></i>
  Quản trị thành viên</a>
 </li>
    
    <li class="panel">
   <a  href="trangqtkhachhang.php" data-toggle="collapse" data-target="#charts">
   <i class="fa fa-users fa-fw fa-3x"></i> Quản trị khách hàng 
   </a></li>
    
 
    
    <li class="panel">
   <a href="quanlytintuc.php"data-toggle="collapse" data-target="#calendar">
   <i class="fa fa-bell fa-fw fa-3x"></i> Quản lý tin tức </i>
   </a>
    </li>
  
    
    <li class="panel">
   <a href="quanlytintuc1.php" data-toggle="collapse" data-target="#clipboard">
   <i class="fa fa-tasks fa-fw fa-3x"></i> Chi tiết tin tức 
   </a>
    </li>
  
    
    <li class="panel">
   <a href="trangqtsanpham.php" data-toggle="collapse" data-target="#edit">
   <i class="fa fa-car fa-fw fa-3x"></i>  Quản lý sản phẩm 
   </a>
    </li>
    <li class="panel">
   <a href="trangqtxeraoban.php" data-toggle="collapse" data-target="#edit">
   <i class="glyphicon glyphicon-usd fa fa-car fa-fw fa-3x"></i> Xe được rao bán
   </a>
    </li>
    
    <li class="panel">
   <a href="trangquanlydonhang.php" data-toggle="collapse" data-target="#inbox">
   <i class="fa fa-shopping-cart fa-fw fa-3x"></i> Quản lý đơn hàng
   </a>
    </li>
  
    
    <li class="panel">
   <a href="hienthilienhe.php" data-toggle="collapse" data-target="#cogs">
  <i class="fa fa-comments fa-fw fa-3x"></i> Phản hồi từ khách hàng 
   </a>
    </li>
  
    
    
                 
</ul>      
    </div>    
   
    
    <div class="container-2">
     <div id="page-wrapper">   
      <div class="row">
     <div class="col-md-12">
      <div class="page-title">
       <h2>Trang quản trị </h2>
        <ol class="breadcrumb">
         <li class="active"><h3><b>Tên các bảng</b></h3></li>
          <li class="pull-right">
       
          </li>
        </ol>
       </div>
      </div>
     </div> 
                                                 
        <div class="row" >
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="trangqtadm.php">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Thành viên
                                </div>
                                <div class="circle-tile-number text-faded">
                                    
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="trangqtadm.php" class="circle-tile-footer">Xem chi tiết <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="trangqtkhachhang.php">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                    Tài khoản khách hàng
                                </div>
                                <div class="circle-tile-number text-faded">
                                    
                                </div>
                                <a href="trangqtkhachhang.php" class="circle-tile-footer">Xem chi tiết  <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="quanlytintuc.php">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-bell fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    Tin tức
                                </div>
                                <div class="circle-tile-number text-faded">
                                    
                                </div>
                                <a href="quanlytintuc.php" class="circle-tile-footer">Xem chi tiết  <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="quanlytintuc1.php">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    Chi tiết tin tức
                                </div>
                                <div class="circle-tile-number text-faded">
                                   
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="quanlytintuc1.php" class="circle-tile-footer">Xem chi tiết  <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="trangqtsanpham.php">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-car fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    Sản phẩm
                                </div>
                                <div class="circle-tile-number text-faded">
                                   
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="trangqtsanpham.php" class="circle-tile-footer">Xem chi tiết <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="trangqtxeraoban.php">
                                <div class="circle-tile-heading blue">
                                    <i class=" glyphicon glyphicon-usd fa fa-car fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    Xe được rao bán
                                </div>
                                <div class="circle-tile-number text-faded">
                                   
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="trangqtxeraoban.php" class="circle-tile-footer">Xem chi tiết  <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="trangquanlydonhang.php">
                                <div class="circle-tile-heading red">
                                    <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                    Danh sách đơn đặt hàng
                                </div>
                                <div class="circle-tile-number text-faded">
                                  
                                    <span id="sparklineC"></span>
                                </div>
                                <a href="trangquanlydonhang.php" class="circle-tile-footer">Xem chi tiết  <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="hienthilienhe.php">
                                <div class="circle-tile-heading purple">
                                    <i class="fa fa-comments fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content purple">
                                <div class="circle-tile-description text-faded">
                                    Phản hồi của khách hàng
                                </div>
                                <div class="circle-tile-number text-faded">
                                   
                                    <span id="sparklineD"></span>
                                </div>
                                <a href="hienthilienhe.php" class="circle-tile-footer">Xem chi tiết <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                    
                </div>
                                                     

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <h2>THỐNG KÊ</h2>
    </div>
    <table>
      <tr>
        <td><b>Tổng Số Xe Đã Bán:</b>&nbsp&nbsp</td><td width="100px"></td><td>
          <?php
$con=mysqli_connect('localhost','root','','otoonline1');
$b10="select * from ctdondathang";
$q10=mysqli_query($con,$b10);
$soxe=0;  
while($r10=mysqli_fetch_assoc($q10)){
  $soxe=$soxe+$r10['sldat'];
}
echo $soxe;
          ?>Cái
        </td>

      </tr>
      <tr>
        <td><b>Thành tiền:</b></td><td width="100px"></td>
        <td><?php
          $b5="select * from dondathang where hientrang=1";
$tong1=0;
$q5=mysqli_query($con,$b5);
while($r5=mysqli_fetch_assoc($q5)){
    $tong1=$tong1+$r5['giatien'];
}
echo $tong1;?> VNĐ (Đã Tính thuế VAT 10%)
        </td>
      </tr>
      <tr>
        <td><b>Số tin đăng bán xe cũ:</b></td><td width="100px"></td><td>
          <?php
$b7="select count(*) as tongcot from xecu";
$q7=mysqli_query($con,$b7);
$r7=mysqli_fetch_assoc($q7);
$tong2=150000 * $r7['tongcot'];
$tongs=$tong1+$tong2;
echo $r7['tongcot'];
          ?>
        </td>
      </tr>
      <tr>
        <td><b>Tiền đăng tin bán xe cũ:</b>(150000đ/tin)</td><td width="100px"></td><td><?php echo $tong2;?> VNĐ</td>
      </tr>
      <tr>
        <td><b>Lương:</b>(4000000 VNĐ/Người)</td><td width="100px"></td><td><?php
$b11="select count(*) as tongcot from adm  ";

$c11=mysqli_query($con, $b11);

$row11=mysqli_fetch_assoc($c11);
$luong=4000000 *$row11['tongcot'];
echo $luong;
$tongs=$tong1+$tong2-$luong;
        ?>  VNĐ</td>
      </tr>
      <tr>
        <td><b>Tổng thu</b></td><td width="100px"></td><td><?php echo $tongs?>VNĐ</td>
      </tr>
    </table>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-danger">
                <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon glyphicon glyphicon-eye-open"></span>                            
                    </div>
                </div>
                <?php
$a=mysqli_connect('localhost','root','','otoonline1');
$b1="select count(*) as tongcot from subscribers  ";

$c1=mysqli_query($a, $b1);

$row1=mysqli_fetch_assoc($c1);
                ?>
                <div class="offer-content">
                    <h3 class="lead">
                    Số lượt đăng ký theo dõi : <label class="label label-danger"><?php echo $row1['tongcot']; ?></label>
                    </h3>
                    <p>
                        
                        <br> 
                        <div class="progress">
             <div>
                    
                        </div>
                   </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-success">
                <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon glyphicon glyphicon-th"></span>                          
                    </div>
                </div>
                                <?php
$a=mysqli_connect('localhost','root','','otoonline1');
$b1="select count(*) as tongcot from sanpham  ";

$c1=mysqli_query($a, $b1);

$row1=mysqli_fetch_assoc($c1);
                ?>
                <div class="offer-content">
                    <h3 class="lead">
                         Sản phẩm : <label class="label label-success"> <?php echo $row1['tongcot']; ?></label>
                    </h3>
                    <p>
                       
                        <br> 
                        <div class="progress">
             <div >
                     
                        </div>
                   </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-radius offer-primary">
                <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon  glyphicon-user"></span>                         
                    </div>
                </div>
                                                <?php
$a=mysqli_connect('localhost','root','','otoonline1');
$b1="select count(*) as tongcot from adm  ";

$c1=mysqli_query($a, $b1);

$row1=mysqli_fetch_assoc($c1);
                ?>
                <div class="offer-content">
                    <h3 class="lead">
                         Nhân sự : <label class="label label-primary"> <?php echo $row1['tongcot']; ?></label>
                    </h3>
                    <p>
                        
                        <br> 
                        <div class="progress">
             <div >
                     
                        </div>
                   </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-info">
                <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon  glyphicon-home"></span>                         
                    </div>
                </div>
                                                                <?php
$a=mysqli_connect('localhost','root','','otoonline1');
$b1="select count(*) as tongcot from tintuc  ";

$c1=mysqli_query($a, $b1);

$row1=mysqli_fetch_assoc($c1);
                ?>
                <div class="offer-content">
                    <h3 class="lead">
                        TIN TỨC  : <label class="label label-info"> <?php echo $row1['tongcot']; ?></label>
                    </h3>
                    <p>
              
                        <br> 
                        <div class="progress">
             <div >
                    
                        </div>
                   </div>
                    </p>
                </div>
            </div>
        </div>
        </div>
</div>
        
    </div><!-- page-wrapper END-->
   </div><!-- container-1 END-->
 
    
    


 

    
    
    <script src="js/jquery-3.1.1.js"></script>    
    <script src="js/bootstrap.js"></script>
    


<script type="text/javascript">
    $(document).ready(function(){
        $(".sidebar-toggle").click(function(){
            $(this).hide();
            
           $("#user-profil").show();
            
           $("#hide-btn").show();
            
           $(".container-2").css("width", "85%");
            
             
        });
        
        $("#hide-btn").click(function(){
            $(this).hide();
            
           $("#user-profil").hide();
            
           $(".sidebar-toggle").show();
            
           $(".container-2").css("width", "100%");
            
             
        });
    });
</script>

   
 
   
   
</body>
</html>