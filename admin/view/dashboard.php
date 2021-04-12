<?php
    session_start();
    if($_SESSION['flag'] == true && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!isset($_COOKIE['flag']))
    {
        header('location: ./expired.php');
    }
    else if($_SESSION['terminated'])
    {
        header('location: ./termination.php');
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
    <title>Dashboard</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <br><br>
    <table width='85%'>
        <tr>
            <td align='center'>
                Username
            </td>
            <td align='center'>
                Posted At: Time/Date
            </td>
            <td align="center">
                This is where the post content will appear
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
            <td>
                <br>
            </td>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td align='center'>
                Username2
            </td>
            <td align='center'>
                Posted At: Time/Date
            </td>
            <td align="center">
                This will be a book review
            </td>
        </tr>
        <tr>
            <td>
                <br>
            </td>
            <td>
                <br>
            </td>
            <td>
                <br>
            </td>
        </tr>
        <tr>
            <td align='center'>
                Username3
            </td>
            <td align='center'>
                Posted At: Time/Date
            </td>
            <td align="center">
                This is another post made by a user
            </td>
        </tr>
    </table>
    <?php include('./footer.php');?>
    <br>
</body>
</html>