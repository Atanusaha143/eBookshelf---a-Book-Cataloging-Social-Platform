<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Create Post";
	include ('header.php');
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
					<form method="POST" action="../controller/UserPostCheck.php">
						<fieldset style="width: 40%">
						<legend>
							<b> Create Post </b>
						</legend>
						<table>
							<tr>
								<td>
									Book Name
								</td>
								<td>
									<input type="text" name="bookName" style="width: 150%"> 
								</td>
							</tr>
							<tr>
								<td> Author Name </td>
								<td>
									<input type="text" name="bookAuthor" style="width: 150%">
								</td>
							</tr>
							<tr>
							<td> Category </td>
							<td>
								<select name = "Category">
									<option value="Action and adventure"> Action and adventure </option> Action and adventure
									<option value="Alternate history"> Alternate history </option> Alternate history
									<option value="Anthology"> Anthology </option> Anthology
									<option value="Chick lit"> Chick lit </option> Chick lit
									<option value="Children's"> Children's </option> Children's
									<option value="Classic "> Classic  </option> Classic 
									<option value="Comic book"> Comic book </option> Comic book
									<option value="Coming-of-age"> Coming-of-age </option> Coming-of-age
									<option value="Drama"> Drama </option> Drama
									<option value="Fairytale"> Fairytale </option> Fairytale
									<option value="Fantasy"> Fantasy </option> Fantasy
									<option value="Graphic novel"> Graphic novel </option> Graphic novel
									<option value="Historical fiction"> Historical fiction </option> Historical fiction
									<option value="Horror"> Horror </option> Horror
									<option value="Motivational"> Motivational </option> Motivational
									<option value="Mystery"> Mystery </option> Mystery'
									<option value="Paranormal romance"> Paranormal romance </option> Paranormal romance
									<option value="Picture book"> Picture book </option> Picture book
									<option value="Poetry"> Poetry </option> Poetry
									<option value="Political thriller"> Political thriller </option> Political thriller
									<option value="Romance"> Romance </option> Romance
									<option value="Satire"> Satire </option> Satire
									<option value="Science fiction"> Science fiction </option> Science fiction
									<option value="Short story"> Short story </option> Short story
									<option value="Suspense"> Suspense </option> Suspense
									<option value="Thriller"> Thriller </option> Thriller
									<option value="Western"> Western </option> Western
									<option value="Young adult"> Young adult </option> Young adult
								</select>
							</td>
						</tr>
							<tr>
								<td> Post Content </td>
								<td>
									<input type="text" name="postContent" style="height: 75px">
								</td>
							</tr>
						</table>
						<center>
							<input type="submit" name="post" value="Post" style="margin-left: 5em" class="submitBtn">
						</center>
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