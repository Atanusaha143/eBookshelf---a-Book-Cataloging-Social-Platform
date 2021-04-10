<?php
    session_start();
    if($_SESSION['flag'] == true && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!isset($_COOKIE['flag']))
    {
        header('location: ./expired.php');
        // echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        // return;
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
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    
    <table width='85%'>
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
    <br>
</body>
</html>