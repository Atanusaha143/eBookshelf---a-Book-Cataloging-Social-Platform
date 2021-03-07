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
		<tr height = "200px">
			<td width="15%">
				<ul>
					<li> <a href="UserProfile.php"> View Profile </a></li>
					<li> <a href="UserBookList.php"> Create Bookshelf </a></li>
					<li> <a href="UserPost.php"> Create Post </a></li>
					<li> <a href="UserActivities.php"> Check Activities </a></li>
					<li> <a href="UserContact.php"> Contact </a></li>
				</ul>
			</td>
			<td colspan="2">
				<h3>
					&nbsp &nbsp
				</h3> 
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