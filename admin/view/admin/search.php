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
        <form method="GET" action="../../controller/admin/searchprocess.php">
            <select name='type'>
                <option value='admin'>
                    Administrator
                </option>
                <option value='ruser'>
                    Regular User
                </option>
                <option value='bpage'>
                    Business Page
                </option>
                <option selected disabled hidden>
                    Search for an user
                </option>
            </select>
            <br><br>
            Search By:
            <input type='radio' name='searchopt' value='id'>ID
            <input type='radio' name='searchopt' value='name'>Name
            <br><br>
            <input type='text' name='search' placeholder="Type a name or ID here">
            <br><br>
            <input type='submit' value='Search'>
        </form>
    </center>
</body>
</html>