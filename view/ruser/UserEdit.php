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
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
				<a href="UserProfile.php" class="linkBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<form method="POST" action="../controller/UserUpdateCheck.php" enctype="multipart/form-data">
						<fieldset style="width: 50%">
						<legend> <b> EDIT PROFILE </b> </legend>
						<table>
							<tr>
								<td>
									<b>Name:</b>
								</td>
								<td colspan="2">
									<input type="text" name="name" value="<?php echo $_SESSION['Name']; ?>">
								</td>
								<td rowspan="5">

									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b> Upload Photo</b>
									<br> <br>
									<?php 
										if(isset($_SESSION['profilePic']))
										{
											$path = '../resources/'.$_SESSION['profilePic']; 
											echo '&nbsp &nbsp &nbsp &nbsp <img src="'.$path .'" alt="No Profile Picture" height="200px" />';
										}
										else echo "	&nbsp &nbsp &nbsp &nbsp No Profile Picture";
									 ?>
									<br> <br>
									&nbsp &nbsp &nbsp &nbsp &nbsp <input type="file" name="profilePic">
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Username:</b>
								</td>
								<td>
									<input type="text" name="user" size="50%" value="<?php echo $_SESSION['UserName']; ?>" >
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Current Password:</b>
								</td>
								<td>
									<input type="text" name="currPass" size="50%" placeholder="To update this field is necessary">
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
									<input type="email" name="email" size="50%" value="<?php echo $_SESSION['Email']; ?>" >
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

													<tr>
								<td>
									<b>Gender:</b>
								</td>
								<td>
									<select name="gender">
										<option value="Male" <?php if($_SESSION['Gender'] == "Male") echo "selected"; ?> > Male </option>
										<option value="Female" <?php if($_SESSION['Gender'] == "Female") echo "selected"; ?>> Female </option>
										<option value="Other" <?php if($_SESSION['Gender'] == "Other") echo "selected"; ?> > Other </option>
									</select>
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Phone Number:</b>
								</td>
								<td>
									<input type="text" name="phoneNumber" size="50%" value="<?php echo $_SESSION['PhoneNumber']; ?>" >
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td align="center">
									<input type="submit" name="update" value="Update" class="submitBtn">
								</td>
							</tr>
						</table>
					</fieldset>
					</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>