<?php
	session_start();
	if(isset($_POST['login']) && filesize('../model/AllUserDetails.json')>0)
	{

		$userFile = fopen("../model/AllUserDetails.json", "r");
		$userData = fread($userFile, filesize('../model/AllUserDetails.json'));
		$userInfo = json_decode($userData, true);

		$username = $userInfo['user'];
		$password = $userInfo['pass'];

		if($username == "" || $password == "")
		{
			echo "Please enter Username and Passwordd";
		}
		else
		{

			if($username == $_POST['UserName'] && $password == $_POST['Password'])
			{
				$_SESSION['flag'] = true;
				header('location: ../view/UserHome.php');
			}
			else
			{
				echo "Invalid Username and Password!";
			}
		}
	}
	else
	{
		echo "Please register first!";
	}
?>