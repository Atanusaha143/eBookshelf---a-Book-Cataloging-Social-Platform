<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Update Review";
	include ('header.php');
?>

<?php
	for ($i=1; $i<=10 ; $i++)
	{ 
		if(isset($_POST['reviewBtn'.$i]))
		{
			if($_POST['reviewBox'.$i] == "")
			{
				echo "Please write sometime!";
			}
			else echo "Review Added!";
		}
	}
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
				<a href="UserShowMyReview.php" class="linkBtn gobackBtn"> Go Back </a>
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
				<b class="titleBox"> <?php echo $_SESSION['Name']; ?>'s Reviews </b>
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
					$id = $_GET['id'];
					$reviews = getReviewById($id);
					$_SESSION['sessionReviewId'] = $id;
						echo " <form action='../controller/UserUpdateReviewCheck.php' method='POST'>
						<fieldset style='width:50%' class='fieldSetBorder'>
						<table border = 0 cellspacing = 0 align=center>
						<tr>
							<td><b>Bookname: &nbsp<b/></td>
							<td>
								<input type='text' name='bookname' value='{$reviews['bookname']}' size='45%'/>
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr>
							<td><b>Author:</b></td>
							<td>
								<input type='text' name='authorname' value='{$reviews['authorname']}' size='45%'/>
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr>
							<td><b>Review:</b></td>
							<td>
								<input type='text' name='review' value='{$reviews['review_content']} ' size='45%'/>
							</td>
						</tr>
						</table>
						<br>
						<input type='submit' name='updateReview' class='linkBtn updateBtn' value='Update'/>
						</fieldset>
						</form>";
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