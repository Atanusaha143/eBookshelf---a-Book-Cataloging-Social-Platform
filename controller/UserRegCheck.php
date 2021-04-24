 <!-- using Json -->
<!-- <?php
	/*session_start();
	if(isset($_POST['registration']))
	{

		$name = $_POST['Name'];
		$username = $_POST['UserName'];
		$password = $_POST['Password'];
		$repass = $_POST['rPassword'];
		$email = $_POST['Email'];
		$gender = $_POST['Gender'];
		$phoneNumber = $_POST['PhoneNumber'];
		$flag = false;

		$userFile = fopen("../model/AllUserDetails.json", "r");
		$userData = fread($userFile, filesize('../model/AllUserDetails.json'));
		$userInfo_filter = explode("\n", $userData);

		for($i=0; $i<count($userInfo_filter); $i++) 
		{
			$userInfo = json_decode($userInfo_filter[$i], true);
			if(!empty($username) && $userInfo['user'] == $username)
			{
				echo "Username already exist!";
				$flag = true;
				break;
			}
			elseif(!empty($email) && $userInfo['email'] == $email)
			{
				echo "Email already exist!";
				$flag = true;
				break;
			}
			elseif(!empty($phoneNumber) && $userInfo['phoneNumber'] == $phoneNumber)
			{
				echo "Phone Number already exist!";
				$flag = true;
				break;
			}
		}

		if($flag == false && $username == "" || $email == "" || $password == "" || $repass == "" || $gender=="" || $phoneNumber=="")
		{
			echo "Please fill all the field";
		}
		elseif($flag == false)
		{
			if($flag == false && strlen($username)<3)  { echo "Username must contain at least 3 charecters"; $flag = true; }
			else if($flag == false && strlen($password) <8) { echo "Password must contain at least 8 charecters"; $flag = true; }
			else if($flag == false && $password !== $repass) { echo "Password and Confirm Password mismtach"; $flag = true; }
			elseif($flag == false && strlen($phoneNumber)<11)
			{
				echo "Phone number must contain 11 digits";
				$flag = true;
			}
			else if($flag == false && strlen($phoneNumber)>=11)
			{
				for ($i=0; $i < strlen($phoneNumber); $i++) 
				{ 
					if($phoneNumber[$i]=='0' || $phoneNumber[$i]=='1' || $phoneNumber[$i]=='2' || $phoneNumber[$i]=='3' || $phoneNumber[$i]=='4' || $phoneNumber[$i]=='5' || $phoneNumber[$i]=='6' || $phoneNumber[$i]=='7' || $phoneNumber[$i]=='8' || $phoneNumber[$i]=='9') { continue; }
					else { echo "Phone Number must be between 0 - 9";  $flag = true; break; }
				}
			}
			if($flag == false)
			{

				$userInfo = array(
							 	 'name' => $name,
								 'user' => $username,
								 'pass' => $password,
								 'email' => $email,
								 'gender' => $gender,
								 'phoneNumber' => $phoneNumber,
				      		);

				$allData = json_encode($userInfo);
				$userData = fopen("../model/AllUserDetails.json", "a");
				fwrite($userData, $allData."\r\n");
				fclose($userData);
				$_SESSION['flag'] = true;
				$_SESSION['Name'] = $userInfo['name'];
				$_SESSION['UserName'] = $userInfo['user'];
				$_SESSION['Password'] = $userInfo['pass'];
				$_SESSION['Email'] = $userInfo['email'];
				$_SESSION['Gender'] = $userInfo['gender'];
				$_SESSION['PhoneNumber'] = $userInfo['phoneNumber'];
				setcookie('checkLogin', true, time()+86400, "/");
				setcookie('username', $userInfo['user'], time()+86400, "/");
				header('location: ../view/UserHome.php');
			}
		}
	}*/
?> -->


<!-- using DB -->
<?php
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	session_start();
	if(isset($_POST['registration']))
	{

		$name = $_POST['Name'];
		$username = $_POST['UserName'];
		$password = $_POST['Password'];
		$repass = $_POST['rPassword'];
		$email = $_POST['Email'];
		$gender = $_POST['Gender'];
		$phoneNumber = $_POST['PhoneNumber'];
		$flag = false;

		$userList = getAllUser();
		for($i = 0; $i < count($userList); $i++) //Checking with DB
		{
			$usernameDB = $userList[$i]['username'];
			$emailDB = $userList[$i]['email'];
			$phoneNumberDB = $userList[$i]['phone_number'];
			if(!empty($username) && $usernameDB == $username)
			{
				echo "Username already exist!";
				$flag = true;
				break;
			}
			elseif(!empty($email) && $emailDB == $email)
			{
				echo "Email already exist!";
				$flag = true;
				break;
			}
			elseif(!empty($phoneNumber) && $phoneNumberDB == $phoneNumber)
			{
				echo "Phone Number already exist!";
				$flag = true;
				break;
			}
			
		}

		// Checking with field
		if($flag == false && $username == "" || $email == "" || $password == "" || $repass == "" || $gender=="" || $phoneNumber=="")
		{
			echo "Please fill all the field";
		}
		elseif($flag == false)
		{
			for ($i=0; $i <strlen($name) ; $i++) 
			{ 
				if (is_numeric($name[$i])) 
				{
					echo "Name must not contain other than char";
					$flag = true;
					break;
				}
			}
			$at = 0;
			$dot = 0;
			for ($i=0; $i <strlen($email) ; $i++) 
			{ 
				if ($email[$i] == '@') 
				{
					$at++;
				}
				else if ($email[$i] == '.')
				{
					$dot++;
				}
			}
			if($flag == false && $at != 1 || $dot == 0) { echo "Email is not in proper format"; $flag = true; }
			else if($flag == false && strlen($username)<3)  { echo "Username must contain at least 3 charecters"; $flag = true; }
			else if($flag == false && strlen($password) <8) { echo "Password must contain at least 8 charecters"; $flag = true; }
			else if($flag == false && $password !== $repass) { echo "Password and Confirm Password mismtach"; $flag = true; }
			else if($flag == false && strlen($phoneNumber)<11)
			{
				echo "Phone number must contain 11 digits";
				$flag = true;
			}
			else if($flag == false && strlen($phoneNumber)>=11)
			{
				for ($i=0; $i < strlen($phoneNumber); $i++) 
				{ 
					if($phoneNumber[$i]=='0' || $phoneNumber[$i]=='1' || $phoneNumber[$i]=='2' || $phoneNumber[$i]=='3' || $phoneNumber[$i]=='4' || $phoneNumber[$i]=='5' || $phoneNumber[$i]=='6' || $phoneNumber[$i]=='7' || $phoneNumber[$i]=='8' || $phoneNumber[$i]=='9') { continue; }
					else { echo "Phone Number must be between 0 - 9";  $flag = true; break; }
				}
			}
			if($flag == false)
			{

				$userDetails = array(
							 	 'name' => $name,
							 	 'email' => $email,
								 'username' => $username,
								 'password' => $password,
								 'phone_number' => $phoneNumber,
								 'gender' => $gender,
				      		);
				$_SESSION['flag'] = true;
				$_SESSION['Name'] = $name;
				$_SESSION['UserName'] = $username;
				$_SESSION['Password'] = $password;
				$_SESSION['Email'] = $email;
				$_SESSION['Gender'] = $gender;
				$_SESSION['PhoneNumber'] = $phoneNumber;
				$check = insertUser($userDetails);

				header('location: ../view/UserHome.php');
			}
		}
	}
?>