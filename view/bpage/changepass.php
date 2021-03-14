<?php 
    session_start();
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
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
    <link rel='icon' href='../../images/assets/icon.png'>
    <title>Add User</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('../header.php'); ?>
    <div width='100px'>
        <center>
            <form action="../../controller/changepassword.php" method='POST'>
                <h2>Enter the following fields to change your password.</h2>
                <table>
                    <tr>
                        <td align="right">
                            <b>Current Password:</b>
                        </td>
                        <td>
                            <input type='password' name='currentpass'>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>New Password:</b>
                        </td>
                        <td>
                            <input type='password' name='newpass'>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Confirm Password:</b>
                        </td>
                        <td>
                            <input type='password' name='confirmpass'>
                        </td>
                    </tr>
                </table>
                <input type='submit'><br><br>
                <a href="./dashboard.php">Go Back</a>
            </form>
        </center>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>