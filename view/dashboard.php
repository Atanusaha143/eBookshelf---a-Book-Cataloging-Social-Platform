<?php
    session_start();
    if(isset($_SESSION['flag']) == true)
    {
        if(isset($_SESSION['type']) == 'admin')
        {
            $dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString, true);
            
            foreach($dataJSON as $user)
            {
                if($_SESSION['id'] == $user['id'])
                {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['fullname'] = $user['fullname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['dateOfBirth'] = $user['dateOfBirth'];
                    $_SESSION['phone'] = $user['phone'];
                    $_SESSION['regdate'] = $user['regdate'];
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <fieldset>
    <br>
        <nav>
            <a href="./dashboard.php">Dashboard</a> ||
            <a href="./profile.php"><?php echo $_SESSION['fullname']; ?></a> ||
            <a href="./addUser.php">Add New User</a> ||
            <a href="./search.php">Search</a> ||
            <a href="../controller/logout.php">Log Out</a>
        </nav>
        <br>
    </fieldset>
    
    <table border="1px solid black" width='100%'>
        <tr>
            <th>
                Messages
            </th>
            <th>
                Posts
            </th>
            <th>
                Notifications
            </th>
        </tr>
        <tr>
            <td width='17%'>
                
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "BOOKS"; ?>
            </td>
            <td>
                <br><br><br><br><br><br>
                <?php echo "BOOKS"; ?>
            </td>
        </tr>
    </table>
</body>
</html>

<!-- <table>
                    <tr>
                        <td>
                            <label>Account</label>
                            <br>
                            <hr>
                            <ul>
                                <li><a href='./dashboard.php'>Dashboard</a></li>
                                <li><a href='./profile.php'>View Profile</a></li>
                                <li><a href='./editprofile.php'>Edit Profile</a></li>
                                <li><a href='./changepropic.php'>Change Profile Picture</a></li>
                                <li><a href='./changepass'>Change Password</a></li>
                                <li><a href='./logout.php'>Logout</a></li>
                            </ul>
                        </td>
                    </tr>
                </table> -->