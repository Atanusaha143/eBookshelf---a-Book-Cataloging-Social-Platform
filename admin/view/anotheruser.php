<?php
    session_start();
    include('../model/adminModel.php');
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        //include('../controller/validateviewprofile.php');
        $adminDetails = getAdminInfoByID($_GET['userid']);
        $adminDetails = mysqli_fetch_assoc($adminDetails);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title><?php echo $adminDetails['fullname']; ?></title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class='data'>
        <table width='100%'>
            <tr>
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
                                <img src= '<?php echo "../../assets/profile/admin/".$adminDetails['photo']; ?>' height="250">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Name:</b>
                            </td>
                            <td>
                                <?php echo $adminDetails['fullname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Email:</b>
                            </td>
                            <td>
                                <?php echo $adminDetails['email']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Username:</b>
                            </td>
                            <td>
                                <?php echo $adminDetails['username']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Date of Birth:</b>
                            </td>
                            <td>
                                <?php echo $adminDetails['dob']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Registration Date:</b>
                            </td>
                            <td>
                                <?php echo $adminDetails['regdate']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <a href="./sendmessage.php?userid=<?php echo $adminDetails['id']; ?>">Send a message</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <a href="./allusers.php">Go Back</a>
                            </td>
                        </tr>
                    </table>
                    <br>
                </td>
            </tr>
        </table>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>