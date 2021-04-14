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
    $admindetails = getAdminInfoByID($_SESSION['id']);
    $admindetails = mysqli_fetch_assoc($admindetails);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title><?php echo $admindetails['fullname']; ?></title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <table  width='85%' align="center">
        <tr >
            <td>
                <div class='data'>
                    <table align="center">
                        <tr>
                            <td align="right">
                                <b>User Type:</b>
                            </td>
                            <td width='40%'>
                                <?php echo $_SESSION['type']; ?>
                            </td>
                            <td rowspan="8">
                                <img src="../../assets/profile/admin/<?php echo $admindetails['photo'];?>" height="250" alt="image not available">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Name:</b>
                            </td>
                            <td>
                                <?php echo $admindetails['fullname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Email:</b>
                            </td>
                            <td>
                                <?php echo $admindetails['email']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Phone:</b>
                            </td>
                            <td>
                                <?php echo $admindetails['phone']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Username:</b>
                            </td>
                            <td>
                                <?php echo $admindetails['username']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Date of Birth:</b>
                            </td>
                            <td>
                                <?php echo $admindetails['dob']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Registration Date:</b>
                            </td>
                            <td>
                                <?php echo $admindetails['regdate']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Status:</b>
                            </td>
                            <td>
                                <?php echo $admindetails['status']; ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <div class='container'>
        <a class="link" href='./settings.php'>Settings</a>
    </div>
    <?php include('./footer.php'); ?>
    <script src='../../assets/resources/scripts.js'></script>
</body>
</html>