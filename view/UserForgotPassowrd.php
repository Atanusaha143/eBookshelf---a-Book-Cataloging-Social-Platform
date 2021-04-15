<!-- Using Json -->
<?php
	/*$title = "Forgot Password";
	include ('header.php');
?>

<?php
	if(isset($_POST['send']))
	{
		if($_POST['Email'] == "")
		{
			echo "Please enter your registered email!";
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
					if(isset($userInfo['email']) && $userInfo['email'] == $_POST['Email'])
					{
						echo "Please check email to recover password :)";
						$flag = true;
						break;
					}
			}
			if($flag == false)
			{
				echo "Your email is not registered! :(";
			}
		}
	}
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="../"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
				<a href="../" class="linkBtn gobackBtn"> Go Back </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<form method="POST" action="">
						<fieldset style="width: 40%" class="fieldSetBorder">
						<legend>
							<b> Recover Password </b>
						</legend>
						<table>
							<tr>
								<td>
									Email
								</td>
								<td>
									<input type="email" name="Email" style="width: 150%"> 
								</td>
							</tr>
						</table>
						<center>
							<input type="submit" name="send" value="Send" style="margin-left: 5em; padding: 5px 20px" class="submitBtn" >
						</center>
					</fieldset>
					</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px" style="background-color: #333; color: white;">
			<td colspan="3" style="padding: 25px;">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');*/
?>


<!-- Using DB -->
<?php
	$title = "Forgot Password";
	include ('header.php');
?>

<?php
	if(isset($_POST['send']))
	{
		if($_POST['Email'] == "")
		{
			echo "Please enter your registered email!";
		}
		else
		{
			require_once('../model/dbConnection.php');
			require_once('../model/userModel.php');
			$userDetails = getAllUser();
			$flag = false;
			for($i=0; $i<count($userDetails); $i++) 
			{
					$email = $userDetails[$i]['email'];
					if($email == $_POST['Email'])
					{
						echo "Please check email to recover password :)";
						$flag = true;
						break;
					}
			}
			if($flag == false)
			{
				echo "Your email is not registered! :(";
			}
		}
	}
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="../"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
				<a href="../" class="linkBtn gobackBtn"> Go Back </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<form method="POST" action="">
						<fieldset style="width: 40%" class="fieldSetBorder">
						<legend>
							<b> Recover Password </b>
						</legend>
						<table>
							<tr>
								<td>
									Email
								</td>
								<td>
									<input type="email" name="Email" style="width: 150%"> 
								</td>
							</tr>
						</table>
						<center>
							<input type="submit" name="send" value="Send" style="margin-left: 5em; padding: 5px 20px" class="submitBtn" >
						</center>
					</fieldset>
					</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px" style="background-color: #333; color: white;">
			<td colspan="3" style="padding: 25px;">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>