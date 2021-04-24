<?php
    session_start();
    if($_SESSION['flag'] == true && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!isset($_COOKIE['flag']))
    {
        header('location: ./expired.php');
        // echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        // return;
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
    <link rel='icon' href='../../assets/images/icon.png'>
    <link rel='stylesheet' href='../../assets/resources/style.css'>
    <title>Make Sale</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class='form'>
        <form action='../controller/addsalecheck.php' method="POST" enctype="multipart/form-data">
                <h3>Let the world know about your next sale!</h3>
                <table align="center">
                    <tr>
                        <td align="right"><label>Book Title:</label></td>
                        <td><input type='text' name='name'/></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Author:</label></td>
                        <td><input type='text' name='author'/></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Synopsis:</label></td>
                        <td><input type='text' name='post_content' value=""/></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Price:</label></td>
                        <td><input type='text' name='price' value='$'/></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Photo:</label></td>
                        <td><input type='file' name='bookphoto'/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Sign up"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            <a href='./login.php'>Go Back</a>
                        </td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>