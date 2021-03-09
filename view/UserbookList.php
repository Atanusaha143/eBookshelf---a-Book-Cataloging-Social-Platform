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
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
				<a href="UserHome.php"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="3" align="center">
				<h3> 
					<u>
						<?php echo $_SESSION['Name']; ?>'s Bookshelf
					</u> 
				</h3>
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
								//echo $selected."</br>";
							}
							fclose($book_data);
						}
					}
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
					<h4> <a href="UserBookshelf.php"> Create Bookshelf </a> 
						<?php 
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp";
							echo "|";
							echo "&nbsp";
							echo "&nbsp";
							echo "&nbsp"; 
						?> 
						<a href="UserBookshelfClean.php"> Clean Bookshelf </a> 
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
	include ('footer.php');
?>