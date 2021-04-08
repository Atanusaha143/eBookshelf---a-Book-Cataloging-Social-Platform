<?php 
    session_start();
    include('../model/adminModel.php');
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        return;
    }
    else
    {
        header('location: ./login.php');
    }
?>

<?php  
    //include('../model/dbCon.php');
    
    $connection = connect();
    $sql = "select * from messages where id in (select max(id) from messages where to_user = ".$_SESSION['id']." GROUP by from_user)";
    $result = mysqli_query($connection, $sql);
    //$result = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Document</title>
</head>
<body>
    <?php include('./header.php');?>
    <?php include('./navbar.php');?>
    <div class='messageBar'>
        <table border="1">
            <?php 
            while($row = mysqli_fetch_assoc($result))
            {
                $sqlfullname = "select DISTINCT admin.fullname from admin, messages where admin.id = ".$row['from_user'];
                $fullname = mysqli_query($connection, $sqlfullname);
                $fullname = mysqli_fetch_assoc($fullname);

                echo "<tr>
                <td>
                    ".$row['time']."
                </td>
                <td rowspan='2'>"
                    .$row['content'].
                    "
                </td>
                </tr>
                <tr>
                    <td>
                        ".$fullname['fullname']."
                    </td>
                </tr>
                <br>"; 
            }?>   
        </table>
    </div>
</body>
</html>