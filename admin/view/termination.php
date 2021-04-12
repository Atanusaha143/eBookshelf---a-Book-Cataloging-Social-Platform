<?php
    session_start();
    if($_SESSION['terminated'])
    {
        //header('location: ./termination.php');
    }
    else if(!isset($_COOKIE['flag']))
    {
        header('location: ./expired.php');
        // echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        // return;
    }
    else if($_SESSION['flag'] == true && isset($_COOKIE['flag']))
    {
        header('location: ./dashboard');
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
    <title>Terminated!</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <div class="container">
        <h3>Dear admin, you have been terminated. Please contact a fellow admin for re-registration.</h3>
        <h3>Proceed to <a href="./contact.php" class="link">here</a> to see who you can contact.</h3>
        <h3>Proceed to <a href="./login.php" class="link">here</a> to admin home.</h3>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>