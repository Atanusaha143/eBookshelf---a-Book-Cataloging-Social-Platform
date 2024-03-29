<?php 
    session_start();
    include('../model/bpageModel.php');
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        header('location: ./expired.php');
        // echo "Session expired, please <a href='./login.php'>Log In</a> again!";
        // return;
    }
    else
    {
        header('location: ./login.php');
    }
?>

<?php

    $bpagedetails = getBpageInfoByID($_SESSION['id']);
    //print_r($bpagedetails);
    $bpagedetails = mysqli_fetch_assoc($bpagedetails);
    //print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title><?php echo $bpagedetails['name']; ?></title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <table  width='85%' align="center">
        <tr >
            <td>
                <div class='data'>
                    <table align="center" border="1px solid black">
                        <tr>
                            <td align="right">
                                <b>User Type:</b>
                            </td>
                            <td width='40%'>
                                <?php echo $_SESSION['type']; ?>
                            </td>
                            <td rowspan="6">
                                <img src="../../assets/profile/bpage/<?php echo $bpagedetails['photo'];?>" height="250" alt="image not available">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Name:</b>
                            </td>
                            <td>
                                <?php echo $bpagedetails['name']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Email:</b>
                            </td>
                            <td>
                                <?php echo $bpagedetails['email']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>phone:</b>
                            </td>
                            <td>
                                <?php echo $bpagedetails['phone']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Username:</b>
                            </td>
                            <td>
                                <?php echo $bpagedetails['username']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Registration Date:</b>
                            </td>
                            <td>
                                <?php echo $bpagedetails['regdate']; ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <div class='container'>
        <a class="link" href='./settings.php'>Settings</a>
    </div>
    <?php include('./footer.php'); ?>
    <script src='../../assets/resources/scripts.js'></script>
</body>
</html>