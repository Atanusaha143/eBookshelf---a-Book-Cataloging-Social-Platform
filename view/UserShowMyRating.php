<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Home";
	include ('header.php');
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left"  width="100%" height="150"> </a>
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
				<a href="UserAddRating.php" class="linkBtn gobackBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<center>
				<b class="titleBox"> <?php echo $_SESSION['Name']; ?>'s Rating </b>
				</center>
				<br>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
				<?php
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					$ratings = getRatingByUserName($_SESSION['UserName']);
					for ($i=0; $i <count($ratings) ; $i++) 
					{ 
						echo "
						<fieldset style='width:40%' class='fieldSetBorder'>
						<table border = 0 cellspacing = 0 align=center>
						<tr>
						<br>
							<td><b>Bookname: &nbsp<b/></td>
							<td>
								{$ratings[$i]['bookname']}
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr>
							<td><b>Author:</b></td>
							<td>
								{$ratings[$i]['authorname']}
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr>
							<td><b>Rating:</b></td>
							<td>
								{$ratings[$i]['rating']} 
							</td>
						</tr>
						<tr><td><br></td></tr>
						</table>
						<br>
						<a href='UserUpdateMyRating.php?id={$ratings[$i]['id']}' class='linkBtn updateBtn'> Update Rating</a>
						<a href='../controller/UserRatingCleanCheck.php?id={$ratings[$i]['id']}&bookname={$ratings[$i]['bookname']}' class='linkBtn logoutBtn'> Delete Rating</a>
						</fieldset>
						</form>";
					}
					
					if(!$ratings)
					{
						echo "No ratings to show! :(";
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