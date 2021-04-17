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
    <script src="../../assets/resources/scripts.js"></script>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <form method='POST' action='../controller/checkchat.php' class="form" onsubmit="return sendMessage()">
        <h3>Send a message to 
            <input type='text' name='username' class='messageUsername' id='messageUsername' placeholder="Enter username here">
        </h3>
        <input type="submit" value='Send'>
    </form>
    <div class="container" id="messagehint"></div>
    <?php include('./footer.php') ?>
</body>
</html>