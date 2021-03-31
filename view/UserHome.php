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
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr class="sticky">
			<td height="50px" colspan="2">
				<fieldset>
					<a href="UserProfile.php" style="margin-left: 15em" class="linkBtn"> Profile </a> &nbsp &nbsp &nbsp |
					&nbsp &nbsp &nbsp <a href="UserBookList.php" class="linkBtn"> Bookshelf </a> &nbsp &nbsp &nbsp |
					&nbsp &nbsp &nbsp <a href="UserPost.php" class="linkBtn"> Create Post </a> &nbsp &nbsp &nbsp |
					&nbsp &nbsp &nbsp <a href="UserAddReview.php" class="linkBtn"> Add Review </a> &nbsp &nbsp &nbsp |
					&nbsp &nbsp &nbsp <a href="UserAddRating.php" class="linkBtn"> Add Rating </a> &nbsp &nbsp &nbsp |
					&nbsp &nbsp &nbsp <a href="UserSendMessage.php" class="linkBtn"> Send Message </a> &nbsp &nbsp &nbsp |
					&nbsp &nbsp &nbsp <a href="UserActivities.php" class="linkBtn"> Check Activities </a> &nbsp &nbsp &nbsp |
					&nbsp &nbsp &nbsp <a href="UserContact.php" class="linkBtn"> Contact </a> &nbsp &nbsp &nbsp 
				</fieldset>
			</td>
		</tr>
		<tr>
			<td>
				<br> <br>
				<form method="post" action="">
					<label style="margin-left: 37em">  </label>
					<input type="Search" name="search" style="width: 20%" placeholder=" Search here...">
					<input type="submit" name="go" value="Go" class="submitBtn">
				</form>
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2">
				<?php

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
								 echo "<fieldset>";
								 echo "<br>";
								 echo "<table>";
							     echo "<tr>";
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
					}
				?>
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