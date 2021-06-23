<?php
$host="localhost";
$tendangnhap="root";
$database="otoonline1";

$matkhau="";

$connect=mysqli_connect($host,$tendangnhap,$matkhau,$database);


if(!$connect){
	die("khong the ket noi");
}
?>