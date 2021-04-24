<!-- using DB -->
<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	$id = $_GET['id'];
	$deletePost = deletePostById($id);
	header('location: ../view/UserShowMyPost.php');
?>