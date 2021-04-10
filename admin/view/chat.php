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
    $userdata = getAdminInfoByUsername($_GET['username']);
    $userdata = mysqli_fetch_assoc($userdata);
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
    <div class="container">
        <h3><?php echo $userdata['fullname']; ?></h3>
    </div>
    <div class='chatbox'>
        <?php
            while($row = mysqli_fetch_assoc($messages))
            {
                if($row['to_user'] == $_SESSION['id'])
                {
                    echo "<div class='receiver'>"."<label class='date'>".$row['time']."</label><br>".$row['content']."</div>";
                }
                else
                {
                    echo "<div class='sender'>"."<label class='date'>".$row['time']."</label><br>".$row['content']."</div>";
                }
            }
            //substr($row['time'], -8)
        ?>
    </div>
    <div class="form">
        <form>
            <textarea placeholder="Write your message here" name='message'></textarea><br>
            <input type="submit" value='Send'>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>