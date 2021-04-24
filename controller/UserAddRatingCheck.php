<!-- using DB -->
<?php
	session_start();

	if(!isset($_POST['rating1']) && !isset($_POST['rating2']) && !isset($_POST['rating3']) && !isset($_POST['rating4']) && !isset($_POST['rating5']))
	{
		echo "Please add rating first";
	}
	else
	{
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$count = 0;
		for ($i=1; $i <=5 ; $i++) 
		{ 
			if (isset($_POST['rating'.$i])) 
			{
				$count += 1;
			}
		}
		$bookname = $_POST['bookname'];
		$authorname = $_POST['authorname'];
		$rating = $count;
		$addRating = insertRating($_SESSION['UserName'], $bookname, $authorname, $rating);
		date_default_timezone_set('Asia/Dhaka');
		$date_time = date('Y-m-d H:i:s');
		$activityDetails = array("type" => "Create Rating", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
		$addActivity = insertActivity($activityDetails);
		header('location: ../view/UserShowMyRating.php');
	}
?>