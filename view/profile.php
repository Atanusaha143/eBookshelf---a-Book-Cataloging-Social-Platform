<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['fullname']; ?></title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <fieldset>
    <br>
        <nav>
            <a href="./profile.php"><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./addUser.php">Add a new user</a> ||
            <a href="./search.php">Search</a> ||
            <a href="../controller/logout.php">Log Out</a>
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
                    <li><a href='./dashboard.php'>Dashboard</a></li>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass'>Change Password</a></li>
                    <li><a href='./logout.php'>Logout</a></li>
                </ul>
            </td>
            <td>
                
                <table align="center" border="1px solid black">
                    <tr>
                        <td>
                            User Type:
                        </td>
                        <td>
                            <?php echo $_SESSION['type']; ?>
                        </td>
                        <td rowspan="6">
                            <img src= '<?php echo "../images/profile/".$_SESSION['id'].".jpeg"; ?>' height="250">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <?php echo $_SESSION['fullname']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <?php echo $_SESSION['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <?php echo $_SESSION['username']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                            <?php echo $_SESSION['dateOfBirth']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Registration Date:
                        </td>
                        <td>
                            <?php echo $_SESSION['regdate']; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <fieldset>
        <center>
            <label>
                Copyright © 2017
            </label>
        </center>
    </fieldset>
</body>
</html>