<?php 
	session_start();
	unset($_SESSION['flag']);
	unset($_SESSION['profilePic']);
	header('location: ../');
?>