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
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <div class = 'form'>
        <form action='../controller/addadmincheck.php' method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td align="right"><label>Full Name:</label></td>
                    <td><input type='text' name='fullname'/></td>
                </tr>
                <tr>
                    <td align="right"><label>Email:</label></td>
                    <td><input type='email' name='email'/></td>
                </tr>
                <tr>
                    <td align="right"><label>Phone:</label></td>
                    <td><input type='text' name='phone' value="+88"/></td>
                </tr>
                <tr>
                    <td align="right"><label>Date of Birth:</label></td>
                    <td><input type='date' name='dateOfBirth'/></td>
                </tr>
                <tr>
                    <td align="right"><label>Username:</label></td>
                    <td><input type='text' name='username'/></td>
                </tr>
                <tr>
                    <td align="right"><label>Password:</label></td>
                    <td><input type='password' name='password'/></td>
                </tr>
                <tr>
                    <td align="right"><label>Confirm Password:</label></td>
                    <td><input type='password' name='confirmpassword'/></td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Profile Picture:</label>
                    </td>
                    <td align="center">
                        <input type='file' name='propic'>
                    </td>
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