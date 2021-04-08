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
<link rel="stylesheet" type="text/css" href="resources/CSS/style.css">
<style>
	body
	{
	  background-image: url('resources/userHome.JPG');
	  background-size: 100%;
	}
</style>
	<table border="0" width="100%" cellspacing="0">
		<tr>
			<td align="left">
				
			</td>
			<td align="right" colspan="2">
				<br>
				<fieldset style="width: 70%" class="fieldSetBorder">
					<form method="POST" action="controller/UserLogCheck.php">
					Username &nbsp <input type="text" name="UserName" align="right"> &nbsp &nbsp &nbsp &nbsp
					Password &nbsp <input type="password" name="Password" align="right"> &nbsp &nbsp 
					<input type="checkbox" name="rememberMe"> Remember Me &nbsp | &nbsp
					<input type="submit" name="login" value="Login" class="submitBtn"> &nbsp &nbsp
				</form>
				<br> <a href="" class="linkBtn" style="margin-bottom: 2px">Login as Business User </a> &nbsp &nbsp
				</fieldset> 
				<br> <a href="./bpage/">Login as Business User </a> &nbsp &nbsp
				<br> <a href="view/UserForgotPassowrd.php" class="linkBtn">Forgot Password? </a> &nbsp &nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td>
				<a href="index.php"> <img src="resources/logo.png" width="150%" height="100" style="margin-left: 20%"> </a>
				<h3 style="margin-left: 50%"> &nbsp Welcome to eBookShelf </h3>
				<p style="margin-left: 50%"> &nbsp Connect with book reader </p>
			</td>
			<td align="center" colspan="2">
				<br>
					<form action="controller/UserRegCheck.php" method="POST" style="margin-left: 200px">
						<fieldset style="width:40%" class="fieldSetBorder" >
							<center>
								<legend style=" padding-top: 3px; padding-bottom: 3px; font-family: cursive;"> <b> Registration </b> </legend>
								<hr width="50%">
							</center>
							<table width="70%">
								<tr>
									<td> Name </td>
								</tr>
								<tr>
									<td>
										<input type="text" id="name" name="Name" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Email </td>
								</tr>
								<tr>
									<td>
										<input type="email" name="Email" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Username </td>
								</tr>
								<tr>
									<td>
										<input type="text" name="UserName" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Password </td>
								</tr>
								<tr>
									<td>
										<input type="password" name="Password" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Confirm Password </td>
								</tr>
								<tr>
									<td>
										<input type="password" name="rPassword" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Phone Number </td>
								</tr>
								<tr>
									<td>
										<input type="text" name="PhoneNumber" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Gender </td>
								</tr>
								<tr>
									<td>
										<select name = "Gender" style="width: 50%">
											<option value="Male"> Male </option> Male
											<option value="Female"> Female </option> Female
											<option value="Others"> Other </option> Other
										</select>
									</td>
								</tr>
								<tr>
									<td align="center">
										<input type="submit" name="registration" value="Create Account" class="submitBtn regBtn" style="margin-top: 20px">
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
