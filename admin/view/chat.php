<?php 
    session_start();
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        header('location: ./expired.php');
        // echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        // return;
    }
    else
    {
        header('location: ./login.php');
    }
?>

<?php
    include('../model/adminModel.php');
    $messages = getMessages($_SESSION['id'], '2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Chat</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class='chatbox'>
        <?php
            while($row = mysqli_fetch_assoc($messages))
            {
                if($row['to_user'] == $_SESSION['id'])
                {
                    echo $row['content'].'<br>';
                }
                else
                {
                    echo $row['content'].'<hr>';
                }
            }
        ?>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>