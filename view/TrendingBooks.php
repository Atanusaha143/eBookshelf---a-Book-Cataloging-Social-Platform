<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Trending Books";
	include ('header.php');
?>
	<table border="0" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
			</td>
		</tr>
		<tr><td><hr></td></tr>
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
		<tr><td><hr></td></tr>
		<?php
				require_once('../model/dbConnection.php');
				require_once('../model/userModel.php');
				$ratingInfo = getAllRating();
				$books = array();
				$arrayBooks = []; 
				for ($i=0; $i<count($ratingInfo) ; $i++) 
				{ 
					$currBook = $ratingInfo[$i]['bookname'];
						array_push($books, $currBook);
				}
				foreach ($books as $key => $value) 
				{
					$arrayBooks[$value] = 0;
				}
				for ($i=0; $i<count($ratingInfo) ; $i++) 
				{ 
					$currBook = $ratingInfo[$i]['bookname'];
					$arrayBooks[$currBook] += $ratingInfo[$i]['rating'];
				}
				$booksRating = array();
				foreach ($arrayBooks as $key => $value) 
				{
					$booksRating[$key] = $value;
				}
				arsort($booksRating);
		?>
		<tr height = "200px">
			<td align="center">
				<?php
					echo "<br>
					<center class='titleBox' style='width:30%'> Trending Books </center>"
					;
								foreach ($booksRating as $key => $value) 
								{
									echo "<h4> {$key} </h4>";
									
								}
					echo "<br>";

					
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