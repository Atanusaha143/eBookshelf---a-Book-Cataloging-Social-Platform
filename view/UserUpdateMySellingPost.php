<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Update Sell Post";
	include ('../view/header.php');
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
				<a href="UserShowMySellingPost.php" class="linkBtn gobackBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<?php
			require_once('../model/dbConnection.php');
			require_once('../model/userModel.php');
			$id = $_GET['id'];
			$_SESSION['sessionSellId'] = $id;
			$sellInfo = getSellPostById($id);
		?>
		<tr height = "200px">
			<td colspan="2" align="center">
				<br>
					<form method="POST" action="../controller/UserUpdateSellCheck.php" enctype="multipart/form-data" onsubmit="return mySellPostValidation()">
						<fieldset style="width: 50%" class="fieldSetBorder">
						<table>
							<tr>
								<td>
									<b>Book Name:</b>
								</td>
								<td colspan="2">
									<input type="text" id="bookname" name="bookname" value="<?php echo $sellInfo['bookname']; ?>">
								</td>
								<td><b id="print1" style="color: red"></b></td>
								<td rowspan="5">

									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b> Upload Photo</b>
									<br> <br>
									<?php 
										$path = '../resources/img/Sell/'.$sellInfo['photo']; 
										echo '&nbsp &nbsp &nbsp &nbsp <img src="'.$path .'" alt="No Profile Picture" height="200px" />';
									 ?>
									<br> <br>
									&nbsp &nbsp &nbsp &nbsp &nbsp <input type="file" id="image" name="profilePic" value="<?php echo $sellInfo['photo']; ?>">
								</td>
								<td><b id="print2" style="color: red"></b></td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Author Name:</b>
								</td>
								<td>
									<input type="text" id="authorname" name="authorname" size="50%" value="<?php echo $sellInfo['authorname']; ?>" >
								</td>
								<td><b id="print3" style="color: red"></b></td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Category:</b>
								</td>
								<td>
									<select name = "Category">
									<option value="Action and adventure"> Action and adventure </option> Action and adventure
									<option value="Alternate history"> Alternate history </option> Alternate history
									<option value="Anthology"> Anthology </option> Anthology
									<option value="Chick lit"> Chick lit </option> Chick lit
									<option value="Children's"> Children's </option> Children's
									<option value="Classic "> Classic  </option> Classic 
									<option value="Comic book"> Comic book </option> Comic book
									<option value="Coming-of-age"> Coming-of-age </option> Coming-of-age
									<option value="Drama"> Drama </option> Drama
									<option value="Fairytale"> Fairytale </option> Fairytale
									<option value="Fantasy"> Fantasy </option> Fantasy
									<option value="Graphic novel"> Graphic novel </option> Graphic novel
									<option value="Historical fiction"> Historical fiction </option> Historical fiction
									<option value="Horror"> Horror </option> Horror
									<option value="Motivational"> Motivational </option> Motivational
									<option value="Mystery"> Mystery </option> Mystery'
									<option value="Paranormal romance"> Paranormal romance </option> Paranormal romance
									<option value="Picture book"> Picture book </option> Picture book
									<option value="Poetry"> Poetry </option> Poetry
									<option value="Political thriller"> Political thriller </option> Political thriller
									<option value="Romance"> Romance </option> Romance
									<option value="Satire"> Satire </option> Satire
									<option value="Science fiction"> Science fiction </option> Science fiction
									<option value="Short story"> Short story </option> Short story
									<option value="Suspense"> Suspense </option> Suspense
									<option value="Thriller"> Thriller </option> Thriller
									<option value="Western"> Western </option> Western
									<option value="Young adult"> Young adult </option> Young adult
								</select>
								</td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Book Condition:</b>
								</td>
								<td>
									<input type="radio" id="new" name="condition" value="">
									<label for="new">New</label>
									<input type="radio" id="old" name="condition" value="Old">
									<label for="old">Old</label><br>
								</td>
								<td><b id="print4" style="color: red"></b></td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>

							<tr>
								<td>
									<b>Price:</b>
								</td>
								<td>
									<input type="text" id="Price" name="price" size="50%" value="<?php echo $sellInfo['price']; ?>" >
								</td>
								<td><b id="print5" style="color: red"></b></td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
													<tr>
							</tr>
							<tr>
								<td align="center" colspan="2">
									<input type="submit" name="update" value="Update" class="submitBtn" style="padding: 5px 20px">
								</td>
							</tr>
						</table>
					</fieldset>
					</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px" style="background-color: #333; color: white;">
			<td colspan="3" style="padding: 25px;">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('../view/footer.php');
?>