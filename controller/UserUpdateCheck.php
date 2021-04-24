<<<<<<< HEAD
<?php
	session_start(); 
=======
<!-- using Json -->
<!-- <?php
	/*session_start(); 
>>>>>>> regular_user_module_final
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

						$_SESSION['Name'] = $_POST['name'];
						$_SESSION['UserName'] = $_POST['user'];
						$_SESSION['Email'] = $_POST['email'];
						$_SESSION['Gender'] = $_POST['gender'];
						$_SESSION['PhoneNumber'] = $_POST['phoneNumber'];
						$_SESSION['profilePic'] = $file_info['name'];
					header('location: ../view/UserProfile.php');
				}
		}
		else
		{
			echo "Wrong current password";
		}
<<<<<<< HEAD
=======
	}*/
?> -->


<!-- using DB -->
<?php
	/*session_start(); 
	if(isset($_POST['update']))
	{
		if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['user']) || empty($_POST['phoneNumber']) || empty($_POST['gender'])) 
		{
			echo "Necessary fields must be filled out";
		}
		else if($_POST['currPass'] == $_SESSION['Password'])
		{
			$file_info = $_FILES['profilePic'];
		 	$file_path = '../resources/'.$file_info['name'];
		 	move_uploaded_file($file_info['tmp_name'], $file_path);

			require_once('../model/dbConnection.php');
			require_once('../model/userModel.php');
			$userDetails = getUserByUsername($_SESSION['UserName']);
			if(empty($_POST['newPass']))
			{
				$_POST['newPass'] = $_SESSION['Password'];
			}

			$updateDetails = array(
							 	 'name' => $_POST['name'],
							 	 'email' => $_POST['email'],
								 'username' => $_POST['user'],
								 'password' => $_POST['newPass'],
								 'phone_number' => $_POST['phoneNumber'],
								 'gender' => $_POST['gender']
				      		);
			$updateUser = updateUser($updateDetails,$userDetails['id']);

			$_SESSION['Name'] = $_POST['name'];
			$_SESSION['UserName'] = $_POST['user'];
			$_SESSION['Password'] = $_POST['newPass'];
			$_SESSION['Email'] = $_POST['email'];
			$_SESSION['Gender'] = $_POST['gender'];
			$_SESSION['PhoneNumber'] = $_POST['phoneNumber'];
			$_SESSION['profilePic'] = $file_info['name'];
			header('location: ../view/UserProfile.php');
		}
		else
		{
			echo "Wrong current password";
		}
	}*/
?>


<!-- using DB -->
<?php
	session_start(); 
	if(isset($_POST['update']))
	{
		if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['user']) || empty($_POST['phoneNumber']) || empty($_POST['gender'])) 
		{
			echo "Necessary fields must be filled out";
		}
		else if($_POST['currPass'] == $_SESSION['Password'])
		{

			$filename = $_FILES["profilePic"]["name"];
			$tempname = $_FILES["profilePic"]["tmp_name"];
        	$folder = "../resources/img/User/".$filename;


			require_once('../model/dbConnection.php');
			require_once('../model/userModel.php');
			$userDetails = getUserByUsername($_SESSION['UserName']);
			if(empty($_POST['newPass']))
			{
				$_POST['newPass'] = $_SESSION['Password'];
			}

			$updateDetails = array(
							 	 'name' => $_POST['name'],
							 	 'email' => $_POST['email'],
								 'username' => $_POST['user'],
								 'password' => $_POST['newPass'],
								 'phone_number' => $_POST['phoneNumber'],
								 'gender' => $_POST['gender'],
								 'dp' => $filename
				      		);
			$updateUser = updateUser($updateDetails,$userDetails['id']);

			$_SESSION['Name'] = $_POST['name'];
			$_SESSION['UserName'] = $_POST['user'];
			$_SESSION['Password'] = $_POST['newPass'];
			$_SESSION['Email'] = $_POST['email'];
			$_SESSION['Gender'] = $_POST['gender'];
			$_SESSION['PhoneNumber'] = $_POST['phoneNumber'];
			$_SESSION['profilePic'] = $filename;
			move_uploaded_file($tempname, $folder);
			header('location: ../view/UserProfile.php');
		}
		else
		{
			echo "Wrong current password";
		}
>>>>>>> regular_user_module_final
	}
?>