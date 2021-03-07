<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Create Post";
	include ('header.php');
?>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left"> </a>
				&nbsp | &nbsp
				<a href="UserLogout.php"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<form>
						<fieldset style="width: 40%">
						<legend>
							<b> Create Post </b>
						</legend>
						<table>
							<tr>
								<td>
									Book Name
								</td>
								<td>
									<input type="text" name="bookName" style="width: 150%"> 
								</td>
							</tr>
							<tr>
								<td> Author </td>
								<td>
									<input type="text" name="bookAuthor" style="width: 150%">
								</td>
							</tr>
							<tr>
								<td> Post Content </td>
								<td>
									<textarea>
										<input type="text" name="postContent">
									</textarea>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="post" value="Post">
								</td>
							</tr>
						</table>
					</fieldset>
					</form>
				<br> 
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