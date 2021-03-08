<?php
	session_start();
	if(isset($_POST['login']) && filesize('../model/AllUserDetails.json')>0)
	{

		$userFile = fopen("../model/AllUserDetails.json", "r");
		$userData = fread($userFile, filesize('../model/AllUserDetails.json'));
		$userInfo_filter = explode("\n", $userData);

		for($i=0; $i<count($userInfo_filter); $i++) 
		{
				$userInfo = json_decode($userInfo_filter[$i], true);
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
						$_SESSION['Name'] = $userInfo['name'];
						$_SESSION['UserName'] = $userInfo['user'];
						$_SESSION['Password'] = $userInfo['pass'];
						$_SESSION['Email'] = $userInfo['email'];
						$_SESSION['Gender'] = $userInfo['gender'];
						$_SESSION['PhoneNumber'] = $userInfo['phoneNumber'];
						header('location: ../view/UserHome.php');
					}
					else
					{
						echo "Invalid Username and Password!";
					}
				} 
		}
	}
	else
	{
		echo "Please register first!";
	}
?>