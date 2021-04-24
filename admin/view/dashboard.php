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
							 echo "<fieldset>";
							 echo "<br>";
							 echo "<table>";
						     echo "<tr>";
						     echo "<td style='width: 6%;'>Book Name:</td>";
						     echo "<td>".$posts['bookname']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Category:</td>";
						     echo "<td>".$posts['category']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Author:</td>";
						     echo "<td>".$posts['authorname']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Post:</td>";
						     echo "<td>".$posts['post_content']."</td>";
						     echo "</tr>";
						     echo "<tr><td><hr></td></tr>";
						     echo "<tr>";
						     echo "<td>Post By:</td>";
						     echo "<td>".$posts['username']."</td>";
						     echo "</tr>";
						     echo "</table>";
						     echo "<br>";
						     echo "</fieldset>";
						}
				?>
			</td>
		</tr>
    </table>
    <?php include('./footer.php');?>
    <br>
</body>
</html>