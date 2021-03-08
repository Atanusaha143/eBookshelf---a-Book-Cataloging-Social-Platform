<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Activities";
	include ('header.php');
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left"> </a>
				<a href="UserHome.php"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<h3> 
						<u>
							<?php echo $_SESSION['Name']; ?>'s All Activity List
						</u> 
					</h3>
					<?php 

						$all_files = scandir('../model/');
						$need_file = $_SESSION['Name'].'AllActivity.json';
						$flag = false;
						foreach ($all_files as $file)
						{
							if(strstr($file, $need_file) && filesize('../model/'.$need_file)>0)
							{
								$flag = true;
								$activity_file = fopen('../model/'.$need_file, 'r');
								$activity_data = fread($activity_file, filesize('../model/'.$need_file));
								$activity_filter = explode("\n", $activity_data);
								for($i=0; $i<count($activity_filter)-1; $i++) 
								{
					
									$activityInfo = json_decode($activity_filter[$i], true);
									$dateTime = $activityInfo['timeAndDate'];
									$bookName = $activityInfo['bookName'];
									$authorName = $activityInfo['authorName'];
									$postContent = $activityInfo['postContent'];
									$activityType = $activityInfo['activity_type'];

									 echo "<br>";
									 echo "<table>";
								     echo "<tr>";
								     echo "<td>Book Name:</td>";
								     echo "<td>".$bookName."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td>Author Name:</td>";
								     echo "<td>".$authorName."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td>Post Content:</td>";
								     echo "<td>".$postContent."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td>Activity Time:</td>";
								     echo "<td>".$dateTime."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td>Activity Type:</td>";
								     echo "<td>".$activityType."</td>";
								     echo "</tr>";
								     echo "</table>";
								     if($i != count($activity_filter)-2)
								     {
								     	echo "_______________________________________________________________________________________________________";
								     	echo "<br>";
								     }			
									
								}
							}
						}

						$need_file_book = $_SESSION['Name'].'Bookshelf.json';
						foreach ($all_files as $file)
						{
							if(strstr($file, $need_file_book) && filesize('../model/'.$need_file_book)>0)
							{
								$flag = true;
								$activity_file = fopen('../model/'.$need_file_book, 'r');
								$activity_data = fread($activity_file, filesize('../model/'.$need_file_book));
								$activity_filter = explode("\n", $activity_data);
								for($i=0; $i<count($activity_filter)-1; $i++) 
								{
					
									$activityInfo = json_decode($activity_filter[$i], true);
									$bookName = $activityInfo['bookName'];

									 if($i != count($activity_filter)-2)
								     {
								     	echo "_______________________________________________________________________________________________________";
								     	echo "<br>";
								     }	
									 echo "<br>";
									 echo "<table>";
								     echo "<tr>";
								     echo "<td>Book Name: ".$bookName."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td>Activity Type: Create Bookshelf</td>";
								     echo "</tr>";
								     echo "</table>";
								     if($i != count($activity_filter)-2)
								     {
								     	echo "_______________________________________________________________________________________________________";
								     	echo "<br>";
								     }			
									
								}
							}
						}

						if($flag==false)
						{
							echo "No activities yet!";
						}
					?>
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