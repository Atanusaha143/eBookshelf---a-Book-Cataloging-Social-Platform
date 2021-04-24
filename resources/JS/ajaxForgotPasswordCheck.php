<?php

	$email = $_POST['email'];
	require_once('../../model/dbConnection.php');
	require_once('../../model/userModel.php');
	session_start();

	// checking with DB
	$userList = getAllUser();
	$flag = false;
	for($i=0; $i<count($userList); $i++) 
	{
		$emailDB = $userList[$i]['email'];
		if($emailDB == $email)
		{
			echo "Success";
			$flag = true;
		}
	}
	if($flag == false)
	{
		echo "Failed";
	}
?>