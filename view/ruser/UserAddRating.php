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

<?php
	$count = 0;
	$flag = false;
	for ($i=1; $i<=10 ; $i++) 
	{ 
		if(isset($_POST['rating'.$i]))
		{
			$flag = true;
			if(isset($_POST['raring1'])) $count++;
			if(isset($_POST['raring2'])) $count++;
			if(isset($_POST['raring3'])) $count++;
			if(isset($_POST['raring4'])) $count++;
			if(isset($_POST['raring5'])) $count++;
			if($count > 0)
			{
				echo "Your given rating : ". $count;
			}
			else
			{
				echo "Please give rating first!";
			}
			break;
		}
	}
?>
	<table border="0" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left"  width="100%" height="150"> </a>
				<a href="UserHome.php" class="linkBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn"> Logout </a>
				&nbsp
			</td>
		</tr>

		<tr height = "200px">
			<td colspan="2">
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The 7 Habits of Highly Effective People <br><br>
						<b>Author:</b> Stephen Covey <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating1" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> How to Win Friends & Influence People <br><br>
						<b>Author:</b> Dale Carnegie <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating2" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Think and Grow Rich <br><br>
						<b>Author:</b> Napoleon Hill <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating3" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Awaken the Giant Within <br><br>
						<b>Author:</b> Tony Robbins <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating4" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> As a Man Thinketh <br><br>
						<b>Author:</b> James Allen <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating5" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The Greatest Salesman in the World <br><br>
						<b>Author:</b> Og Mandino <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating6" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Don't Sweat the Small Stuff <br><br>
						<b>Author:</b> Richard Carlson <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating7" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Driv <br><br>
						<b>Author:</b> Daniel H. Pink <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating8" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The Power of Positive Thinking <br><br>
						<b>Author:</b> Norman Vincent Peale <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating9" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The Magic of Thinking Big <br><br>
						<b>Author:</b> David J. Schwartz <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating10" value="Add" style="margin-left: 6em" class="submitBtn">
					</form>
				</fieldset>
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