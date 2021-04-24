<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Readers";
	include ('header.php');
?>

	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
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
			<td colspan="3" align="center">
				<br>
				<b class="titleBox">
					All Reader List
				</b>
				<br>
				<br>
				<?php
					
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					$allUser = getAllUser();
					if($allUser)
					{
						echo "<table border = 1 cellspacing = 0 style=' box-shadow: 10px 10px 5px grey'>
						<tr>
							<td style='padding: 20px'>";
						for($i=0; $i <count($allUser) ; $i++) 
						{
							if ($allUser[$i]['username'] != $_SESSION['UserName'])
							{
								echo "<ul>
								<li>
									<a href='UserDetails.php?username={$allUser[$i]['username']}' class='linkBtn'> {$allUser[$i]['name']} </>
								</li>
								</ul>";
							}
						}
						echo "</td>
							  </tr>
							  </table>
							  <br>";
					}
					else
					{
						echo "Oops! No user in this system :(";
					}
				?> 
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