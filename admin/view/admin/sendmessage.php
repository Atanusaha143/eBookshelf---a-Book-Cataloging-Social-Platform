<?php
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        //include('../../controller/admin/validateviewprofile.php');
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
    <link rel='icon' href="../../images/assets/icon.png">
    <title>Send a message</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./adminheader.php'); ?>
    <?php include('./navbar.php'); ?>
    <center>
        <table border="1px solid black" width='80%'>
            <?php 
                $dataString = file_get_contents('../../model/messages.json');
                $dataJSON = json_decode($dataString, true);
                foreach($dataJSON as $message)
                {
                    echo
                    "<tr>
                        <td>
                            ".$message['from']."
                            <br>
                            ".$message['time']."
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            ".$message['content']."
                        </td>
                    </tr>";
                }
            ?>
        </table>
    </center>
    <center>
        <h3>Send a message to </h3>
        <form method='POST' action='#'>
            <textarea name='message'>Write your message here</textarea><br>
            <input type="submit" value='Send'>
        </form>
    </center>
    <?php include('../footer.php') ?>
</body>
</html>