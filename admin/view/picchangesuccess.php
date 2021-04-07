<?php 
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        return;
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
    <link rel='icon' href="../images/assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Password Changed!</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('../header.php'); ?>
    <div width='100px'>
        <center>
            <h3>Profile pic changed successfully!</h3>
            <a href="./dashboard.php">Go Back</a>
        </center>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>