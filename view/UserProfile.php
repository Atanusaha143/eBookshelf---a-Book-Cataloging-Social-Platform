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
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left"> </a>
				&nbsp | &nbsp
				<a href="UserLogout.php"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
				<fieldset style="width: 50%">
					<legend> <b> PROFILE </b> </legend>
					<table>
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
								<img src="user.png" alt="No Profile Picture" width="150" height="100">
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
							<td> 
								<center> <a href="UserEdit.php"> Edit Profile </a> </center>
							</td>
						</tr>
					</table>
				</fieldset>
				<br> 
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> Copyright &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>