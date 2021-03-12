<?php 
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        echo "Session expired, please <a href='../login.php'>Log In</a> again!";
        return;
    }
    else
    {
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for an Item</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./adminheader.php'); ?>
    <?php include('./navbar.php'); ?>
    <center>
        <h3>What would you like to search for?</h3>
        <form>
            <select name='type'>
                <option>
                    Administrator
                </option>
                <option>
                    Regular User
                </option>
                <option>
                    Business Page
                </option>
                <option selected disabled hidden>
                    Search for an user
                </option>
            </select>
            <br>
            <input type='text' name='search'>
            <br>
            <input type='submit' value='Search'>
        </form>
    </center>
</body>
</html>