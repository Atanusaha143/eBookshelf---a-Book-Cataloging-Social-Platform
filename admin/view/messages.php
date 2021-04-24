<?php 
    session_start();
    include('../model/adminModel.php');
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
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

<?php  
    $connection = connect();
    $sql = "SELECT * FROM adminmessages WHERE id IN (SELECT max(id) FROM adminmessages WHERE to_user = ".$_SESSION['id']." GROUP BY from_user)";
    $result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Messages</title>
</head>
<body>
    <?php include('./header.php');?>
    <?php include('./navbar.php');?>
    <div class='container'>
        <a class='link' href="./sendmessage.php">Send Message to a New User</a>
    </div>
    <div class='messageBar'>
        <table>
            <?php 
            while($row = mysqli_fetch_assoc($result))
            {
                $sqlfullname = "select DISTINCT admin.fullname from admin, adminmessages where admin.id = ".$row['from_user'];
                $fullname = mysqli_query($connection, $sqlfullname);
                $fullname = mysqli_fetch_assoc($fullname);

                echo "<tr>
                <td class='time'>
                    ".$row['time']."
                </td>
                <td rowspan='2' class='message'>"
                    .$row['content'].
                    "
                </td>
                </tr>
                <tr>
                    <td class='name'>
                        ".$fullname['fullname']."
                    </td>
                </tr>
                <br>"; 
            }?>   
        </table>
    </div>
</body>
</html>