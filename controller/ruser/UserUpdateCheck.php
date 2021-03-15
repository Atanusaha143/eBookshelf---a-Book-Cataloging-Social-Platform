<?php
	session_start(); 
	if(isset($_POST['update']))
	{
		if($_POST['currPass'] == $_SESSION['Password'])
		{
				if($_POST['newPass'] != "")
				{
						$file_info = $_FILES['profilePic'];
					 	$file_path = '../resources/'.$file_info['name'];
					 	move_uploaded_file($file_info['tmp_name'], $file_path);

						$_SESSION['Name'] = $_POST['name'];
						$_SESSION['UserName'] = $_POST['user'];
						$_SESSION['Password'] = $_POST['newPass'];
						$_SESSION['Email'] = $_POST['email'];
						$_SESSION['Gender'] = $_POST['gender'];
						$_SESSION['PhoneNumber'] = $_POST['phoneNumber'];
						$_SESSION['profilePic'] = $file_info['name'];
						header('location: ../view/UserEdit.php');
				}
				else
				{
					$file_info = $_FILES['profilePic'];
				 	$file_path = '../resources/'.$file_info['name'];
				 	move_uploaded_file($file_info['tmp_name'], $file_path);

					// $userInfo = [
					// 			 'name' => $_POST['name'],
					// 			 'user' => $_POST['user'],
					// 			 'pass' => $userInfo['pass'],
					// 			 'email' => $_POST['email'],
					// 			 'gender' => $_POST['gender'],
					// 			 'phoneNumber' => $_POST['phoneNumber'],
					// 			 'profilePic' => $file_info['name'],
					// 	  ];
					// $allData = json_encode($userInfo);
					// $userData = fopen("../model/AllUserDetails.json", "w");
					// fwrite($userData, $allData);
					// fclose($userData);

						$_SESSION['Name'] = $_POST['name'];
						$_SESSION['UserName'] = $_POST['user'];
						// $_SESSION['Password'] = $_POST['newPass'];
						$_SESSION['Email'] = $_POST['email'];
						$_SESSION['Gender'] = $_POST['gender'];
						$_SESSION['PhoneNumber'] = $_POST['phoneNumber'];
						$_SESSION['profilePic'] = $file_info['name'];
					header('location: ../view/UserEdit.php');
				}
		}
		else
		{
			echo "Wrong current password";
		}
	}
?>