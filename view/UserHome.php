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
		<tr class="sticky navbar">
			<td height="50px" colspan="2">
				<ul>
					 <li>
					 	<a href="UserProfile.php" style="margin-left: 15em"> Profile </a>
					 </li>
					 <li>
					 	<a href="UserBookList.php"> Bookshelf </a> 
					 </li>
					 <li>
					 	<a href="UserPost.php"> Post </a> 
					 </li>
					 <li>
					 	<a href="UserAddReview.php"> Reviews </a>
					 </li> 
					 <li>
					 	<a href="UserAddRating.php"> Ratings </a> 
					 </li>
					 <li>
					 	<a href="UserSendMessage.php"> Messages </a>
					 </li>
					 <li>
					 	<a href="UserBuy.php"> Buy </a>
					 </li>
					 <li>
					 	<a href="UserSell.php"> Sell </a>
					 </li> 
					 <li>
					 	<a href="UserActivities.php"> Activities </a>
					 </li>
					 <li>
					 	<a href="UserName.php"> Readers </a>
					 </li>
					 <li>
					 	<a href="UserContact.php"> Contact </a>
					 </li>
					 <li>
					 	<a href="UserLogout.php" onMouseOver="this.style.background='#990000'" onmouseout="this.style.background='#003366'"> Logout </a>
					 </li>
				</ul> 
			</td>
		</tr>
		<tr>
			<td>
				<!-- <br> <br> -->
				<form method="post" action="" onsubmit="return searchPostValidation()">
					<label style="margin-left: 37em">  </label>
					<input type="Search" id="Search" name="search" style="width: 20%" placeholder=" Enter a book name...">
					<input type="submit" name="go" value="Go" class="submitBtn" style="padding: 5px 20px">
					<br>
					<center><b id="print" style="color: red"></center>
				</form>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2">
				<?php
					echo "<br>";
					echo "<center>";
					echo " <b class = 'titleBox'> Public Posts </b>";
					echo "</center>";
					echo "<br>";
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					if (isset($_POST['go'])) 
					{
						$searchedBook = getPostByBookname($_POST['search']);
						if($searchedBook)
						{
							for ($i=0; $i<count($searchedBook); $i++) 
							{
								 echo "<fieldset>";
								 echo "<br>";
								 echo "<table>";
							     echo "<tr>";
							     echo "<td style='width: 6%;'>Book Name:</td>";
							     echo "<td>".$searchedBook[$i]['bookname']."</td>";
							     echo "</tr>";
							     echo "<tr><td><hr></td></tr>";
							     echo "<tr>";
							     echo "<td>Category:</td>";
							     echo "<td>".$searchedBook[$i]['category']."</td>";
							     echo "</tr>";
							     echo "<tr><td><hr></td></tr>";
							     echo "<tr>";
							     echo "<td>Author:</td>";
							     echo "<td>".$searchedBook[$i]['authorname']."</td>";
							     echo "</tr>";
							     echo "<tr><td><hr></td></tr>";
							     echo "<tr>";
							     echo "<td>Post:</td>";
							     echo "<td>".$searchedBook[$i]['post_content']."</td>";
							     echo "</tr>";
							     echo "<tr><td><hr></td></tr>";
							     echo "<tr>";
							     echo "<td>Post By:</td>";
							     echo "<td>".$searchedBook[$i]['username']."</td>";
							     echo "</tr>";
							     echo "</table>";
							     echo "<br>";
							     echo "</fieldset>";
							}
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
						$allPosts = getAllPost();
						for ($i=0; $i<count($allPosts); $i++) 
						{
							 echo "<fieldset>";
							 echo "<br>";
							 echo "<table>";
						     echo "<tr>";
						     echo "<td style='width: 6%;'>Book Name:</td>";
						     echo "<td>".$allPosts[$i]['bookname']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Category:</td>";
						     echo "<td>".$allPosts[$i]['category']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Author:</td>";
						     echo "<td>".$allPosts[$i]['authorname']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Post:</td>";
						     echo "<td>".$allPosts[$i]['post_content']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Post By:</td>";
						     echo "<td>".$allPosts[$i]['username']."</td>";
						     echo "</tr>";
						     echo "</table>";
						     echo "<br>";
						     echo "</fieldset>";
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


<!-- Using Ajax -->
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
<script src="../resources/JS/script.js"></script>
	<table border="0" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left"  width="100%" height="150"> </a>
			</td>
		</tr>
		<tr class="sticky navbar">
			<td height="50px" colspan="2">
				<ul>
					 <li>
					 	<a href="UserProfile.php" style="margin-left: 10em"> Profile </a>
					 </li>
					 <li>
					 	<a href="UserBookList.php"> Bookshelf </a> 
					 </li>
					 <li>
					 	<a href="UserPost.php"> Post </a> 
					 </li>
					 <li>
					 	<a href="UserAddReview.php"> Reviews </a>
					 </li> 
					 <li>
					 	<a href="UserAddRating.php"> Ratings </a> 
					 </li>
					 <li>
					 	<a href="UserSendMessage.php"> Messages </a>
					 </li>
					 <li>
					 	<a href="UserBuy.php"> Buy </a>
					 </li>
					 <li>
					 	<a href="UserSell.php"> Sell </a>
					 </li> 
					 <li>
					 	<a href="UserActivities.php"> Activities </a>
					 </li>
					 <li>
					 	<a href="UserName.php"> Readers </a>
					 </li>
					 <li>
					 	<a href="TrendingBooks.php"> Trending Books </a>
					 </li>
					 <li>
					 	<a href="UserContact.php"> Contact </a>
					 </li>
					 <li>
					 	<a href="UserLogout.php" onMouseOver="this.style.background='#990000'" onmouseout="this.style.background='#003366'"> Logout </a>
					 </li>
				</ul> 
			</td>
		</tr>
		<tr>
			<td>
				<br>
				<!-- <br> <br> -->
				<form method="post" action="" onsubmit="return searchPostValidation()">
					<label style="margin-left: 37em">  </label>
					<input type="text" id="Search" name="search" style="width: 20%" placeholder=" Type a book name..." onkeyup="homeSearch()">
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
					echo "<br>";
					echo "<center>";
					echo " <b class = 'titleBox'> Public Posts </b>";
					echo "</center>";
					echo "<br>";
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					

						$allPosts = getAllPost();
						for ($i=0; $i<count($allPosts); $i++) 
						{
							 echo "<fieldset>";
							 echo "<br>";
							 echo "<table>";
						     echo "<tr>";
						     echo "<td style='width: 6%;'>Book Name:</td>";
						     echo "<td>".$allPosts[$i]['bookname']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Category:</td>";
						     echo "<td>".$allPosts[$i]['category']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Author:</td>";
						     echo "<td>".$allPosts[$i]['authorname']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Post:</td>";
						     echo "<td>".$allPosts[$i]['post_content']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Post By:</td>";
						     echo "<td>".$allPosts[$i]['username']."</td>";
						     echo "</tr>";
						     echo "</table>";
						     echo "<br>";
						     echo "</fieldset>";
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