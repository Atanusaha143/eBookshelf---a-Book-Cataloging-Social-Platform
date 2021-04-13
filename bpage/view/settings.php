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
    }
    else
    {
        header('location: ./login.php');
    }
?>

<?php
    $bpageDetails = getBpageInfoByID($_SESSION['id']);
    $bpageDetails = mysqli_fetch_assoc($bpageDetails);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title><?php echo $bpageDetails['name']; ?></title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <?php include('./menu.php'); ?>
    <div class="menu">
        <table align="center">
            <tr>
                <td>
                    <a href="./profile.php">Go Back</a>
                </td>
            </tr>
        </table>
    </div>
    <?php include('./footer.php'); ?>
    <script src='../../assets/scripts.js'></script>
</body>
</html>