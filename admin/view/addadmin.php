<?php 
    session_start();
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Add User</title>
    <script src="../../assets/resources/scripts.js"></script>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class = 'form'>
    <!-- ../controller/addadmincheck.php -->
        <form action='../controller/addadmincheck.php' method="POST" enctype="multipart/form-data" onsubmit="return addAdminCheck()">
            <table>
                <tr>
                    <td align="right"><label>Full Name:</label></td>
                    <td><input type='text' name='fullname' id='fullname'/></td>
                    <td id='namehint'></td>
                </tr>
                <tr>
                    <td align="right"><label>Email:</label></td>
                    <td><input type='email' name='email' id='email'/></td>
                    <td id='emailhint'></td>
                </tr>
                <tr>
                    <td align="right"><label>Phone:</label></td>
                    <td><input type='text' name='phone' value="+88" id='phone'/></td>
                    <td id='phonehint'></td>
                </tr>
                <tr>
                    <td align="right"><label>Date of Birth:</label></td>
                    <td><input type='date' name='dateOfBirth' id='dob'/></td>
                    <td id='dobhint'></td>
                </tr>
                <tr>
                    <td align="right"><label>Username:</label></td>
                    <td><input type='text' name='username' id='username'/></td>
                    <td id='usernamehint'></td>
                </tr>
                <tr>
                    <td align="right"><label>Password:</label></td>
                    <td><input type='password' name='password' id='password'/></td>
                    <td id='passwordhint'></td>
                </tr>
                <tr>
                    <td align="right"><label>Confirm Password:</label></td>
                    <td><input type='password' name='confirmpassword' id='confirmpassword'/></td>
                    <td id='confirmpasswordhint'></td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Profile Picture:</label>
                    </td>
                    <td align="center">
                        <input type='file' name='propic' id='propic'>
                    </td>
                    <td id='propichint'></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type='submit' value="Sign up"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type='reset' value="Reset"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <a href="./addtype.php">Go Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>