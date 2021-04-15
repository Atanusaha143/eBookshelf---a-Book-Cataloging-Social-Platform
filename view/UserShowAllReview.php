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
				<a href="UserAddReview.php" class="linkBtn gobackBtn"> Go Back </a>
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
				<b class="titleBox"> All Reviews</b>
				</center>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<form method="post" action="">
					<label style="margin-left: 37em">  </label>
					<input type="Search" name="search" style="width: 20%" placeholder=" Enter a book name...">
					<input type="submit" name="go" value="Go" class="submitBtn" style="padding: 5px 20px">
				</form>
				<br>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
				<?php
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					if(isset($_POST['go']))
					{
						$searchedReview = getReviewByBookname($_POST['search']);
						if(isset($searchedReview['bookname']) && isset($searchedReview['authorname']) && isset($searchedReview['review_content']) && isset($searchedReview['username']))
						{
							echo "
									<fieldset style='width:50%' class='fieldSetBorder'>
									<table border = 0 cellspacing = 0 align=center>
									<tr>
										<td><b>Bookname: &nbsp<b/></td>
										<td>
											{$searchedReview['bookname']}
										</td>
									</tr>
									<tr><td><br></td></tr>
									<tr>
										<td><b>Author:</b></td>
										<td>
											{$searchedReview['authorname']}
										</td>
									</tr>
									<tr><td><br></td></tr>
									<tr>
										<td><b>Review:</b></td>
										<td>
											{$searchedReview['review_content']} 
										</td>
									</tr>
									<tr><td><br></td></tr>
									<tr>
										<td><b>User:</b></td>
										<td>
											{$searchedReview['username']} 
										</td>
									</tr>
									</table>
									</fieldset>
									</form>";
						}
						else
						{
							echo "
							<center>
								No matches found! :(
							</center>
							";
						}
					}
					else
					{
						$reviews = getAllReview();
						for ($i=0; $i <count($reviews) ; $i++) 
						{ 
							if($reviews[$i]['username'] != $_SESSION['UserName'])
							{
								echo "
									<fieldset style='width:50%' class='fieldSetBorder'>
									<table border = 0 cellspacing = 0 align=center>
									<tr>
										<td><b>Bookname: &nbsp<b/></td>
										<td>
											{$reviews[$i]['bookname']}
										</td>
									</tr>
									<tr><td><br></td></tr>
									<tr>
										<td><b>Author:</b></td>
										<td>
											{$reviews[$i]['authorname']}
										</td>
									</tr>
									<tr><td><br></td></tr>
									<tr>
										<td><b>Review:</b></td>
										<td>
											{$reviews[$i]['review_content']} 
										</td>
									</tr>
									<tr><td><br></td></tr>
									<tr>
										<td><b>User:</b></td>
										<td>
											{$reviews[$i]['username']} 
										</td>
									</tr>
									</table>
									</fieldset>
									</form>";
							}
						}
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