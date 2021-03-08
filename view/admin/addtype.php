
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
        <center>
            <form action="../../controller/typeselectcheck.php" method='GET'>
                <h2>What type of user would you like to add?</h2>
                <input type='radio' name='type' value='admin'><b>Add Administrator</b><br><br>
                <input type='radio' name='type' value='ruser'><b>Add Regular User</b><br><br>
                <input type='radio' name='type' value='bpage'><b>Add Business Page</b><br><br>
                <input type='submit'><br><br>
                <a href="./dashboard.php">Go Back</a>
            </form>
        </center>
    </div>
    <?php include('../footer.php'); ?>
</body>
</html>