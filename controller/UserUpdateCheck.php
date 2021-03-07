<?php 
	if(isset($_POST['update']))
	{
		$userFile = fopen("../model/AllUserDetails.json", "r");
		$userData = fread($userFile, filesize('../model/AllUserDetails.json'));
		$userInfo = json_decode($userData, true);

		if($_POST['currPass'] == $userInfo['pass'])
		{
				if($_POST['newPass'] != "")
				{
					$file_info = $_FILES['profilePic'];
				 	$file_path = '../resources/'.$file_info['name'];
				 	move_uploaded_file($file_info['tmp_name'], $file_path);

					$userInfo = [
								 'name' => $_POST['name'],
								 'user' => $_POST['user'],
								 'pass' => $_POST['newPass'],
								 'email' => $_POST['email'],
								 'gender' => $_POST['gender'],
								 'phoneNumber' => $_POST['phoneNumber'],
								 'profilePic' => $file_info['name'],
						  ];
					$allData = json_encode($userInfo);
					$userData = fopen("../model/AllUserDetails.json", "w");
					fwrite($userData, $allData);
					fclose($userData);
					header('location: ../view/UserEdit.php');
				}
				else
				{
					$file_info = $_FILES['profilePic'];
				 	$file_path = '../resources/'.$file_info['name'];
				 	move_uploaded_file($file_info['tmp_name'], $file_path);

					$userInfo = [
								 'name' => $_POST['name'],
								 'user' => $_POST['user'],
								 'pass' => $userInfo['pass'],
								 'email' => $_POST['email'],
								 'gender' => $_POST['gender'],
								 'phoneNumber' => $_POST['phoneNumber'],
								 'profilePic' => $file_info['name'],
						  ];
					$allData = json_encode($userInfo);
					$userData = fopen("../model/AllUserDetails.json", "w");
					fwrite($userData, $allData);
					fclose($userData);
					header('location: ../view/UserEdit.php');
				}
		}
		else
		{
			echo "Wrong current password";
		}
	}
?>