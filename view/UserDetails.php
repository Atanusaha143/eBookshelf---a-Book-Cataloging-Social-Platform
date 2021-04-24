<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Book List";
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
				<a href="UserName.php" class="linkBtn gobackBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="3" align="center">
				<br>
				<br>
				<br>
				<?php
					
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					$username = $_GET['username'];
					$userDetails = getUserByUsername($username);
					$userBookshelf = getBookshelfByUsername($username);
					echo "<center>
						<b class='titleBox'>Personal Information</b>
					</center>
					<br>
					<br>";
					if($userDetails)
					{
						echo "
						<table border = 1 cellspacing = 0 style='width:30%'>
						<tr>
							<td>
								&nbsp <b>Name:</b> {$userDetails['name']} <br> <br>
								&nbsp <b>Email:</b> {$userDetails['email']} <br> <br>
								&nbsp <b>Gender:</b> {$userDetails['gender']} <br> <br>
							</td>
							<td colspan='2'> <img src='../resources/img/User/{$userDetails['profile_photo']}' alt='No Profile Picture' height='150px' width='150px'/></td>
						</tr>
					  </table>
					  <br>
					  <br>
					  <center>
						<b class='titleBox'>Bookshelf List</b>
					   </center>
					   <br>";
					   echo "<fieldset class='fieldSetBorder' style='width:500px'>
							<table border = 0 cellspacing = 0 style=''>";
					   for ($i=0; $i <count($userBookshelf) ; $i++) 
					   {
						 echo "
						 	<tr>
								<td>
									<ul>
										<li>
											{$userBookshelf[$i]['bookname']}
										</li>
									</ul> 
								</td>
							</tr>";
					   }
					   echo "</table> </fieldset>
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