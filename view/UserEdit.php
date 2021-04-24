<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Edit Profile";
	include ('header.php');
?>
<<<<<<< HEAD
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
=======
<script src="../resources/JS/script.js"></script>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
>>>>>>> regular_user_module_final
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
<<<<<<< HEAD
				<a href="UserHome.php" class="linkBtn gobackBtn"> Go Back </a>
=======
				<a href="UserProfile.php" class="linkBtn gobackBtn"> Go Back </a>
>>>>>>> regular_user_module_final
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
<<<<<<< HEAD
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<form method="POST" action="../controller/UserUpdateCheck.php" enctype="multipart/form-data">
=======
		<?php
			require_once('../model/dbConnection.php');
			require_once('../model/userModel.php');
			$username = $_SESSION['UserName'];
			$userInfo = getUserByUsername($username);
		?>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<form method="POST" action="../controller/UserUpdateCheck.php" enctype="multipart/form-data" onsubmit="return checkCurrentPassword()">
>>>>>>> regular_user_module_final
						<fieldset style="width: 50%" class="fieldSetBorder">
						<legend> <b> EDIT PROFILE </b> </legend>
						<table>
							<tr>
								<td>
									<b>Name:</b>
								</td>
								<td colspan="2">
<<<<<<< HEAD
									<input type="text" name="name" value="<?php echo $_SESSION['Name']; ?>">
=======
									<input type="text" name="name" value="<?php echo $userInfo['name']; ?>">
>>>>>>> regular_user_module_final
								</td>
								<td rowspan="5">

									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b> Upload Photo</b>
									<br> <br>
									<?php 
<<<<<<< HEAD
										if(isset($_SESSION['profilePic']))
										{
											$path = '../resources/'.$_SESSION['profilePic']; 
											echo '&nbsp &nbsp &nbsp &nbsp <img src="'.$path .'" alt="No Profile Picture" height="200px" />';
										}
										else echo "	&nbsp &nbsp &nbsp &nbsp No Profile Picture";
									 ?>
									<br> <br>
									&nbsp &nbsp &nbsp &nbsp &nbsp <input type="file" name="profilePic">
=======
										$path = '../resources/img/User/'.$userInfo['profile_photo']; 
										echo '&nbsp &nbsp &nbsp &nbsp <img src="'.$path .'" alt="No Profile Picture" height="200px" />';
									 ?>
									<br> <br>
									&nbsp &nbsp &nbsp &nbsp &nbsp <input type="file" name="profilePic" value="$userInfo['profile_photo']">
>>>>>>> regular_user_module_final
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Username:</b>
								</td>
								<td>
<<<<<<< HEAD
									<input type="text" name="user" size="50%" value="<?php echo $_SESSION['UserName']; ?>" >
=======
									<input type="text" name="user" size="50%" value="<?php echo $userInfo['username']; ?>" >
>>>>>>> regular_user_module_final
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Current Password:</b>
								</td>
								<td>
<<<<<<< HEAD
									<input type="text" name="currPass" size="50%" placeholder="To update this field is necessary">
=======
									<input type="text" id="cPass" name="currPass" size="50%" placeholder="To update this field is necessary">
								</td>
							</tr>
							<tr>
								<td colspan="3" align="center">
									<b id="print" style="color: red"></b>	
>>>>>>> regular_user_module_final
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>New Password:</b>
								</td>
								<td>
									<input type="text" name="newPass" size="50%">
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Email:</b>
								</td>
								<td>
<<<<<<< HEAD
									<input type="email" name="email" size="50%" value="<?php echo $_SESSION['Email']; ?>" >
=======
									<input type="email" name="email" size="50%" value="<?php echo $userInfo['email']; ?>" >
>>>>>>> regular_user_module_final
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

													<tr>
								<td>
									<b>Gender:</b>
								</td>
								<td>
									<select name="gender">
<<<<<<< HEAD
										<option value="Male" <?php if($_SESSION['Gender'] == "Male") echo "selected"; ?> > Male </option>
										<option value="Female" <?php if($_SESSION['Gender'] == "Female") echo "selected"; ?>> Female </option>
										<option value="Other" <?php if($_SESSION['Gender'] == "Other") echo "selected"; ?> > Other </option>
=======
										<option value="Male" <?php if($userInfo['gender'] == "Male") echo "selected"; ?> > Male </option>
										<option value="Female" <?php if($userInfo['gender'] == "Female") echo "selected"; ?>> Female </option>
										<option value="Other" <?php if($userInfo['gender'] == "Other") echo "selected"; ?> > Other </option>
>>>>>>> regular_user_module_final
									</select>
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Phone Number:</b>
								</td>
								<td>
<<<<<<< HEAD
									<input type="text" name="phoneNumber" size="50%" value="<?php echo $_SESSION['PhoneNumber']; ?>" >
=======
									<input type="text" name="phoneNumber" size="50%" value="<?php echo $userInfo['phone_number']; ?>" >
>>>>>>> regular_user_module_final
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td align="center" colspan="2">
									<input type="submit" name="update" value="Update" class="submitBtn" style="padding: 5px 20px">
								</td>
							</tr>
						</table>
					</fieldset>
					</form>
				<br> 
			</td>
		</tr>
<<<<<<< HEAD
		<tr height = "50px">
			<td colspan="3">
=======
		<tr height = "50px" style="background-color: #333; color: white;">
			<td colspan="3" style="padding: 25px;">
>>>>>>> regular_user_module_final
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>