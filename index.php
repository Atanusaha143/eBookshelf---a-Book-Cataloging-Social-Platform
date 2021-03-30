<?php
	$title = "eBookShelf";
	include ('view/header.php');
?>

<?php
	if(isset($_POST['rememberMe']) || isset($_COOKIE['checkLogin']))
	{
		header('location: controller/UserLogCookieCheck.php');
	}
?>

	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="left">
				<a href="index.php"> <img src="resources/logo.png" width="100%" height="100"> </a>
			</td>
			<td align="right" colspan="2">
				<br>
				<fieldset style="width: 70%">
					<form method="POST" action="controller/UserLogCheck.php">
					Username &nbsp <input type="text" name="UserName" align="right"> &nbsp &nbsp &nbsp &nbsp
					Password &nbsp <input type="password" name="Password" align="right"> &nbsp &nbsp 
					<input type="checkbox" name="rememberMe"> Remember Me &nbsp | &nbsp
					<input type="submit" name="login" value="Login" class="submitBtn"> &nbsp &nbsp
				</form>
				</fieldset> 
				<br> <a href="">Login as Business User </a> &nbsp &nbsp
				<br> <a href="view/UserForgotPassowrd.php" class="linkBtn">Forgot Password? </a> &nbsp &nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td>
				<h3> &nbsp Welcome to eBookShelf </h3>
				<br>
				<p> &nbsp Connect with book reader </p>
			</td>
			<td align="center">
				<br>
					<form action="controller/UserRegCheck.php" method="POST">
						<fieldset style="width:100px">
							<legend> <b> Registration </b> </legend>
							<table>
								<tr>
									<td> Name </td>
									<td>
										<input type="text" name="Name">
									</td>
								</tr>
								<tr>
									<td> Email </td>
									<td>
										<input type="email" name="Email">
									</td>
								</tr>
								<tr>
									<td> Username </td>
									<td>
										<input type="text" name="UserName">
									</td>
								</tr>
								<tr>
									<td> Password </td>
									<td>
										<input type="password" name="Password">
									</td>
								</tr>
								<tr>
									<td> Confirm Password </td>
									<td>
										<input type="password" name="rPassword">
									</td>
								</tr>
								<tr>
									<td> Phone Number </td>
									<td>
										<input type="text" name="PhoneNumber">
									</td>
								</tr>
								<tr>
									<td> Gender </td>
									<td>
										<select name = "Gender">
											<option value="Male"> Male </option> Male
											<option value="Female"> Female </option> Female
											<option value="Others"> Other </option> Other
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="registration" value="Create Account" class="submitBtn">
									</td>
								</tr>
							</table>
						</fieldset>
					</form>
				<br>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="2">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>


<?php
	include ('view/footer.php');
?>