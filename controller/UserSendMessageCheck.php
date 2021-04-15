<?php
	if($_POST['searchBox'] == "")
	{
		echo "Please write a name into the search box!";
	}
	else
	{
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$user = getUserByName($_POST['searchBox']);
		if($user)
		{
			if($_POST['message'] == "")
			{
				echo "Please type something";
			}
			else
			{
				session_start();
				$username = $_SESSION['UserName'];
				$receivername = $_POST['searchBox'];
				$message = $_POST['message'];

				$send = insertSentMessage($username,$receivername,$message);

				$username1 = $_POST['searchBox'];
				$sendername = $_SESSION['UserName'];
				$message2 = $_POST['message'];

				$receive = insertReceiveMessage($username1,$sendername,$message2);
				
				if($send && $receive)
				{
					echo "Message Sent!";
				}
				else
				{
					echo "Something bad happend!";
				}
			}
		}
		else
		{
			echo "User not found!";
		}
	}
?>