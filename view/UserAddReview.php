<!-- Using DB -->
<?php
	/*session_start();
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
	<table border="0" width="100%" cellspacing="0">
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
					 	<a href="UserShowAllReview.php" style="margin-left: 37em"> All Review </a>
					 </li>
					 <li>
					 	<a href="UserShowMyReview.php"> My Review </a> 
					 </li>
				</ul> 
			</td>
		</tr>
		<tr>
			<td>
				<!-- <br> <br> -->
				<form method="post" action="" onsubmit="return addReviewSearch()">
					<label style="margin-left: 37em">  </label>
					<input type="Search" id="s" name="search" style="width: 20%" placeholder=" Enter a book name...">
					<input type="submit" name="go" value="Go" class="submitBtn" style="padding: 5px 20px">
				</form>
				<br>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2">
				<?php
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					if(isset($_POST['go']))
					{
						$searchedBook = getBookByBookname($_POST['search']);
						if (isset($searchedBook['bookname']) && isset($searchedBook['authorname'])) 
						{
							echo " <form action='../controller/UserAddReviewCheck.php' method='POST' onsubmit='return addReviewPost()'>
							<fieldset>
							<table border = 0 cellspacing = 0 align=center>
							<tr>
								<td><b>Bookname: <b/></td>
								<td>
									<input type='text' name='bookname' value='{$searchedBook['bookname']}' readonly='readonly' size='45%'/>
								</td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td><b>Author:</b></td>
								<td>
									<input type='text' name='authorname' value='{$searchedBook['authorname']}' readonly='readonly' size='45%'/>
								</td>
							</tr>
							<tr><td><br></td></tr>
							<tr rowspan = 2>
								<td colspan=2 align=center>
								<textarea id='post' rows = '5' cols = '50' name = 'reviewText'></textarea>
								</td>
							</tr>
							<tr><td><br></td></tr>";
						
							echo "<tr>
								<td colspan=2 align='center'>
									 	<input type='submit' name='addReview' value='Add Review' class='submitBtn' style='padding:10px 10px'>
								</td>
							</tr>
							<tr><td><br></td></tr>
							</table>
							</fieldset>
							</form>";
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
						$books = getAllBooks();
						for ($i=0; $i <count($books) ; $i++) 
						{ 
							echo " <form action='../controller/UserAddReviewCheck.php' method='POST' onsubmit='return addReviewPost()'>
							<fieldset>
							<table border = 0 cellspacing = 0 align=center>
							<tr>
								<td><b>Bookname: <b/></td>
								<td>
									<input type='text' name='bookname' value='{$books[$i]['bookname']}' readonly='readonly' size='45%'/>
								</td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td><b>Author:</b></td>
								<td>
									<input type='text' name='authorname' value='{$books[$i]['authorname']}' readonly='readonly' size='45%'/>
								</td>
							</tr>
							<tr><td><br></td></tr>
							<tr rowspan = 2>
								<td><b>Review Content:</b></td>
								<td colspan=2 align=center>
								<textarea id='post' rows = '5' cols = '35' name = 'reviewText'></textarea>
								</td>
								<td colspan='3' align='center'>
									<b id='print' style='color: red'></b>	
								</td>
							</tr>
							<tr><td><br></td></tr>";
						
							echo "<tr>
								<td colspan=2 align='center'>
									 	<input type='submit' name='addReview' value='Add Review' class='submitBtn' style='padding:10px 10px'>
								</td>
							</tr>
							<tr><td><br></td></tr>
							</table>
							</fieldset>
							</form>";
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
	include ('footer.php');*/
?>

<!-- Using DB -->
<!-- Using Ajax -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Create Review";
	include ('header.php');
?>
<script src="../resources/JS/script.js"></script>
	<table border="0" width="100%" cellspacing="0">
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
					 	<a href="UserShowAllReview.php" style="margin-left: 37em"> All Review </a>
					 </li>
					 <li>
					 	<a href="UserShowMyReview.php"> My Review </a> 
					 </li>
				</ul> 
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<!-- <br> <br> -->
				<form method="post" action="" onsubmit="return addReviewSearch()">
					<label style="margin-left: 37em">  </label>
					<input type="text" id="Search" name="search" style="width: 20%" placeholder=" Type a book name..." onkeyup="ajaxAddReviewSearch()">
					<br>
				</form>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<div id="print"></div>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2">
				<?php
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');

					$books = getAllBooks();
					for ($i=0; $i <count($books) ; $i++) 
					{ 
						echo " <form action='../controller/UserAddReviewCheck.php' method='POST' onsubmit='return addReviewPost()'>
						<fieldset>
						<table border = 0 cellspacing = 0 align=center>
						<tr>
							<td><b>Bookname: <b/></td>
							<td>
								<input type='text' name='bookname' value='{$books[$i]['bookname']}' readonly='readonly' size='45%'/>
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr>
							<td><b>Author:</b></td>
							<td>
								<input type='text' name='authorname' value='{$books[$i]['authorname']}' readonly='readonly' size='45%'/>
							</td>
						</tr>
						<tr><td><br></td></tr>
						<tr rowspan = 2>
							<td><b>Review Content:</b></td>
							<td colspan=2 align=center>
							<textarea id='post' rows = '5' cols = '35' name = 'reviewText'></textarea>
							</td>
							<td colspan='3' align='center'>
								<b id='errorPrint' style='color: red'></b>	
							</td>
						</tr>
						<tr><td><br></td></tr>";
					
						echo "<tr>
							<td colspan=2 align='center'>
								 	<input type='submit' name='addReview' value='Add Review' class='submitBtn' style='padding:10px 10px'>
							</td>
						</tr>
						<tr><td><br></td></tr>
						</table>
						</fieldset>
						</form>";
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