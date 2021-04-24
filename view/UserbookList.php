<<<<<<< HEAD
<?php
	session_start();
=======
<!-- Using Json -->
<!-- <?php
	/*session_start();
>>>>>>> regular_user_module_final
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Book List";
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
			<td colspan="3" align="center">
				<br>
				<div class="title">
					<?php echo $_SESSION['Name']; ?>'s Bookshelf
				</div>
				<br>
				<?php
					if(isset($_POST['add']))
					{
						if(!empty($_POST['book']))
						{
							foreach($_POST['book'] as $selected)
							{
								$book = array("bookName" => $selected);
								$book_encode = json_encode($book);
								$book_data = fopen("../model/".$_SESSION['Name']."Bookshelf".".json", "a");
								fwrite($book_data, $book_encode."\r\n");
							}
							fclose($book_data);
						}
					}
					fopen("../model/".$_SESSION['Name']."Bookshelf".".json", 'a');
					if(filesize("../model/".$_SESSION['Name']."Bookshelf".".json")>0)
					{
						$book_file = fopen("../model/".$_SESSION['Name']."Bookshelf".".json", 'r');
						$book_data = fread($book_file, filesize("../model/".$_SESSION['Name']."Bookshelf".".json"));
						$book_filter = explode("\n", $book_data);
						for($i=0; $i<count($book_filter); $i++) 
						{
							$selectedBook = json_decode($book_filter[$i], true);
							if(isset($selectedBook['bookName']))
							{
								echo "<ul>";
								echo "<li>"; 
								echo $selectedBook['bookName'];
								echo "</li>";
								echo "</ul>"; 
							}
						}
					}
					else
					{
						echo "Oops! Your bookshelf is empty :(";
					}
				?>
				<br>
					<h4> <a href="UserBookshelf.php" class="linkBtn submitBtn" style="padding: 5px 20px; background-color: #00b300"> Add book </a> 
						<?php 
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp";
							echo "|";
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp"; 
						?> 
						<a href="UserBookshelfClean.php" class="linkBtn logoutBtn"> Clean Bookshelf </a> 
					</h4>
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
<<<<<<< HEAD
=======
	include ('footer.php');*/
?> -->






<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Book List";
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
			<td colspan="3" align="center">
				<br>
				<b class="titleBox">
					<?php echo $_SESSION['Name']; ?>'s Bookshelf
				</b>
				<br>
				<br>
				<?php
					
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					$bookShelf = getBookshelfByUsername($_SESSION['UserName']);
					if($bookShelf)
					{
						echo "<table border = 1 cellspacing = 0 style=' box-shadow: 10px 10px 5px grey'>
						<tr>
							<td style='padding: 20px'>";
						for($i=0; $i <count($bookShelf) ; $i++) 
						{
							echo "<ul>
								<li>
									{$bookShelf[$i]['bookname']}
								</li>
							</ul>";

							// echo "<ul>";
							// echo "<li>"; 
							// echo $bookShelf[$i]['bookname'];
							// echo "</li>";
							// echo "</ul>";
						}
						echo "</td>
							  </tr>
							  </table>";
					}
					else
					{
						echo "Oops! Your bookshelf is empty :(";
					}
				?>
				<br>
					<h4> <a href="UserBookshelf.php" class="linkBtn submitBtn" style="padding: 5px 20px; background-color: #00b300"> Add book </a> 
						<?php 
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp";
							echo "|";
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp"; 
						?> 
						<a href="UserUpdateBookshelf.php" class="linkBtn updateBtn"> Update Bookshelf </a> 
						<?php
							echo "|";
						 ?>
						 <a href="UserBookshelfClean.php" class="linkBtn logoutBtn"> Clean Bookshelf </a> 
					</h4>
				<br> 
			</td>
		</tr>
		<tr height = "50px" style="background-color: #333; color: white;">
			<td colspan="3" style="padding: 25px;">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
>>>>>>> regular_user_module_final
	include ('footer.php');
?>