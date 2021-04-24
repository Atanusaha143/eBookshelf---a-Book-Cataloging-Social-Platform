<!-- using Json -->
<!-- <?php
	/*session_start();
	if(isset($_POST['login']) && filesize('../model/AllUserDetails.json')>0)
	{
		if($_POST['UserName'] == "" || $_POST['Password'] == "")
		{
			echo "Please enter Username and Passwordd";
		}
		else
		{
			$userFile = fopen("../model/AllUserDetails.json", "r");
			$userData = fread($userFile, filesize('../model/AllUserDetails.json'));
			$userInfo_filter = explode("\n", $userData);
			$flag = false;
			for($i=0; $i<count($userInfo_filter); $i++) 
			{
				$userInfo = json_decode($userInfo_filter[$i], true);
				if(isset($userInfo['user']) && isset($userInfo['pass']) && $userInfo['user'] == $_POST['UserName'] && $userInfo['pass'] == $_POST['Password'])
				{
					$flag = true;
					$_SESSION['flag'] = true;
					$_SESSION['Name'] = $userInfo['name'];
					$_SESSION['UserName'] = $userInfo['user'];
					$_SESSION['Password'] = $userInfo['pass'];
					$_SESSION['Email'] = $userInfo['email'];
					$_SESSION['Gender'] = $userInfo['gender'];
					$_SESSION['PhoneNumber'] = $userInfo['phoneNumber'];
					if(isset($_POST['rememberMe']))
					{
						setcookie('checkLogin', true, time()+15, "/");
						setcookie('username', $userInfo['user'], time()+15, "/");
					}
					header('location: ../view/UserHome.php');
				}
			}
			if($flag == false)
			{
				echo "Invalid Username and Password!";
			}
		}
	}
	else
	{
		echo "Please register first!";
	}*/
?> -->



<!-- using DB -->
<?php
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	session_start();
	if(isset($_POST['login']))
	{
		if($_POST['UserName'] == "" || $_POST['Password'] == "") //field checking
		{
			echo "Please enter Username and Passwordd";
		}
		else
		{
			// checking with DB
			$userList = getAllUser();
			$flag = false;
			for($i=0; $i<count($userList); $i++) 
			{
				$usernameDB = $userList[$i]['username'];
				$passwordDB = $userList[$i]['password'];
				$statusDB = $userList[$i]['status'];
				if($usernameDB == $_POST['UserName'] && $passwordDB == $_POST['Password'])
				{
					$flag = true;
					$_SESSION['flag'] = true;
					$_SESSION['Name'] = $userList[$i]['name'];
					$_SESSION['UserName'] = $userList[$i]['username'];
					$_SESSION['Password'] = $userList[$i]['password'];
					$_SESSION['Email'] = $userList[$i]['email'];
					$_SESSION['Gender'] = $userList[$i]['gender'];
					$_SESSION['PhoneNumber'] = $userList[$i]['phone_number'];
					if(isset($_POST['rememberMe']))
					{
						setcookie('checkLogin', true, time()+86400, "/");
						setcookie('username', $userList[$i]['username'], time()+86400, "/");
					}
					header('location: ../view/UserHome.php');
				}
			}
			if($flag == false)
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