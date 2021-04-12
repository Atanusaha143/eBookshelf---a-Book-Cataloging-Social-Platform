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
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class='form'>
        <form action="../controller/typeselectcheck.php" method='GET'>
            <h2>What type of user would you like to add?</h2>
            <table>
                <tr>
                    <td><input type='radio' name='type' value='admin'></td>
                    <td><label>Add Administrator</label></td>
                </tr>
                <tr>
                    <td><input type='radio' name='type' value='ruser'></td>
                    <td><label>Add Regular User</label></td>
                </tr>
                <tr>
                    <td><input type='radio' name='type' value='bpage'></td>
                    <td><label>Add Business Page</label></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Select'>
                    </td>
                </tr>
            </table>
            <a href="./dashboard.php">Go Back</a>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>