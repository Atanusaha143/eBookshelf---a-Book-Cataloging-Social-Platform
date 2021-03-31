<?php
    session_start();
    //echo $_COOKIE['flag'];
    //print_r($_SESSION);
    if($_SESSION['flag'] == true && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!isset($_COOKIE['flag']))
    {
        echo "Session expired, please <a href='./login.php'>Log In</a> again!";
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
    <link rel='icon' href='../images/assets/icon.png'>
    <title>Dashboard</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    
    <table border="1px solid black" width='100%'>
        <tr>
            <th>
                Messages
            </th>
            <th>
                Posts
            </th>
            <th>
                Notifications
            </th>
        </tr>
        <tr>
            <td width='17%'>
                
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "BOOKS"; ?>
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "BOOKS"; ?>
            </td>
        </tr>
    </table>
    <?php include('./footer.php');?>
</body>
</html>