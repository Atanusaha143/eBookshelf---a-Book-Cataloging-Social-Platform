<?php 
    session_start();
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
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
    <title>Add User</title>
    <script src='../../assets/resources/scripts.js'></script>
</head>
<body>
    <?php include('./header.php'); ?>
    <div width='100px' class='form'>
            <form action="../controller/changepassword.php" method='POST' onsubmit="return passwordChangeCheck()">
                <h2>Enter the following fields to change your password.</h2>
                <table>
                    <tr>
                        <td align="right">
                            <b>Current Password:</b>
                        </td>
                        <td>
                            <input type='password' name='currentpass' id='currentpass'>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>New Password:</b>
                        </td>
                        <td>
                            <input type='password' name='newpass' id='newpass'>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Confirm Password:</b>
                        </td>
                        <td>
                            <input type='password' name='confirmpass' id='confirmpass'>
                        </td>
                    </tr>
                </table>
                <input type='submit'><br><br>
                <a href="./settings.php">Go Back</a>
                <div id='changepasshint'></div>
            </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>