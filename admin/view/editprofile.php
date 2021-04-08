<?php 
    session_start();
    include('../model/dbCon.php');
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        $connection = connect();
        $sql = "SELECT * FROM admin WHERE id = ".$_SESSION['id'];

        $result = mysqli_query($connection, $sql);
        $result = mysqli_fetch_assoc($result);
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        header('location: ./expired.php');
        // echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        // return;
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
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
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
                <div class='form'>
                    <form action="../../controller/editprofilevalidate.php" method="POST">
                        <table align="center" border="1px solid black">
                            <tr>
                                <td align="right">
                                    Name:
                                </td>
                                <td width='50%' >
                                
                                    <input size='30' type='text' value="<?php echo $result['fullname']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Email:
                                </td>
                                <td>
                                    <input size='30' type='email' value="<?php echo $result['email']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Phone:
                                </td>
                                <td>
                                    <input size='30' type='text' value="<?php echo $result['phone']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Date of Birth:
                                </td>
                                <td>
                                    <input size='30' type='date' value="<?php echo $result['dob']; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <center>
                                        <input type='submit' value="Submit">
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>