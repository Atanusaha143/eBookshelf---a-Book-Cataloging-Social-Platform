<?php
    session_start();
    //include('../model/admCon.php');
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
    <link rel='icon' href='../../assets/images/icon.png'>
    <link rel='stylesheet' href='../../assets/resources/style.css'>
    <script src="../../assets/resources/scripts.js"></script>
    <title>eBookShelf</title>
</head>
<body>
    <?php include('./header.php'); ?>
        <div class='form'>
            <form action='../controller/logincheck.php' method="POST" onsubmit="return bpageLoginCheck()">
                <br>
                <h2>Business Page</h2>
                <br>
                <table align="center">
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type='text' name='username' id='username'/></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password' id='password'/></td>
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
            </form>
        </div>
    <?php include('./footer.php'); ?>
</body>
</html>
