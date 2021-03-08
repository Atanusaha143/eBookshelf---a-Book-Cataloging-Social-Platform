<?php 
    session_start();
    if(isset($_SESSION['flag']))
    {

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
    <title>Change Photograph</title>
</head>
<body background="../../images/assets/background.jpg">
    <?php include('./adminheader.php'); ?>
    <fieldset>
    <br>
        <nav>
            <a href="./dashboard.php">Dashboard</a> ||
            <a href="./profile.php"><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./addtype.php">Add a new user</a> ||
            <a href="./search.php">Search</a> ||
            <a href="../../controller/logout.php">Log Out</a>
        </nav>
    <br>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
                <label>Menu</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass'>Change Password</a></li>
                </ul>
            </td>
            <td>
                <form>
                    <table align="center" border="1px solid black">
                        <tr>
                            <td align="center">
                                <img src= '<?php echo "../../images/profile/".$_SESSION['id'].".jpeg"; ?>' height="250">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type='file'/>
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
                <br>
            </td>
        </tr>
    </table>
    <?php include('../footer.php'); ?>
</body>
</html>