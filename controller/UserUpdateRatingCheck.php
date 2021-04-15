<?php

	$bookname = $_POST['bookname'];
	$authorname = $_POST['authorname'];
	$rating = $_POST['rating'];

	if($rating == "")
	{
		echo "Please fill all fields!";
	}
	else
	{
		session_start();
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$updateRating = array("bookname" => $bookname, "authorname" => $authorname, "rating" => $rating);
		$check = updateRatingById($_SESSION['sessionRatingId'], $updateRating);
		date_default_timezone_set('Asia/Dhaka');
		$date_time = date('Y-m-d H:i:s');
		$activityDetails = array("type" => "Updated Rating", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
		$addActivity = insertActivity($activityDetails);
 		header('location: ../view/UserShowMyRating.php');
	}
?>