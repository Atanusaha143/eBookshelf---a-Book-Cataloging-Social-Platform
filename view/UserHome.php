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
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left"> </a>
				&nbsp | &nbsp
				<a href="UserLogout.php"> Logout </a>
				&nbsp
			</td>
		</tr>
		<tr>
			<td height="50px" colspan="2">
				  <a href="UserProfile.php" style="margin-left: 25em"> Profile </a> &nbsp &nbsp &nbsp |
				&nbsp &nbsp &nbsp <a href="UserBookList.php"> Create Bookshelf </a> &nbsp &nbsp &nbsp |
				&nbsp &nbsp &nbsp <a href="UserPost.php"> Create Post </a> &nbsp &nbsp &nbsp |
				&nbsp &nbsp &nbsp <a href="UserActivities.php"> Check Activities </a> &nbsp &nbsp &nbsp |
				&nbsp &nbsp &nbsp <a href="UserContact.php"> Contact </a> &nbsp &nbsp &nbsp 
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2">
				<?php

					$post_file = fopen('../model/Posts.json', 'r');
					$post_data = fread($post_file, filesize('../model/Posts.json'));
					$post_info = json_decode($post_data, true);
					
					echo "<center>";
					echo "Public Posts";
					echo "</center>";
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

				?>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> Copyright &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>