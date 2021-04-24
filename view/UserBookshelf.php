<<<<<<< HEAD
=======
<!-- Using DB -->
>>>>>>> regular_user_module_final
<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: ../');
	}
?>

<?php
	$title = "Book List";
	include ('header.php');
?>
<<<<<<< HEAD
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
=======
<script src="../resources/JS/script.js"></script>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/banner.png" align="left" width="100%" height="150"> </a>
>>>>>>> regular_user_module_final
			</td>
		</tr>
		<tr>
			<td align="right">
				<br>
<<<<<<< HEAD
				<a href="UserHome.php" class="linkBtn gobackBtn"> Go Back </a>
=======
				<a href="UserbookList.php" class="linkBtn gobackBtn"> Go Back </a>
>>>>>>> regular_user_module_final
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn logoutBtn"> Logout </a>
				<br>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="3" align="center">
				<br>
<<<<<<< HEAD
					<h4> <u> All Book Names </u> </h4>
				<br>
					<?php 

						$post_file = fopen('../model/Posts.json', 'r');
						$post_data = fread($post_file, filesize('../model/Posts.json'));
						$post_info = json_decode($post_data, true);
					?>
					<form method="POST" action="UserbookList.php">
						&nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[0]['bookName']; ?>"> <?php echo $post_info[0]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[1]['bookName']; ?>"> <?php echo $post_info[1]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[2]['bookName']; ?>"> <?php echo $post_info[2]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[3]['bookName']; ?>"> <?php echo $post_info[3]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[4]['bookName']; ?>"> <?php echo $post_info[4]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[5]['bookName']; ?>"> <?php echo $post_info[5]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[6]['bookName']; ?>"> <?php echo $post_info[6]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[7]['bookName']; ?>"> <?php echo $post_info[7]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[8]['bookName']; ?>"> <?php echo $post_info[8]['bookName']; ?> &nbsp &nbsp &nbsp &nbsp
						<input type="checkbox" name="book[]" value="<?php echo $post_info[9]['bookName']; ?>"> <?php echo $post_info[9]['bookName']; ?>
						<br>
						<br>
						<input type="submit" name="add" value="Add" class="submitBtn" style="padding: 5px 20px" />
					</form>
=======
					<h4 class="title"> All Listed Books </h4>
				<br>
					<?php
						require_once('../model/dbConnection.php');
						require_once('../model/userModel.php');
						$books = getAllBooks();
						echo "<table border = 10 cellspacing = 0 style='margin: 25px'>
							<tr>
								<th style='padding: 15px'>Book Name</th>
								<th style='padding: 15px'>Author Name</th>
								<th style='padding: 15px'>Details</th>
								<th style='padding: 15px'>Operations</th>
							</tr>";
						for($i = 0; $i < count($books); $i++)
						{
							echo "<tr>
									 <td style='padding: 15px'>{$books[$i]['bookname']}</td>
									 <td style='padding: 15px'>{$books[$i]['authorname']}</td>
									 <td style='padding: 15px'>{$books[$i]['details']}</td>
									 <td align='center'>
									 	<a href='../controller/UserBookshelfCheck.php?id={$books[$i]['id']}' class='submitBtn linkBtn' style='padding: 10px' id='add' onclick='changeLinkName()'>Add</a>
									 </td>
								</tr>";
						}
						echo "</table>";

					?>
>>>>>>> regular_user_module_final
				<br> 
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>
<?php
	include ('footer.php');
?>