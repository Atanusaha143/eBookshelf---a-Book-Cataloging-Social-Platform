<?php
    session_start();
    //print_r($_SESSION);
    if(isset($_SESSION['flag']))
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
    <link rel='stylesheet' href='../../assets/resources/style.css'>
    <title>eBookShelf</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <center>
        <div class='form'>
            <form action='../controller/logincheck.php' method="POST">
                <fieldset>
                    <legend>
                        <b>LOG IN</b>
                    </legend>
                    <br>
                    <h2>Business Page</h2>
                    <br>
                    <table align="center">
                        <tr>
                            <td align="right">Username:</td>
                            <td><input type='text' name='username'/></td>
                        </tr>
                        <tr>
                            <td align="right">Password:</td>
                            <td><input type='password' name='password'/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><input type='submit' value="Log In"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><a href="./forgot.php">Forgot Password?</a></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><a href="./signup.php">Sign up</a></td>
                        </tr>
                    </table>
                    <br><br><br>
                </fieldset>
            </form>
        </div>
    </center>
    
    <?php include('../../assets/footer.php'); ?>
</body>
</html>