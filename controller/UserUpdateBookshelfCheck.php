<!-- using DB -->
<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	$clearBookshelf = updateBookshelf($_SESSION['UserName'],$_GET['id']);
	header('location: ../view/UserUpdateBookshelf.php');
?>