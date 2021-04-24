<?php
	session_start();
	if(isset($_COOKIE['checkLogin']))
	{

		require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
		$userList = getAllUser();

		for($i=0; $i<count($userList); $i++) 
		{
			$username = $userList[$i]['username'];

			if($username == $_COOKIE['username'])
			{
				$_SESSION['flag'] = true;
				$_SESSION['Name'] = $userList[$i]['name'];
				$_SESSION['UserName'] = $userList[$i]['username'];
				$_SESSION['Password'] = $userList[$i]['password'];
				$_SESSION['Email'] = $userList[$i]['email'];
				$_SESSION['Gender'] = $userList[$i]['gender'];
				$_SESSION['PhoneNumber'] = $userList[$i]['phone_number'];
				header('location: ../view/UserHome.php');
			} 
		}
	}
?>