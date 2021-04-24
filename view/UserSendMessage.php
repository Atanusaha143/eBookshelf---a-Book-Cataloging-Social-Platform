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
<script src="../resources/JS/script.js"></script>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
				<a href="UserReceiveMessage.php" class="linkBtn updateBtn" style="background-color: #999900"> View Received Messages </a>
				&nbsp | &nbsp
				<a href="UserSentMessage.php" class="linkBtn updateBtn"> View Sent Messages </a>
				&nbsp | &nbsp
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
				<form method="POST" action="../controller/UserSendMessageCheck.php" onsubmit="return sendMessageValidation()">
					<fieldset style="width: 50%" class="fieldSetBorder">
					<legend> <b> Send Message </b> </legend>
					<table border="0" width="60%">
						<tr>
							<td>
								<input type="search" id = "s" style="width: 55%; margin-left:7em" name="searchBox" placeholder="Type a name...">
							</td>
							<td>
	<b id="print1" style="color: red"></b></td>
						</tr>
						<tr>
							<td align="center">
								<br>
									Message: <input type="text" id="t" name="message" style="height: 100px;">
								&nbsp <input type="submit" name="send" value="Send" class="submitBtn" style="padding: 5px 20px">
							</td>
						</tr>
						<tr>
							<td align="center">
	<b id="print2" style="color: red"></b></td>
						</tr>
					</table>
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