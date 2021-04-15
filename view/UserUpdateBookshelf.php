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
				<a href="UserBooklist.php" class="linkBtn gobackBtn"> Go Back </a>
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
					
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					$bookShelf = getBookshelfByUsername($_SESSION['UserName']);
					if($bookShelf)
					{
						echo "<table border = 1 cellspacing = 0 style='margin: 25px'>
							<tr>
								<th style='padding: 15px'>Book Name</th>
								<th style='padding: 15px'>Operations</th>
							</tr>";
						for($i = 0; $i < count($bookShelf); $i++)
						{
							echo "<tr>
									 <td style='padding: 15px'>{$bookShelf[$i]['bookname']}</td>
									 <td align='center'>
									 	<a href='../controller/UserUpdateBookshelfCheck.php?id={$bookShelf[$i]['id']}' class='logoutBtn linkBtn' style='padding: 8px;' id='add' onclick='changeLinkName()'>Delete</a>
									 </td>
								</tr>";
						}
						echo "</table>";
					}
					else
					{
						echo "Oops! Your bookshelf is empty :(";
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