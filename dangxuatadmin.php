<?php
 session_start();
 if(isset($_SESSION['tendn'])) {
	 unset($_SESSION['tendn']);
	 header('Location: dangnhapadmin.php');
 } else {
	 header('Location: dangnhapadmin.php');
 }
 
?>