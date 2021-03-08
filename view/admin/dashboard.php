<?php
    session_start();
    echo $_COOKIE['flag'];
    //print_r($_SESSION);
    if($_SESSION['flag'] == true && isset($_COOKIE['flag']))
    {
        if(isset($_SESSION['type']) == 'admin')
        {
            $dataString = file_get_contents('../../model/admin.json');
            $dataJSON = json_decode($dataString, true);
            
            foreach($dataJSON as $user)
            {
                if($_SESSION['id'] == $user['id'])
                {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['fullname'] = $user['fullname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['dateOfBirth'] = $user['dateOfBirth'];
                    $_SESSION['phone'] = $user['phone'];
                    $_SESSION['regdate'] = $user['regdate'];
                }
            }
        }
    }
    else if(!isset($_COOKIE['flag']))
    {
        echo "Session expired, please log in again!";
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
    <title>Dashboard</title>
</head>
<body background="../../images/assets/background.jpg">
    <?php include('./adminheader.php'); ?>
    <fieldset>
    <br>
        <nav>
            <a href="./dashboard.php">Dashboard</a> ||
            <a href="./profile.php"><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./addtype.php">Add New User</a> ||
            <a href="./search.php">Search</a> ||
            <a href="../../controller/logout.php">Log Out</a>
        </nav>
        <br>
    </fieldset>
    
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
    <?php include('../footer.php');?>
</body>
</html>