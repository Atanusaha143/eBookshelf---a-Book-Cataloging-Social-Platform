<!DOCTYPE html>
<html>
<head>
	<title>eBookShelf</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="left">
				<a href="publicHome.html"> <img src="resources/logo.png"> </a>
			</td>
			<td align="right">
				Username &nbsp <input type="text" name="userName" align="right"> &nbsp &nbsp &nbsp &nbsp
				Password &nbsp <input type="password" name="password" align="right"> &nbsp &nbsp 
				<input type="submit" name="login" value="Login"> &nbsp &nbsp
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
					<form>
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
									<td> Phone Number </td>
									<td>
										<input type="text" name="PhoneNumber">
									</td>
								</tr>
								<tr>
									<td> Gender </td>
									<td>
										<select>
											<option value="Male"> Male </option>
											<option value="Female"> Female </option>
											<option value="Other"> Other </option>
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
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="2">
				<center> Copyright &copy 2021 </center>
			</td>
		</tr>
	</table>
</body>
</html>