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
<script src="../resources/JS/script.js"></script>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left"  width="100%" height="150"> </a>
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
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>