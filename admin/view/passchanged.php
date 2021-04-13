<?php 
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        header('location: ./expired.php');
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
    <title>Password Changed!</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <div class="container">
        <h3>Password changed successfully!</h3>
        <a href="./dashboard.php" class="link">Go Back</a>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>