<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Profile";
	include ('header.php');
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
				<a href="UserHome.php" class="linkBtn gobackBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
				<fieldset style="width: 50%" class="fieldSetBorder">
					<legend> <b> PROFILE </b> </legend>
					<table border="0">
						<tr>
							<td>
								<b>Name:</b>
							</td>
							<td colspan="2">
								<?php echo $_SESSION['Name']; ?>
							</td>
							<td rowspan="5">
								&nbsp &nbsp &nbsp &nbsp &nbsp
							</td>
							<td>
								<?php 
									if(isset($_SESSION['profilePic']))
									{
										$path = '../resources/'.$_SESSION['profilePic']; 
										echo '&nbsp &nbsp &nbsp &nbsp <img src="'.$path .'" alt="No Profile Picture" height="200px" />';
									}
									else echo "	&nbsp &nbsp &nbsp &nbsp No Profile Picture";
								?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>

						<tr>
							<td>
								<b>Username:</b>
							</td>
							<td colspan="2">
								<?php echo $_SESSION['UserName']; ?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>

						<tr>
							<td>
								<b>Email:</b>
							</td>
							<td>
								<?php echo $_SESSION['Email']; ?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>

						<tr>
							<td>
								<b>Phone Number:</b>
							</td>
							<td>
								<?php echo $_SESSION['PhoneNumber']; ?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>

						<tr>
							<td>
								<b>Gender:</b>
							</td>
							<td>
								<?php echo $_SESSION['Gender']; ?>
							</td>
						</tr>

						<tr> <td colspan="4"> <hr> </td> </tr>
						<tr>
							<td colspan="2">  
								<center> <a href="UserEdit.php" class="linkBtn submitBtn" style="padding: 5px 20px"> Edit Profile </a> </center>
							</td>
						</tr>
					</table>
				</fieldset>
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