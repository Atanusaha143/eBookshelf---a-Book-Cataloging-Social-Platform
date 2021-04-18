<?php 
    session_start();
    include('../model/adminModel.php');
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        $result = getAdminInfoByID($_SESSION['id']);
        $result = mysqli_fetch_assoc($result);
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        header('location: ./expired.php');
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
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Edit Profile</title>
    <script src="../../assets/resources/scripts.js"></script>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <table width='100%'>
        <tr>
            <td>
                <?php include('./menu.php'); ?>
            </td>
            <td>
                <div class='form'>
                    <form action="../controller/editprofilevalidate.php" method="POST" onsubmit="return adminUpdateInfo()">
                        <table align="center">
                            <tr>
                                <td align="right">
                                    <label>Name:</label>
                                </td>
                                <td width='50%' >
                                    <input type='text' name='fullname' id='fullname' value="<?php echo $result['fullname']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <label>Email:</label>
                                </td>
                                <td>
                                    <input type='email' name='email' id='email' value="<?php echo $result['email']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <label>Phone:</label>
                                </td>
                                <td>
                                    <input type='text' name="phone" id='phone' value="<?php echo $result['phone']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <label>Date of Birth:</label>
                                </td>
                                <td>
                                    <input type='date' name="dob" id='dob' value="<?php echo $result['dob']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type='submit' value="Submit">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div id='namehint'></div>
                                    <div id='emailhint'></div>
                                    <div id='phonehint'></div>
                                    <div id='dobhint'></div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>