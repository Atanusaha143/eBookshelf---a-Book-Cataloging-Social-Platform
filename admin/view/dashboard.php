<?php
    session_start();
    include('../model/adminModel.php');
    if($_SESSION['flag'] == true && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!isset($_COOKIE['flag']))
    {
        header('location: ./expired.php');
    }
    else if($_SESSION['terminated'])
    {
        header('location: ./termination.php');
    }
    else 
    {
        header('location: ./login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <br>
    <table align='center' width='85%'>
        <tr height = "200px">
			<td>
				<?php
					echo "<br>";
					echo "<center>";
					echo " <b class = 'titleBox'> Public Posts </b>";
					echo "</center>";
					echo "<br>";
						$allPosts = getAllPosts();
						foreach($allPosts as $posts) 
						{
							 echo "<fieldset>
							 			<br>
											<table>
												<tr>
													<td style='width: 6%;'>Book Name:</td>
													<td>".$posts['bookname']."</td>
												</tr>
												<tr>
													<td colspan='2'><hr></td>
												</tr>
												<tr>
													<td>Category:</td>
													<td>".$posts['category']."</td>
												</tr>
												<tr>
													<td colspan='2'><hr></td>
												</tr>
												<tr>
													<td>Author:</td>
													<td>".$posts['authorname']."</td>
												</tr>
												<tr>
													<td colspan='2'><hr></td>
												</tr>
												<tr>
													<td>Post:</td>
													<td>".$posts['post_content']."</td>
												</tr>
												<tr>
													<td colspan='2'><hr></td>
												</tr>
												<tr>
													<td>Post By:</td>
													<td>".$posts['username']."</td>
												</tr>
												<tr>
													<td align='center' colspan='2'><a href='../controller/deletepost.php?id=".$posts['id']."'>Delete Post</a></td>
												</tr>
											</table>
										<br>
									</fieldset>";
						}
				?>
			</td>
		</tr>
    </table>
    <?php include('./footer.php');?>
    <br>
</body>
</html>