<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];	
	$remem = $_POST['remember'];

	require_once('../../model/dbConnection.php');
	require_once('../../model/userModel.php');
	session_start();

	// checking with DB
	$userList = getAllUser();
	$flag = false;
	for($i=0; $i<count($userList); $i++) 
	{
		$usernameDB = $userList[$i]['username'];
		$passwordDB = $userList[$i]['password'];
		if($usernameDB == $user && $passwordDB == $pass)
		{
			$flag = true;
			$_SESSION['flag'] = true;
			$_SESSION['Name'] = $userList[$i]['name'];
			$_SESSION['UserName'] = $userList[$i]['username'];
			$_SESSION['Password'] = $userList[$i]['password'];
			$_SESSION['Email'] = $userList[$i]['email'];
			$_SESSION['Gender'] = $userList[$i]['gender'];
			$_SESSION['PhoneNumber'] = $userList[$i]['phone_number'];
			if($remem == "true")
			{
				setcookie('checkLogin', true, time()+86400, "/");
				setcookie('username', $userList[$i]['username'], time()+86400, "/");
			}
			echo "Success";
		}
	}
	if($flag == false)
	{
		echo "Invalid Username and Password!";
	}
?>