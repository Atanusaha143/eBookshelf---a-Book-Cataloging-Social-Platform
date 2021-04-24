<?php

	session_start();
	require_once('../../model/dbConnection.php');
	require_once('../../model/userModel.php');

	$username = $_SESSION['UserName'];
	$bookname = $_POST['bookname'];
	$authorname = $_POST['authorname'];
	$category = $_POST['category'];
	$content = $_POST['content'];

	$postDetails = array( "bookname" => $bookname, "authorname" => $authorname, "category" => $category, "postcontent" => $content, "username" => $username);

	$insert = insertPost($postDetails);

	if($insert == true)
	{
		echo "Success";
	}
	else
	{
		echo "Failed";
	}
?>