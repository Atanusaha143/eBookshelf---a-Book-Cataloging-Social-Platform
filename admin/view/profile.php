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
    $sqladmin = "SELECT * FROM admin WHERE id = '".$_SESSION['id']."'";

    $admindetails = mysqli_query($connection, $sqladmin);
    $admindetails = mysqli_fetch_assoc($admindetails);
    $sqllogin = "SELECT * FROM adminlogin WHERE id = '".$_SESSION['id']."'";

    $logindetails = mysqli_query($connection, $sqllogin);
    $logindetails = mysqli_fetch_assoc($logindetails);

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
    <link rel='icon' href="../images/assets/images/icon.png">
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
            <td>
                <div class='data'>
                    <table align="center" border="1px solid black">
                        <tr>
                            <td align="right">
                                <b>User Type:</b>
                            </td>
                            <td width='40%'>
                                <?php echo $_SESSION['type']; ?>
                            </td>
                            <td rowspan="6">
                                <img src="<?php echo "data:image/jpeg;base64,".base64_encode( $results['photo'] );?>" height="250" alt="image not available">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Name:</b>
                            </td>
                            <td>
                                <?php echo $results['fullname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Email:</b>
                            </td>
                            <td>
                                <?php echo $results['email']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Username:</b>
                            </td>
                            <td>
                                <?php echo $results['username']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Date of Birth:</b>
                            </td>
                            <td>
                                <?php echo $results['dateOfBirth']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Registration Date:</b>
                            </td>
                            <td>
                                <?php echo $results['regdate']; ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
    <script src='../../assets/scripts.js'></script>
</body>
</html>