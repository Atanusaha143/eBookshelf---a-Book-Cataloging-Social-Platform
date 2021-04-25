<?php
    session_start();
    include('../model/adminModel.php');
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
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
    $regularDetails = getRegularInfoByID($_GET['id']);
    $regularDetails = mysqli_fetch_assoc($regularDetails);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../../assets/images/icon.png'>
    <link rel='stylesheet' href='../../assets/resources/style.css'>
    <title>Update Regular User Information</title>
    <script src='../../assets/resources/scripts.js'></script>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <div class='form'>
        <form action='../controller/updaterusercheck.php?id=<?php echo $_GET['id']; ?>' method="POST" onsubmit="return regularUpdateInfo()">
                <b>Update Information:Regular User</b>
                <table align="center">
                    <tr>
                        <td align="right">Business Name:</td>
                        <td><input type='text' name='fullname' id='fullname' value="<?php echo $regularDetails['name']; ?>"/></td>
                        <td><div id='namehint'></div></td>
                    </tr>
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type='email' name='email' id='email' value="<?php echo $regularDetails['email']; ?>"/></td>
                        <td><div id='emailhint'></div></td>
                    </tr>
                    <tr>
                        <td align="right">Phone:</td>
                        <td><input type='text' name='phone' id='phone' value="<?php echo $regularDetails['phone_number']; ?>"/></td>
                        <td><div id='phonehint'></div></td>
                    </tr>
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type='text' name='username' id='username' value="<?php echo $regularDetails['username']; ?>"/></td>
                        <td><div id='usernamehint'></div></td>
                    </tr>
                    <tr>
                        <td align="right">Status:</td>
                        <td><input type='text' name='status' id='status' value="<?php echo $regularDetails['status']; ?>"/></td>
                        <td><div id='statushint'></div></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3"><input type='submit' value="Update"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3"><input type='reset' value="Reset"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <a href='./login.php'>Go Back</a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <div id='updatehint'></div>
                        </td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>