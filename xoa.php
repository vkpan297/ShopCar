<html>
<head>
	</head>
	<body>
		<?php
		$m=$_GET['vl'];
$con=mysqli_connect('localhost','root','','otoonline1');
$b="delete from giohang where madh=$m";
mysqli_query($con, $b);
header('location:giohang.php');

		?>
	</body>
</html>