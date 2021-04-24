<?php

	$bookname = $_POST['bookname'];
	$authorname = $_POST['authorname'];
	$category = $_POST['category'];
	$post = $_POST['post_content'];

	if($bookname == "" || $authorname == "" || $category == "" || $post == "")
	{
		echo "Please fill all fields!";
	}
	else
	{
		session_start();
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$updatePost = array("bookname" => $bookname, "authorname" => $authorname, "category" => $category, "post" => $post);
		$check = updatePostById($_SESSION['sessionPostId'], $updatePost);
 		header('location: ../view/UserShowMyPost.php');
	}
?>