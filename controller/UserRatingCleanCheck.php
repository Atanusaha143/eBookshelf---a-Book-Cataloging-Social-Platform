<!-- using DB -->
<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	$id = $_GET['id'];
	$bookname = $_GET['bookname'];
	$deleteRating = deleteRatingwById($id);

	date_default_timezone_set('Asia/Dhaka');
	$date_time = date('Y-m-d H:i:s');
	$activityDetails = array("type" => "Deleted Rating", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
	$addActivity = insertActivity($activityDetails);

	header('location: ../view/UserShowMyRating.php');
?>