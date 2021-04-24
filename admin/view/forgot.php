<?php
    session_start();
    include('../model/dbCon.php');
    //print_r($_SESSION);
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        header('location: ./dashboard.php');
    }
    else
    {
        
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
    <title>Forgotten Password</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <div class='form'>
        <form action='../controller/passwordreset.php' method="POST">
                <center>
                <h2>Please enter the information below in order to reset your password.</h2>
                </center>
                <br>
                <table align="center">
                    <tr>
                        <td align="right"><label>Username:</label></td>
                        <td><input type='text' name='username'/></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Email:</label></td>
                        <td><input type='email' name='email'/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Confirm"/></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"/></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><a href="./login.php">Go Back to Admin Log In</a></td>
                    </tr>
                </table>
                <br><br><br>
        </form>
    </div>
    <?php include('./footer.php'); ?>
    
</body>
</html>