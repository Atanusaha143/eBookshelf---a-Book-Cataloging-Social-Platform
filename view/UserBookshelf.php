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
<script src="../resources/JS/script.js"></script>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
				<a href="UserbookList.php" class="linkBtn gobackBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="3" align="center">
				<br>
					<h4 class="title"> All Listed Books </h4>
				<br>
					<?php
						require_once('../model/dbConnection.php');
						require_once('../model/userModel.php');
						$books = getAllBooks();
						echo "<table border = 10 cellspacing = 0 style='margin: 25px'>
							<tr>
								<th style='padding: 15px'>Book Name</th>
								<th style='padding: 15px'>Author Name</th>
								<th style='padding: 15px'>Details</th>
								<th style='padding: 15px'>Operations</th>
							</tr>";
						for($i = 0; $i < count($books); $i++)
						{
							echo "<tr>
									 <td style='padding: 15px'>{$books[$i]['bookname']}</td>
									 <td style='padding: 15px'>{$books[$i]['authorname']}</td>
									 <td style='padding: 15px'>{$books[$i]['details']}</td>
									 <td align='center'>
									 	<a href='../controller/UserBookshelfCheck.php?id={$books[$i]['id']}' class='submitBtn linkBtn' style='padding: 10px' id='add' onclick='changeLinkName()'>Add</a>
									 </td>
								</tr>";
						}
						echo "</table>";

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