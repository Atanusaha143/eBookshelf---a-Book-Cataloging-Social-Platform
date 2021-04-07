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
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <table  width='85%' align="center">
        <tr >
            <td border="1px solid black" rowspan="2">
                <label>Menu</label>
                <br>
                <ul>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                </ul>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
    <script src='../../assets/scripts.js'></script>
</body>
</html>