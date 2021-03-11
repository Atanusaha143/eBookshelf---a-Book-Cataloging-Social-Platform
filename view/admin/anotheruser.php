<?php 
    
    
?>

<?php
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        if(!empty($_GET['userid']))
        {
            $userid = $_GET['userid'];
            if($userid[0] == 'a')
            {
                $dataString = file_get_contents('../../model/admin.json');
                $dataJSON = json_decode($dataString, true);

                foreach($dataJSON as $user)
                {
                    if($user['id'] == $userid)
                    {
                        $_GET['id'] = $user['id'];
                        $_GET['fullname'] = $user['fullname'];
                        $_GET['email'] = $user['email'];
                        $_GET['phone'] = $user['phone'];
                        $_GET['dateOfBirth'] = $user['dateOfBirth'];
                        $_GET['username'] = $user['username'];
                        $_GET['regdate'] = $user['regdate'];
                        $_GET['type'] = $user['type'];

                    }
                }
            }
            
        }
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
    <title><?php echo $_GET['fullname']; ?></title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./adminheader.php'); ?>
    <?php include('./navbar.php'); ?>
    <table border="1px solid black" width='100%'>
        <tr>
            <!-- <td border="1px solid black">
                <label>Menu</label>
                <br>
                <hr>
                <ul>
                    <li><a href='./editprofile.php'>Edit Profile</a></li>
                    <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                    <li><a href='./changepass.php'>Change Password</a></li>
                </ul>
            </td> -->
            <td>
                <table align="center" border="1px solid black">
                    <tr>
                        <td align="right">
                            <b>User Type:</b>
                        </td>
                        <td width='40%'>
                            <?php echo $_GET['type']; ?>
                        </td>
                        <td rowspan="6">
                            <img src= '<?php echo "../../images/profile/admin/".$_GET['id'].".jpeg"; ?>' height="250">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Name:</b>
                        </td>
                        <td>
                            <?php echo $_GET['fullname']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Email:</b>
                        </td>
                        <td>
                            <?php echo $_GET['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Username:</b>
                        </td>
                        <td>
                            <?php echo $_GET['username']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Date of Birth:</b>
                        </td>
                        <td>
                            <?php echo $_GET['dateOfBirth']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <b>Registration Date:</b>
                        </td>
                        <td>
                            <?php echo $_GET['regdate']; ?>
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