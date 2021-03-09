<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgotten Password</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div>
        <form action='../controller/passwordcheck.php' method="POST">
            <fieldset>
                <legend>
                    <b>FORGOT PASSWORD</b>
                </legend>
                <br>
                <center>
                <h2>Please enter your email in order to reset your password.</h2>
                </center>
                <br>
                <table align="center">
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type='text' name='email'/></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Confirm"/></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"/></td>
                    </tr>
                </table>
                <br><br><br>
            </fieldset>
        </form>
    </div>
    <?php include('./footer.php'); ?>
    
</body>
</html>