<?php
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        include('../controller/validateviewprofile.php');
        include('../model/adminModel.php');
        if(isset($_GET['id']))
        {
            $userid = $_GET['id'];
            $adminDetails = getAdminInfoByID($userid);
            $adminDetails = mysqli_fetch_assoc($adminDetails);
        }
        else if(isset($_GET['username']))
        {
            $username = $_GET['username'];
            $adminDetails = getAdminInfoByUsername($username);
            $adminDetails = mysqli_fetch_assoc($adminDetails);
        }
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
    <title>Results</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <center>
        <h3>
            Found matches!
        </h3>
        <h3>
            Results:
            <?php echo $adminDetails['fullname']; ?>
        </h3>
    </center>
    <?php include('./footer.php'); ?>
</body>
</html>