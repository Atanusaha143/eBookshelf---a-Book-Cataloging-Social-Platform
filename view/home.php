<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../images/assets/icon.png'>
    <title>eBookShelf</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./homenav.php'); ?>
    <div width='100px'>
    <table border="0" width="100%" cellspacing="0">
		<tr>
			<!--<td align="left">
				<a href="index.php"> <img src="resources/logo.png" width="100%" height="100"> </a>
			</td>
			 <td align="right" colspan="2">
				<form method="POST" action="controller/UserLogCheck.php">
                    Username &nbsp <input type="text" name="UserName" align="right"> &nbsp &nbsp &nbsp &nbsp
                    Password &nbsp <input type="password" name="Password" align="right"> &nbsp &nbsp 
                    <input type="submit" name="login" value="Login"> &nbsp &nbsp
			    </form> 
			</td> -->
		</tr>
		<tr height = "200px">
			<td>
                <center>
                    <h2> &nbsp Welcome to eBookShelf </h2>
                    <br>
                    <p> &nbsp Connect with book readers all over the world </p>
                </center>
				
			</td>
			<!-- <td align="center">
				<br>
					<form action="controller/UserRegCheck.php" method="POST">
						<fieldset style="width:70px">
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
										<input type="submit" name="registration" value="Create Account">
									</td>
								</tr>
							</table>
						</fieldset>
					</form>
				<br>
			</td> -->
		</tr>
	</table>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>