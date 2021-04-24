<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Received Messages";
	include ('header.php');
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserSendMessage.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
				<a href="UserSendMessage.php" class="linkBtn gobackBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<br>
					<b class="titleBox">
						<?php echo $_SESSION['Name']; ?>'s Received Messages
					</b>
					<br>
					<br>
					<?php 
						require_once('../model/dbConnection.php');
						require_once('../model/userModel.php');
						$allMessages = getReceiveMessagesByUserName($_SESSION['Name']);
						$flag = true;
						if($allMessages)
						{
							$flag = true;
							for ($i=0; $i <count($allMessages) ; $i++) 
							{ 
									echo "<table border = 5 cellspacing = 0 style='margin: 25px'>
								<tr>
									<th style='padding: 15px'>Username</th>
									<th style='padding: 15px'>Sent Message</th>
								</tr>"; 
								echo "<tr>
										 <td style='padding: 15px'>{$allMessages[$i]['sendername']}</td>
										 <td style='padding: 15px'>{$allMessages[$i]['message']}</td>
									</tr>";
								echo "</table>";
							}
						}
						if($flag==false)
						{
							echo "No activities yet!";
						}
					?>
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