<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
	else
	{
		header('location: ../view/UserHome.php');
	}
?>