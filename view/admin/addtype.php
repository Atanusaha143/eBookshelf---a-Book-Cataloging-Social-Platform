
<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {

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
<body background="../../images/assets/background.jpg">
    <?php include('./adminheader.php'); ?>
    <div width='100px'>
        
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>