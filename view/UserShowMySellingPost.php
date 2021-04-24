<!-- Using DB -->
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Profile";
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
				<a href="UserSell.php" class="linkBtn gobackBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr>
			<td>
					<?php
					require_once('../model/dbConnection.php');
					require_once('../model/userModel.php');
					$username = $_SESSION['UserName'];
					$userSell = getUserSellPostByUsername($username);
					if($userSell)
					{
						for ($i=0; $i <count($userSell) ; $i++) 
						{ 
							echo "

								<tr height = '200px'>
									<td colspan='2' align='center'>
										<br>
										<fieldset style='width: 35%'' class='fieldSetBorder'>
											<table border='0'>
												<tr>
													<td>
														<b>Book Name:</b>
													</td>
													<td colspan='2'>";
														echo $userSell[$i]['bookname'];
													echo "</td>
													<td rowspan='5'>
														&nbsp &nbsp &nbsp &nbsp &nbsp
													</td>
													<td>";
														
																$path = '../resources/img/Sell/'.$userSell[$i]['photo']; 
																echo '&nbsp &nbsp &nbsp &nbsp <img src="'.$path .'" alt="No Profile Picture" height="200px" />';
													
													
												echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Author Name:</b>
													</td>
													<td colspan='2'>";
														echo $userSell[$i]['authorname'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Category:</b>
													</td>
													<td>";
														echo $userSell[$i]['category'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Book Condition:</b>
													</td>
													<td>";
														echo $userSell[$i]['book_condition'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Price:</b>
													</td>
													<td>";
														echo $userSell[$i]['price']." BDT";
													echo "</td>
												</tr>
											</table>
											<center>
											<br>
											<a href='UserUpdateMySellingPost.php?id={$userSell[$i]['id']}' class='updateBtn linkBtn' style='padding: 10px'>Update Post</a>
											<a href='../controller/UserSellCleanCheck.php?id={$userSell[$i]['id']}&bookname={$userSell[$i]['bookname']}' class='logoutBtn linkBtn' style='padding: 10px'>Delete Post</a>
											</center>
											<br>
										</fieldset>
										<br> 
									</td>
								</tr>
							";
						}
					}
					else
					{
						echo "
							<center>Nothing to show! :(</center>
						";
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
