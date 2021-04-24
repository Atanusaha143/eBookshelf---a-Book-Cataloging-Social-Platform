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
<<<<<<< HEAD
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Search for a User</title>
    <script src="../../assets/resources/scripts.js"></script>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class="form">
        <h3>What would you like to search for?</h3>
        <form method="GET" action="../controller/searchprocess.php" onsubmit="return searchValidate()">
            <select name='type' id='type'>
=======
    <title>Search for an Item</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <center>
        <h3>What would you like to search for?</h3>
<<<<<<< HEAD
        <form method="GET" action="../controller/searchprocess.php">
=======
<<<<<<< HEAD:admin/view/search.php
        <form method="GET" action="../../controller/admin/searchprocess.php">
=======
        <form method="GET" action="../controller/searchprocess.php">
>>>>>>> business_page_module:bpage/view/search.php
>>>>>>> main
            <select name='type'>
>>>>>>> regular_user_module_final
                <option value='admin'>
                    Administrator
                </option>
                <option value='ruser'>
                    Regular User
                </option>
                <option value='bpage'>
                    Business Page
                </option>
<<<<<<< HEAD
                <option selected disabled hidden value='disabled'>
                    Search for a user
=======
                <option selected disabled hidden>
                    Search for an user
>>>>>>> regular_user_module_final
                </option>
            </select>
            <br><br>
            Search By:
<<<<<<< HEAD
            <input type='radio' name='searchopt' id='id' value='id'>ID
            <input type='radio' name='searchopt' id='username' value='username'>Name
            <br><br>
            <input type='text' name='search' id='searchText' placeholder="Type a name or ID here">
            <br><br>
            <input type='submit' value='Search'>
            <br>
            <div id='searchhint1'></div>
            <div id='searchhint2'></div>
            <div id='searchhint3'></div>
        </form>
    </div>
=======
            <input type='radio' name='searchopt' value='id'>ID
            <input type='radio' name='searchopt' value='name'>Name
            <br><br>
            <input type='text' name='search' placeholder="Type a name or ID here">
            <br><br>
            <input type='submit' value='Search'>
        </form>
    </center>
>>>>>>> regular_user_module_final
    <?php include('./footer.php'); ?>
</body>
</html>