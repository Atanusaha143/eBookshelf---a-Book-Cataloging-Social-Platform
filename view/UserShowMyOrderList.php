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
				<a href="UserBuy.php" class="linkBtn gobackBtn"> Go Back </a>
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
					$buyername = $_SESSION['Name'];
					$userSell = getPurchaseByBuyername($buyername);
					if($userSell)
					{
						for ($i=0; $i <count($userSell) ; $i++) 
						{ 
							echo " <br> <center>
								<fieldset style='width: 30%'' class='fieldSetBorder'>
									<table border='0' align='center'>
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
										<tr> <td colspan='2'> <hr> </td> </tr>
										<tr>
											<td>
												<b>Trx ID:</b>
											</td>
											<td>";
												echo $userSell[$i]['trxId'];
											echo "</td>
										</tr>
										<tr> <td colspan='2'> <hr> </td> </tr>
										<tr>
											<td>
												<b>Address:</b>
											</td>
											<td>";
												 echo $userSell[$i]['shippingaddress'];
											echo "</td>
										</tr>
										<tr> <td colspan='2'> <hr> </td> </tr>
										<tr>
											<td>
												<b>Seller:</b>
											</td>
											<td>";
												 echo $userSell[$i]['sellername'];
											echo "</td>
										</tr>
									</table>
								</fieldset>
								</center>
								<br>
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
