<?php

	$bookname = $_POST['bookname'];
	$authorname = $_POST['authorname'];
	$review = $_POST['review'];

	if($bookname == "" || $authorname == "" ||  $review == "")
	{
		echo "Please fill all fields!";
	}
	else
	{
		session_start();
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$updateReview = array("bookname" => $bookname, "authorname" => $authorname, "review" => $review);
		$check = updateReviewById($_SESSION['sessionReviewId'], $updateReview);
		date_default_timezone_set('Asia/Dhaka');
		$date_time = date('Y-m-d H:i:s');
		$activityDetails = array("type" => "Updated Review", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
		$addActivity = insertActivity($activityDetails);
 		header('location: ../view/UserShowMyReview.php');
	}
?>