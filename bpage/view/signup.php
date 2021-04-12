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
    <link rel='icon' href='../../assets/images/icon.png'>
    <link rel='stylesheet' href='../../assets/resources/style.css'>
    <title>Sign Up</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <div class='form'>
        <form action='../controller/regcheck.php' method="POST" enctype="multipart/form-data">
                <h2>Become a Seller today!</h2>
                <table align="center">
                    <tr>
                        <td align="right">Business Name:</td>
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
                        <td align="right">Username:</td>
                        <td><input type='text' name='username'/></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='text' name='password'/></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm Password:</td>
                        <td><input type='text' name='confirmpassword'/></td>
                    </tr>
                    <tr>
                        <td align="right">Photo:</td>
                        <td><input type='file' name='propic'/></td>
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
                            <a href='./login.php'>Go Back</a>
                        </td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>
