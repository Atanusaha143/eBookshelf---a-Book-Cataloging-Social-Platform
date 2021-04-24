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
					$id = $_GET['id'];
					$_SESSION['sessionBookIdForOrder'] = $id;
					$userSell = getSellPostById($id);
					$userInfo = getUserByUsername($_SESSION['UserName']);
					if($userSell)
					{
							echo "
								<form action='../controller/UserBuyCheck.php' method='POST' onsubmit='return confirmBuyingOrderValidation()'>
								<tr height = '200px'>
									<td colspan='2' align='center'>
										<br>
										<fieldset style='width: 45%'' class='fieldSetBorder'>
											<table border='0'>
												<tr>
													<td>
														<b>Book Name:</b>
													</td>
													<td colspan='2'>";
														echo $userSell['bookname'];
													echo "</td>
													<td rowspan='5'>
														&nbsp &nbsp &nbsp &nbsp &nbsp
													</td>
													<td>";
														
																$path = '../resources/img/Sell/'.$userSell['photo']; 
																echo '&nbsp &nbsp &nbsp &nbsp <img src="'.$path .'" alt="No Profile Picture" height="200px" />';
													
													
												echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Author Name:</b>
													</td>
													<td colspan='2'>";
														echo $userSell['authorname'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Category:</b>
													</td>
													<td>";
														echo $userSell['category'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Book Condition:</b>
													</td>
													<td>";
														echo $userSell['book_condition'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>

												<tr>
													<td>
														<b>Price:</b>
													</td>
													<td>";
														echo $userSell['price']." BDT";
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>
												<tr>
													<td>
														<b>Buyer Name:</b>
													</td>
													<td>";
														echo $userInfo['name'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>
												<tr>
													<td>
														<b>Buyer Email:</b>
													</td>
													<td>";
														echo $userInfo['email'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>
												<tr>
													<td>
														<b>Buyer Phone Number:</b>
													</td>
													<td>";
														echo $userInfo['phone_number'];
													echo "</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>
												<tr>
													<td>
														<b>Trx ID:</b>
													</td>
													<td>";
														echo "<input type='text' id='TRX' name='trx'/>";
													echo "<td>
															<b id='print1' style='color: red'></b>
														</td>
													</td>
												</tr>
												<tr> <td colspan='2'> <hr> </td> </tr>
												<tr>
													<td>
														<b>Buyer Address:</b>
													</td>
													<td>";
														echo "<textarea id='add' rows='3' cols='20' name='address'></textarea>";
													echo "
													<td>
															<b id='print2' style='color: red'></b>
														</td>
													</td>
												</tr>
											</table>
										</fieldset>
										<center>
											<br>
											<input type='submit' name='confirmOrder' value='Confirm Order' class='submitBtn' style='padding: 10px'/>
											<br>
											</center>
										<br> 
									</td>
								</tr>
							";
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
