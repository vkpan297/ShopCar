<html>
<head>
	

</head>
<body>
	<?php
	$nam=$_GET['namsinh'];
	$con=mysqli_connect('localhost','root','','otoonline1');
	$b="select * from namsinh where namsinh=$nam";
$q=mysqli_query($con,$b);
$r=mysqli_fetch_assoc($q);
$nguhanh=$r['nguhanh'];
$b1="select * from nguhanh where id=$nguhanh";
$q1=mysqli_query($con,$b1);
$r1=mysqli_fetch_assoc($q1);

if($nguhanh=='1'){$tnh='Kim';}
if($nguhanh=='2'){$tnh='Mộc';}
if($nguhanh=='3'){$tnh='Thủy';}
if($nguhanh=='4'){$tnh='Hỏa';}
if($nguhanh=='5'){$tnh='Thổ';}
	?>
	<style>
		      body {
    background-color: white;
    font-family: 'Roboto', sans-serif;
}
.wrap {
    max-width: 940px;
    margin: 0 auto ;
}


/*Menu !!!!*/
.menu {
    vertical-align: top;
    display: inline-block;
    margin: 10px ;
    
}
.menu-item {
    background-color: #FEFEFE;
    width: 200px;
    height: 150px;
    margin: 10px;
    border-radius: 3px;
    box-shadow:0 0 8px rgba(0, 0, 0, 0.06);
}

.header-item {
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #3C3D41  ;
    font-size: 11px;
    padding: 15px 15px;
    border-bottom: 1.5px solid #EAEAEA;
}

.color-row1,  .color-row2  {
    margin: 15px;
    padding:0;
    max-width: 220px;
}

.color-circle {
    max-width: 220px;
    display: inline-block;
    width: 30px;
    height: 30px;
    border-radius: 50px 50px 50px 50px;
    
}

.size-circle {
    background-color: #EBEBEB;

}

.sizedouble {
 
   margin: 5px 5px;

}
.size {
     margin: 6px 8px;
}

/*ITEMS!!!*/
img {
    width: 190px; 
    height: 130px;

    vertical-align: top;
  
}

.items  {
    width: 650px;
    margin: 5px;
    display: inline-block;
}
 .item {
    vertical-align: top;
    width: 190px; 
    height: 300px; 
    margin: 8px;
    background:#FEFEFE; 
    display: inline-block;
    border-radius: 3px;
    box-shadow:0 0 8px rgba(0, 0, 0, 0.06);
 }

h3 {
    text-align: center;
    margin-bottom: 5px;
    margin-left: 5px;
    margin-right: 5px;
    font-size: 1em;
}

h5 {
    position: relative;
    bottom: 10px;
    text-align: center;
    margin-top: 20px;
}

.descroption {
    margin: 0;
    text-align: center;
    font-size: 11px;
    font-style: italic;
    color: grey;
    font-family: sans-serif;
}


/*BTN*/
.loadmore {
    height: 30px;
    width: 610px;
    margin-top: 25px;
    position: relative;
    left: 8px;
    text-decoration: none;
    font-size: 15px;
    background-color: #B8C6C7;
    color: #FEFEFE;
    border-radius: 4px;
    border: none;
    font-family: 'Roboto', sans-serif;
}

.mini-menu{
    width: 200px;
    border-radius: 3px;
    box-shadow:0 0 8px rgba(0, 0, 0, 0.06);
    overflow: hidden;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #848C8F ;
    font-size: 11px;
    margin: 10px;
}
.mini-menu ul {
    list-style: none;
    margin: 0;
    padding:0;
    text-align:left;
}
.mini-menu > ul > li {
    position: relative;
}
.mini-menu > ul > li > a {
    display: block; 
    outline: 0; 
    padding: 1.2em 1em; 
    text-decoration: none;  
    color:#3C3D41;  
    font-weight: normal;
    letter-spacing: 2px;  
    background: #FEFEFE;
    border-bottom: 1.5px solid #EAEAEA;
   
}

.mini-menu .sub > ul {
    height: 0;
    overflow: hidden;
    background: #848C8F;
}
.mini-menu .sub > ul > li > a {
    font-family:  sans-serif;
    color:#FEFEFE;
    font-size: 12px;
    display: block;
    text-decoration: none;
    padding: .7em 1em;
    text-transform: capitalize;
    font-style: normal; 
    letter-spacing: 1px;
}
/*.mini-menu .sub > ul > li > a:hover,*/
.mini-menu .sub > a.active,
 {
    padding-left: 1.3em;
    color: blue;
    content: "1";
    float: right;
    margin-right:6px;
    line-height: 12px;
}
.mini-menu .sub >  a:after{
    content: "»";
    float: right;
    margin-right:6px;
    line-height: 12px;
}

@media screen and (max-width: 940px) {
    .items {width: 420px;}
    .wrap {width: 700px;}
    .loadmore{width: 420px;}
   }
   @media screen and (max-width: 720px) {
    .items {width: 220px;}
    .wrap {width: 500px;}
    .loadmore{width: 220px;}
   }
   

   .ui-slider .ui-slider-handle {
    position: absolute;
    z-index: 2;
    width: 0.9em;
    height: 1.6em;
    cursor: default;
    outline: none;
    border: 1px solid rgb(207, 207, 207);
    background: #090;
    border-image: initial;
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
    .carousel-inner{
      width: 1500px;
    }
    .carousel-indicators{
      width: 1500px;
    }
    .billboard{
      height:700px;
    }
    #a{
      width: 1500px;
      height:700px;
    }
    body{
      width: 1500px;
    }
    #b{
      position: relative;
      left:450px;
      top:700px;
    }
    #myCarousel{
      position: absolute;
      top:0px;
    }
    #c{
      position: relative;
      margin-top:20px;
    }
    #d{
      position: relative;
      margin-top:10px;
    }

#ads{
  position: absolute;
  left: 0px;
  top: 740px;
}
#audi{
  position: relative;
  left: 0px;
  top:15px;
}
hr{
	font-size: 7px;
}
		#nam{
			position: absolute;
			left:45%;
width:10%;
height:65px;
text-align: center; 
background-color: <?php echo $r1['mau']?>;
		}
		c{
			font-size: 30px;
		}
		#gt{
			width:80%;
			position: absolute;
			top:80px;
			left:410px;
			text-align: center;
		}
		p{
			text-align:left;
			}
			img{
				text-align: center;
			}
			di{
				position: relative;
				left:70px;
				top:5px;
			}
	</style>
	
<div id="nam">
	<b><?php echo $nam;?></b><hr><c><b><?php echo $tnh;?></b></c>
</div>
<div class="items" id="d">
<div id="gt">
<di><b>Bạn nên chọn xe có màu</b></di><br>
<?php

$b7="select * from nguhanh where ID=$nguhanh";
$c7=mysqli_query($con, $b7);
$d1=mysqli_fetch_assoc($c7);
$d=$d1['mauphuhop'];
$b5="select * from sanpham where phanloai like '%$d%'limit 0,3";
$c5=mysqli_query($con, $b5);




?>
<div class="items">
  <?php
  while($row=mysqli_fetch_assoc($c5)){
?>
<div data-price="<?php echo $row['gia'];?>" class="item">
<a href="thongtinsp.php?id=<?php echo $row['maxe']?>"><img src="image/<?php echo $row['hinhanh']?>" width="250" height="150px" alt="jacket" class="img-item"/></a>
<div class="info" >
	
                    <h3><p style="font-size:18px;font-weight: bold"> <?php echo $row['tenxe'];?></h3>
    
                    <h5><?php echo number_format($row['gia'],0,',','.');?> VNĐ</h5>
                    </div>
</div>
                    <?php
}
                ?>
         
               
<br>

<b>Tương sinh, tương khắc giữa màu xe và chủ xe</b>
<p>- Khi mua xe, nên chọn xe có màu tương sinh hay cùng hành, kỵ mua xe màu tương khắc với mạng của chủ nhân.</p>
<p>- Mua chiếc xe có màu tương sinh với mạng người chủ thì chiếc xe đó thường đem lại lợi lộc, khi lái xe sẽ thoải mái trong lòng, ít khi bị hư hỏng bất ngờ và nếu rủi ro có bị tai nạn thì thường bị nhẹ hơn màu tương khắc</p>
<p>- Mua chiếc xe có màu cùng hành với người chủ cũng tốt, nó ít khi gây phiền phức nhưng cũng không được lợi bằng màu sinh nhập (cùng hành là cùng màu theo ngũ hành).
	<p> - Mua xe có màu tương khắc với mạng người chủ, thường làm cho sức khỏe người chủ trở nên suy yếu, trong lòng bực bội khi ngồi vào tay lái, bị buộc phải lái đi làm những việc mà trong lòng không muốn. Xe bị trục trặc thường xuyên, hao tốn tiền bạc để sửa chữa, bị cọ quẹt hay bị phá phách một cách vô cớ, khi xảy ra tai nạn thì bị thương tật và chiếc xe bị hư hại nặng nề có khi phải vứt bỏ.</p>
	<img src="image/phongthuy.jpg" width="400px" height="400px"/><br>
	<g><i>Phong thủy Ngũ Hành Sinh - Khắc (hình minh họa)</i></g><br>
		<g><i>Mộc sinh Hỏa, Hỏa sinh Thổ, Thổ sinh Kim, Kim sinh Thủy, Thủy sinh Mộc.</i></g><br>
			<g><i>Mộc khắc Thổ, Thổ khắc Thủy, Thủy khắc Hỏa, Hỏa khắc Kim, Kim khắc Mộc.</i></g>


</div>
</div>
	</body>
</html>