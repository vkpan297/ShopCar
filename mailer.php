<?php
session_start();
if(isset($_POST['email'])){
	$conn=mysqli_connect('localhost','root','','otoonline1');
$a="select * from subscribers";
$a1=mysqli_query($conn,$a);
$a2=mysqli_fetch_assoc($a1);
$email = $_POST['email'];
$c="insert into subscribers(email) values('$email')";
$b=mysqli_query($conn,$c);
mysqli_close($a);
	header("Location: index.php?sub=1");
}
?>