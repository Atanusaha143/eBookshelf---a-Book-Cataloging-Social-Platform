<?php

	$bookname = $_POST['bookname'];
	$authorname = $_POST['authorname'];
	$category = $_POST['Category'];
	$condition = $_POST['condition'];
	$price = $_POST['price'];

	if($bookname == "" || $authorname == "" ||  $category == "" || empty($condition) || empty($price))
	{
		echo "Please fill all fields!";
	}
	else
	{
		$filename = $_FILES["profilePic"]["name"];
		$tempname = $_FILES["profilePic"]["tmp_name"];
    	$folder = "../resources/img/Sell/".$filename;

		session_start();
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$updateSell = array("bookname" => $bookname, "authorname" => $authorname, "category" => $category, "condition" => $condition, "price" => $price, "photo" => $filename);

		$check = updateSellPostById($_SESSION['sessionSellId'], $updateSell);
		
		date_default_timezone_set('Asia/Dhaka');
		$date_time = date('Y-m-d H:i:s');
		$activityDetails = array("type" => "Updated Selling Post", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
		$addActivity = insertActivity($activityDetails);

		move_uploaded_file($tempname, $folder);
 		header('location: ../view/UserShowMySellingPost.php');
	}
?>