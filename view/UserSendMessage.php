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
				<a href="UserHome.php" class="linkBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="">
					<fieldset style="width: 50%">
					<legend> <b> Send Message </b> </legend>
					<table>
						<tr>
							<td>
								<label for="search" style="margin-left: 4em"></label>
								<input id="search" type="search" style="width: 55%" name="searchBox" placeholder=" search someone...">
								<input type="submit" name="search" value="Search" class="submitBtn">
							</td>
						</tr>
						<tr>
							<td>
								<br>
								<label for="message" style="margin-left: 1em"> Write Message </label>
									<input  id="message" type="text" name="message" style="height: 100px;">
								&nbsp <input id="message" type="submit" name="send" value="Send" class="submitBtn">
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