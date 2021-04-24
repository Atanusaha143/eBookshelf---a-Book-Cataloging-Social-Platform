<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];	

	require_once('../../model/dbConnection.php');
	require_once('../../model/userModel.php');
	session_start();

	$flag = false;
	$userList = getAllUser();
	for($i = 0; $i < count($userList); $i++) //Checking with DB
	{
		$usernameDB = $userList[$i]['username'];
		$emailDB = $userList[$i]['email'];
		$phoneNumberDB = $userList[$i]['phone_number'];
		if($usernameDB == $user)
		{
			echo " [Username already exist!] ";
			$flag = true;
			break;
		}
		elseif($emailDB == $email)
		{
			echo " [Email already exist!] ";
			$flag = true;
			break;
		}
		elseif($phoneNumberDB == $phone)
		{
			echo " [Phone Number already exist!] ";
			$flag = true;
			break;
		}
		
	}
	if($flag == false)
	{
		$userDetails = array(
							 	 'name' => $name,
							 	 'email' => $email,
								 'username' => $user,
								 'password' => $pass,
								 'phone_number' => $phone,
								 'gender' => $gender,
				      		);

		$_SESSION['flag'] = true;
		$_SESSION['Name'] = $name;
		$_SESSION['UserName'] = $user;
		$_SESSION['Password'] = $pass;
		$_SESSION['Email'] = $email;
		$_SESSION['Gender'] = $gender;
		$_SESSION['PhoneNumber'] = $phone;
		$check = insertUser($userDetails);
		echo "Success";
	}
?>