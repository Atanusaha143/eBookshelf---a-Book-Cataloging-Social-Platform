<?php 
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
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
    <link rel='icon' href='../../images/assets/icon.png'>
    <title><?php echo $_SESSION['fullname']; ?></title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('../bpageheader.php'); ?>
    <?php include('./navbar.php'); ?>
    <table border="1px solid black" width='100%'>
        <tr>
            <td border="1px solid black">
                <label>Menu</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                </ul>
            </td>
            <td>
                <table align="center" border="1px solid black">
                    <tr>
                        <td align="right">
                            <b>User Type:</b>
                        </td>
                        <td width='40%'>
                            <?php echo $_SESSION['type']; ?>
                        </td>
                        <td rowspan="6">
                            <img src= '<?php echo "../../images/profile/bpage/".$_SESSION['id'].".jpeg"; ?>' height="250">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Name:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['fullname']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Email:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Username:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['username']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Registration Date:</b>
                        </td>
                        <td>
                            <?php echo $_SESSION['regdate']; ?>
                        </td>
                    </tr>
                </table>
                <br>
            </td>
        </tr>
    </table>
    <?php include('../footer.php'); ?>
</body>
</html>