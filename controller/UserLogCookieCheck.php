<?php
	session_start();
	if(isset($_COOKIE['checkLogin']))
	{

<<<<<<< HEAD
		$userFile = fopen("../model/AllUserDetails.json", "r");
		$userData = fread($userFile, filesize('../model/AllUserDetails.json'));
		$userInfo_filter = explode("\n", $userData);

		for($i=0; $i<count($userInfo_filter); $i++) 
		{
			$userInfo = json_decode($userInfo_filter[$i], true);
			$username = $userInfo['user'];
=======
		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$userList = getAllUser();

		for($i=0; $i<count($userList); $i++) 
		{
			$username = $userList[$i]['username'];
>>>>>>> regular_user_module_final

			if($username == $_COOKIE['username'])
			{
				$_SESSION['flag'] = true;
<<<<<<< HEAD
				$_SESSION['Name'] = $userInfo['name'];
				$_SESSION['UserName'] = $userInfo['user'];
				$_SESSION['Password'] = $userInfo['pass'];
				$_SESSION['Email'] = $userInfo['email'];
				$_SESSION['Gender'] = $userInfo['gender'];
				$_SESSION['PhoneNumber'] = $userInfo['phoneNumber'];
=======
				$_SESSION['Name'] = $userList[$i]['name'];
				$_SESSION['UserName'] = $userList[$i]['username'];
				$_SESSION['Password'] = $userList[$i]['password'];
				$_SESSION['Email'] = $userList[$i]['email'];
				$_SESSION['Gender'] = $userList[$i]['gender'];
				$_SESSION['PhoneNumber'] = $userList[$i]['phone_number'];
>>>>>>> regular_user_module_final
				header('location: ../view/UserHome.php');
			} 
		}
	}
?>