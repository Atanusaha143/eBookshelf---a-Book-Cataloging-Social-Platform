<?php
    session_start();
    if(isset($_SESSION['flag']))
    {
        header('location: ../controller/redirect.php');
    }
    else
    {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../images/assets/icon.png'>
    <title>Sign Up</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='../controller/regcheck.php' method="POST">
            <fieldset>
                <legend>
                    <b>SIGN UP</b>
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
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Sign up"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
