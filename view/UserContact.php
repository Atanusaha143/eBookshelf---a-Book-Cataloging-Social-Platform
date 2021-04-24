<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Contact";
	include ('header.php');
?>

<?php
	if(isset($_POST['send']))
	{
<<<<<<< HEAD
		if($_POST['message'] != "")
		{
			echo "Your message has been sent to the administration!";
		}
		else
		{
			echo "Please write a message";
		}
	}
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
=======
		echo "Your message has been sent to the administration!";
	}
?>
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
<<<<<<< HEAD
				<form method="POST" action="">
					<fieldset style="width: 50%" class="fieldSetBorder">
					<legend> <b> Contact </b> </legend>
					<table>
=======
				<form method="POST" action="../controller/UserContactCheck.php" onsubmit="return contactValiadtion()">
					<fieldset style="width: 50%" class="fieldSetBorder">
					<legend> <b> Contact </b> </legend>
					<table border="0">
>>>>>>> regular_user_module_final
							<tr>
								<td>
									Message
								</td>
								<td>
<<<<<<< HEAD
										<input type="text" name="message" style="height: 100px;">
=======
										<input type="text" id="Message" name="message" style="height: 100px;">
>>>>>>> regular_user_module_final
								</td>
								<td>
									&nbsp <input type="submit" name="send" value="Send" class="submitBtn" style="padding: 5px 20px">
								</td>
							</tr>
<<<<<<< HEAD
=======
							<tr>
								<td colspan="3" align="center">
									<b id='print' style="color: red"></b>
								</td>
							</tr>
>>>>>>> regular_user_module_final
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