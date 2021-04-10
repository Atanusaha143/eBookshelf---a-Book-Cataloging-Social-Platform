<?php
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        //include('../../controller/admin/validateviewprofile.php');
    }
    else if(!(isset($_COOKIE['flag'])))
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
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Send a message</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <center>
        <form method='POST' action='./chat.php' class="form">
            <h3>Send a message to <input type='text' class='messageUsername'></h3>
            <textarea placeholder="Write your message here" name='message'></textarea><br>
            <input type="submit" value='Send'>
        </form>
    </center>
    <?php include('./footer.php') ?>
</body>
</html>