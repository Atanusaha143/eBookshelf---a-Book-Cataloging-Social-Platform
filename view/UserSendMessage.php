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
<<<<<<< HEAD

<?php
	if(isset($_POST['send']))
	{
		if($_POST['message'] != "")
		{
			echo "Your message has been sent to the desired person!";
		}
		else
		{
			echo "Please write a message";
		}
	}
	if(isset($_POST['search']))
	{
		if($_POST['searchBox'] == "")
		{
			echo "Please write someone name into the search box!";
		}
		else
		{
			echo "Searched";
		}
	}
?>
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
=======
				<a href="UserReceiveMessage.php" class="linkBtn updateBtn" style="background-color: #999900"> View Received Messages </a>
				&nbsp | &nbsp
				<a href="UserSentMessage.php" class="linkBtn updateBtn"> View Sent Messages </a>
				&nbsp | &nbsp
>>>>>>> regular_user_module_final
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
=======
				<form method="POST" action="../controller/UserSendMessageCheck.php" onsubmit="return sendMessageValidation()">
>>>>>>> regular_user_module_final
					<fieldset style="width: 50%" class="fieldSetBorder">
					<legend> <b> Send Message </b> </legend>
					<table border="0" width="60%">
						<tr>
							<td>
<<<<<<< HEAD
								<label for="search" style="margin-left: 4em"></label>
								<input id="search" type="search" style="width: 55%" name="searchBox" placeholder=" search someone...">
								<input type="submit" name="search" value="Search" class="submitBtn" style="padding: 5px 20px">
							</td>
=======
								<input type="search" id = "s" style="width: 55%; margin-left:7em" name="searchBox" placeholder="Type a name...">
							</td>
							<td>
	<b id="print1" style="color: red"></b></td>
>>>>>>> regular_user_module_final
						</tr>
						<tr>
							<td align="center">
								<br>
<<<<<<< HEAD
								<label for="message" style="margin-left: 1em"> Write Message </label>
									<input  id="message" type="text" name="message" style="height: 100px;">
								&nbsp <input id="message" type="submit" name="send" value="Send" class="submitBtn" style="padding: 5px 20px">
							</td>
						</tr>
=======
									Message: <input type="text" id="t" name="message" style="height: 100px;">
								&nbsp <input type="submit" name="send" value="Send" class="submitBtn" style="padding: 5px 20px">
							</td>
						</tr>
						<tr>
							<td align="center">
	<b id="print2" style="color: red"></b></td>
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