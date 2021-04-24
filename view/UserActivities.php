<<<<<<< HEAD
<?php
	session_start();
=======
<!-- Using Json -->
<?php
	/*session_start();
>>>>>>> regular_user_module_final
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
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
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
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<div class="title">
						<?php echo $_SESSION['Name']; ?>'s All Activity List
					</div>
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

								     if($i != count($activity_filter)-2)
								     {
								     	echo "_______________________________________________________________________________________________________";
								     	echo "<br>";
								     }

									 echo "<br>";
									 echo "<table>";
								     echo "<tr>";
								     echo "<td> <b> Book Name: </b> </td>";
								     echo "<td>".$bookName."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td> <b> Author Name: </b> </td>";
								     echo "<td>".$authorName."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td> <b> Post Content: </b> </td>";
								     echo "<td>".$postContent."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td> <b> Activity Time: </b></td>";
								     echo "<td>".$dateTime."</td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td> <b> Activity Type: </b> </td>";
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

									 if($i == 0)
								     {
								     	echo "_______________________________________________________________________________________________________";
								     	echo "<br>";
								     }	
									 echo "<br>";
									 echo "<table>";
								     echo "<tr>";
								     echo "<td> <b> Book Name:  </b> ".$bookName." </td>";
								     echo "</tr>";
								     echo "<tr>";
								     echo "<td> <b> Activity Type: </b> Create Bookshelf</td>";
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
<<<<<<< HEAD
		<tr height = "50px">
			<td colspan="3">
=======
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
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
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
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<br>
					<b class="titleBox">
						<?php echo $_SESSION['Name']; ?>'s Activity List
					</b>
					<br>
					<br>
					<?php 

						$flag = false;
						require_once('../model/dbConnection.php');
						require_once('../model/userModel.php');
						$allActivites = getAllActivitiesByUserName($_SESSION['UserName']);
						if($allActivites)
						{
							$flag = true;
							echo "<table border = 5 cellspacing = 0 style='margin: 25px'>
							<tr>
								<th style='padding: 15px'>Activity Type</th>
								<th style='padding: 15px'>Activity Time</th>
								<th style='padding: 15px'>Book Name</th>
							</tr>";
							for ($i=0; $i <count($allActivites) ; $i++) 
							{ 
								echo "<tr>
										 <td style='padding: 15px'>{$allActivites[$i]['activity_type']}</td>
										 <td style='padding: 15px'>{$allActivites[$i]['activity_time']}</td>
										 <td style='padding: 15px'>{$allActivites[$i]['activity_details']}</td>
									</tr>";
							}
							echo "</table>";
						}
						if($flag==false)
						{
							echo "No activities yet!";
						}
					?>
				<br> 
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