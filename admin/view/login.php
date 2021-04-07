<?php
    session_start();
    include('../model/dbCon.php');
    //print_r($_SESSION);
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        header('location: ./dashboard.php');
    }
    else
    {
        //header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='../images/assets/icon.png'>
    <link rel='stylesheet' href="../../assets/style.css">
    <title>eBookShelf</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <div class='form'>
        <form action='../controller/logincheck.php' method="POST">
            <center>
                <br>
                <h2>Administrator Panel</h2>
                <table align="center">
                    <tr>
                        <td align="right"><label>Username:</label></td>
                        <td><input type='text' name='username'/></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Password:</label></td>
                        <td><input type='password' name='password'/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' value="Log In"></td>
                    </tr>
                    <tr>
                        <td align='center' colspan="2"><input type='checkbox'>Remember Me</td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><a href="./forgot.php"><br>Forgot Password?</a></td>
                    </tr>
                </table>
                <br><br><br>
            </center>
        </form>
    </div>
    <?php include('./footer.php'); ?>
</body>
</html>