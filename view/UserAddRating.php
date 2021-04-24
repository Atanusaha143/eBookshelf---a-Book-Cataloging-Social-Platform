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
<<<<<<< HEAD

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
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left"  width="100%" height="150"> </a>
=======
<script src="../resources/JS/script.js"></script>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left"  width="100%" height="150"> </a>
>>>>>>> regular_user_module_final
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
<<<<<<< HEAD
		<tr height = "200px">
			<td colspan="2">
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The 7 Habits of Highly Effective People <br><br>
						<b>Author:</b> Stephen Covey <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating1" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> How to Win Friends & Influence People <br><br>
						<b>Author:</b> Dale Carnegie <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating2" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Think and Grow Rich <br><br>
						<b>Author:</b> Napoleon Hill <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating3" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Awaken the Giant Within <br><br>
						<b>Author:</b> Tony Robbins <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating4" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> As a Man Thinketh <br><br>
						<b>Author:</b> James Allen <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating5" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The Greatest Salesman in the World <br><br>
						<b>Author:</b> Og Mandino <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating6" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Don't Sweat the Small Stuff <br><br>
						<b>Author:</b> Richard Carlson <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating7" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> Driv <br><br>
						<b>Author:</b> Daniel H. Pink <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating8" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The Power of Positive Thinking <br><br>
						<b>Author:</b> Norman Vincent Peale <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating9" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
				<fieldset>
					<form method="post" action="">
						<b>Book Name:</b> The Magic of Thinking Big <br><br>
						<b>Author:</b> David J. Schwartz <br> <br>
						<b>Add Rating:</b> <input type="radio" name="raring1"> <input type="radio" name="raring2"> <input type="radio" name="raring3"> <input type="radio" name="raring4"> <input type="radio" name="raring5"> <br> <br> 
						<input type="submit" name="rating10" value="Add" style="margin-left: 6em; padding: 5px 20px" class="submitBtn">
					</form>
				</fieldset>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
=======
		<tr class="sticky navbar">
			<td height="25px" colspan="2">
				<ul>
					 <li>
					 	<a href="UserShowAllRating.php" style="margin-left: 37em"> All Rating </a>
					 </li>
					 <li>
					 	<a href="UserShowMyRating.php"> My Given Rating </a> 
					 </li>
				</ul> 
			</td>
		</tr>

		<tr>
			<td>
				<br>
				<form method="post" action="" onsubmit=" return addReviewSearch()">
					<label style="margin-left: 37em">  </label>
					<input type="Search" id="s" name="search" style="width: 20%" placeholder=" Enter a book name...">
					<input type="submit" name="go" value="Go" class="submitBtn" style="padding: 5px 20px">
				</form>
				<br>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2">
				<fieldset>
				<?php

					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					if(isset($_POST['go']))
					{
						$bookDetails = getBookByBookname($_POST['search']);
						if(isset($bookDetails['bookname']) && isset($bookDetails['authorname']))
						{
							echo " <form action='../controller/UserAddRatingCheck.php' method='POST'> 
							<fieldset class='fieldSetBorder'>
								<table border=0>
									<tr>
										<td><b>Book Name:</b></td>
										<td>
											<input type='text' name='bookname' value='{$bookDetails['bookname']}' readonly='readonly' size='45%'/>
										</td>
									</tr>
									<tr>
										<td><b>Author Name:</b></td>
										<td>
											<input type='text' name='authorname' value='{$bookDetails['authorname']}' readonly='readonly' size='45%'/>
										</td>
									</tr>
									<tr>
										<td><b>Rating:</b></td>
										<td>
											<input type='radio' id='1' name='rating1'> <input type='radio' id='2' name='rating2'> <input type='radio' id='3' name='rating3'> <input type='radio' id='4' name='rating4'> <input type='radio' id='5' name='rating5'>
										</td>
										<td>
											<b id='print' style='color: red'></b>
											</td>
									</tr>
									<tr>
										<td colspan='2' align='center'>
														<input type='submit' name='addRating' value='Add' class='submitBtn' style='padding:5px 20px'/>
										</td>
									<tr/>
								</table>
								</fieldset>
								</form>
								<br>
							";
						}
						else
						{
							echo "
								<center>No matches found! :(</center>
							";
						}
					}
					else
					{
						$allBooks = getAllBooks();
						for ($i=0; $i <count($allBooks) ; $i++) 
						{ 
							echo " <form action='../controller/UserAddRatingCheck.php' method='POST'> 
							<fieldset class='fieldSetBorder'>
								<table border=0>
									<tr>
										<td><b>Book Name:</b></td>
										<td>
											<input type='text' name='bookname' value='{$allBooks[$i]['bookname']}' readonly='readonly' size='45%'/>
										</td>
									</tr>
									<tr>
										<td><b>Author Name:</b></td>
										<td>
											<input type='text' name='authorname' value='{$allBooks[$i]['authorname']}' readonly='readonly' size='45%'/>
										</td>
									</tr>
									<tr>
										<td><b>Rating:</b></td>
										<td>
											<input type='radio' id='rate1' name='rating1'> <input type='radio' id='rate2' name='rating2'> <input type='radio' id='rate3' name='rating3'> <input type='radio' id='rate4' name='rating4'> <input type='radio' id='rate5' name='rating5'>
										</td>
										<td>
											<b id='print' style='color: red'></b>
											</td>
									</tr>
									<tr>
										<td colspan='2' align='center'>
														<input type='submit' name='addRating' value='Add' class='submitBtn' style='padding:5px 20px'/>
										</td>
									<tr/>
								</table>
								</fieldset>
								</form>
								<br>
							";
						}
					}

				?>
			</td>
		</tr>
		<tr height = "50px" style="background-color: #333; color: white;">
			<td colspan="3" style="padding: 25px;">
>>>>>>> regular_user_module_final
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>