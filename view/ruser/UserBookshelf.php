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
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="UserHome.php"> <img src="../resources/logo.png" align="left" width="100%" height="150"> </a>
				<a href="UserBookList.php" class="linkBtn"> Go Back </a>
				&nbsp | &nbsp
				<a href="UserLogout.php" class="linkBtn"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td colspan="3" align="center">
				<br>
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
						<input type="submit" name="add" value="Add" class="submitBtn" />
					</form>
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