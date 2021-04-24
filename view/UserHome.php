<<<<<<< HEAD
=======
<!-- Using DB -->
>>>>>>> regular_user_module_final
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
	if(isset($_POST['go']))
	{
		if($_POST['search'] == "")
		{
			echo "Please write something!";
		}
		else
		{
			echo "Searched!";
		}
	}
?>
	<table border="0" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left"  width="100%" height="150"> </a>
<!-- 				&nbsp &nbsp
				<br>
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp -->
=======
<script src="../resources/JS/script.js"></script>
	<table border="0" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left"  width="100%" height="150"> </a>
>>>>>>> regular_user_module_final
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
<<<<<<< HEAD
					 	<a href="UserPost.php"> Create Post </a> 
					 </li>
					 <li>
					 	<a href="UserAddReview.php"> Add Review </a>
					 </li> 
					 <li>
					 	<a href="UserAddRating.php"> Add Rating </a> 
					 </li>
					 <li>
					 	<a href="UserSendMessage.php"> Send Message </a>
					 </li> 
					 <li>
					 	<a href="UserActivities.php"> Check Activities </a>
=======
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
>>>>>>> regular_user_module_final
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
<<<<<<< HEAD
				<form method="post" action="">
					<label style="margin-left: 37em">  </label>
					<input type="Search" name="search" style="width: 20%" placeholder=" Search here...">
					<input type="submit" name="go" value="Go" class="submitBtn" style="padding: 5px 20px">
=======
				<form method="post" action="" onsubmit="return searchPostValidation()">
					<label style="margin-left: 37em">  </label>
					<input type="Search" id="Search" name="search" style="width: 20%" placeholder=" Enter a book name...">
					<input type="submit" name="go" value="Go" class="submitBtn" style="padding: 5px 20px">
					<br>
					<center><b id="print" style="color: red"></center>
>>>>>>> regular_user_module_final
				</form>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2">
				<?php
<<<<<<< HEAD

					$post_file = fopen('../model/Posts.json', 'r');
					$post_data = fread($post_file, filesize('../model/Posts.json'));
					$post_info = json_decode($post_data, true);
					echo "<br>";
					echo "<center>";
					echo " <b class = 'title'> Public Posts </b>";
					echo "</center>";
					echo "<br>";
					for ($i=0; $i<count($post_info); $i++) 
					{
						 echo "<fieldset>";
						 echo "<br>";
						 echo "<table>";
					     echo "<tr>";
					     echo "<td>Book Name:</td>";
					     echo "<td>".$post_info[$i]['bookName']."</td>";
					     echo "</tr>";
					     echo "<tr>";
					     echo "<td>Author:</td>";
					     echo "<td>".$post_info[$i]['author']."</td>";
					     echo "</tr>";
					     echo "<tr>";
					     echo "<td>Post:</td>";
					     echo "<td>".$post_info[$i]['post']."</td>";
					     echo "</tr>";
					     echo "</table>";
					     echo "<br>";
					     echo "</fieldset>";
					}


					$all_files = scandir('../model/');
					$need_file = $_SESSION['Name'].'AllPost.json';

					foreach ($all_files as $file)
					{
						if(strstr($file, $need_file) && filesize('../model/'.$need_file)>0)
						{
							$activity_file = fopen('../model/'.$need_file, 'r');
							$activity_data = fread($activity_file, filesize('../model/'.$need_file));
							$activity_filter = explode("\n", $activity_data);
							for($i=0; $i<count($activity_filter)-1; $i++) 
							{
				
								$activityInfo = json_decode($activity_filter[$i], true);
								$bookName = $activityInfo['bookName'];
								$authorName = $activityInfo['authorName'];
								$postContent = $activityInfo['postContent'];
								$username = $activityInfo['username'];
=======
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
>>>>>>> regular_user_module_final
								 echo "<fieldset>";
								 echo "<br>";
								 echo "<table>";
							     echo "<tr>";
<<<<<<< HEAD
							     echo "<td>Book Name:</td>";
							     echo "<td>".$bookName."</td>";
							     echo "</tr>";
							     echo "<tr>";
							     echo "<td>Author:</td>";
							     echo "<td>".$authorName."</td>";
							     echo "</tr>";
							     echo "<tr>";
							     echo "<td>Post:</td>";
							     echo "<td>".$postContent."</td>";
							     echo "</tr>";
							     echo "<tr>";
							     echo "<td>Added By :</td>";
							     echo "<td>".$username."</td>";
							     echo "</tr>";
							     echo "</table>";
							     echo "<br>";
							     echo "</fieldset>";			
											
							}
						}
=======
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
>>>>>>> regular_user_module_final
					}
				?>
			</td>
		</tr>
<<<<<<< HEAD
		<tr height = "50px">
			<td colspan="3">
=======
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