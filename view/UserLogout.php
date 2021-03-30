<?php 
	session_start();
	unset($_SESSION['flag']);
	unset($_SESSION['profilePic']);
	setcookie('checkLogin', true, time()-86400, "/");
	setcookie('username', $userInfo['user'], time()-86400, "/");
	header('location: ../');
?>