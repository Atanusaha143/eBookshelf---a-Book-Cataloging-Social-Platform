<?php 
    session_start();
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
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
    <link rel='icon' href='../../images/assets/icon.png'>
    <title>Add User</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./adminheader.php'); ?>
    <div width='100px'>
        <form action='../../controller/admin/addadmincheck.php' method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>
                    <b>ADD ADMIN</b>
                </legend>
                <table align="center">
                    <tr>
                        <td align="right">Full Name:</td>
                        <td><input type='text' name='fullname'/></td>
                    </tr>
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type='email' name='email'/></td>
                    </tr>
                    <tr>
                        <td align="right">Phone:</td>
                        <td><input type='text' name='phone' value="+88"/></td>
                    </tr>
                    <tr>
                        <td align="right">Date of Birth:</td>
                        <td><input type='date' name='dateOfBirth'/></td>
                    </tr>
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type='text' name='username'/></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password'/></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm Password:</td>
                        <td><input type='password' name='confirmpassword'/></td>
                    </tr>
                    <!-- <tr>
                        <td align="right">Type of User:</td>
                        <td><input type='password' name='confirmpassword'/></td>
                    </tr> -->
                    <tr>
                        <td colspan="2">
                            Upload Profile Picture:
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
            </fieldset>
        </form>
    </div>
</body>
</html>