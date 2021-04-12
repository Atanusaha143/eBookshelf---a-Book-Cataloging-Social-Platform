<?php 
    session_start();
    include('../model/bpageModel.php');
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
    //Load administrator information
    $sqladmin = "SELECT * FROM admin WHERE id = '".$_SESSION['id']."'";

    $admindetails = mysqli_query($connection, $sqladmin);
    $admindetails = mysqli_fetch_assoc($admindetails);

    //Load log in information
    $sqllogin = "SELECT * FROM adminlogin WHERE id = '".$_SESSION['id']."'";

    $logindetails = mysqli_query($connection, $sqllogin);
    $logindetails = mysqli_fetch_assoc($logindetails);

    //Combine information into one array
    $results=[];

    $results['fullname'] = $admindetails['fullname'];
    $results['email'] = $admindetails['email'];
    $results['dateOfBirth'] = $admindetails['dob'];
    $results['username'] = $logindetails['username'];
    $results['phone'] = $admindetails['phone'];
    $results['regdate'] = $admindetails['regdate'];
    $results['photo'] = $admindetails['photo'];
    //print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title><?php echo $results['fullname']; ?></title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <?php include('./menu.php'); ?>
    <div class="menu">
        <table align="center">
            <tr>
                <td>
                    <a href="./profile.php">Go Back</a>
                </td>
            </tr>
        </table>
    </div>
    <?php include('./footer.php'); ?>
    <script src='../../assets/scripts.js'></script>
</body>
</html>