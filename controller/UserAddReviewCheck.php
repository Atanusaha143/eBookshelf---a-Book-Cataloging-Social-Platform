<!-- using DB -->
<?php
	session_start();
	if(empty($_POST['reviewText']))
	{
		echo "Please write something";
	}
	else
	{
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$bookname = $_POST['bookname'];
		$authorname = $_POST['authorname'];
		$post = $_POST['reviewText'];
		$addReview = insertReview($_SESSION['UserName'], $bookname, $authorname, $post);
		date_default_timezone_set('Asia/Dhaka');
		$date_time = date('Y-m-d H:i:s');
		$activityDetails = array("type" => "Create Review", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
		$addActivity = insertActivity($activityDetails);
		header('location: ../view/UserHome.php');
	}
?>