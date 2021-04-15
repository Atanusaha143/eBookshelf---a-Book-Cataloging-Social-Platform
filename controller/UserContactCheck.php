<?php
	if(isset($_POST['send']))
	{
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		session_start();
		date_default_timezone_set('Asia/Dhaka');
		$message = $_POST['message'];
		if (empty($message))
		{
			echo "Please Write Something";
		}
		else
		{
			$time = date('Y-m-d H:i:s');
			$sendMessage = insertContactMessage($_SESSION['UserName'], $message, $time);
			echo "Your message has been sent to the administration!";
		}
	}
?>