<?php
	session_start();
	if(isset($_COOKIE['checkLogin']))
	{

		$userFile = fopen("../model/AllUserDetails.json", "r");
		$userData = fread($userFile, filesize('../model/AllUserDetails.json'));
		$userInfo_filter = explode("\n", $userData);

		for($i=0; $i<count($userInfo_filter); $i++) 
		{
			$userInfo = json_decode($userInfo_filter[$i], true);
			$username = $userInfo['user'];

			if($username == $_COOKIE['username'])
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
		}
	}
?>