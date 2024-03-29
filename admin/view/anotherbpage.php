<?php
    session_start();
    include('../model/adminModel.php');
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        $bpageDetails = getBpageInfoByID($_GET['id']);
        $bpageDetails = mysqli_fetch_assoc($bpageDetails);
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
    <title><?php echo $bpageDetails['name']; ?></title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    
        <table width='100%'>
            <tr>
                <td>
                <div class='data'>
                    <table align="center" border="1px solid black">
                        <tr>
                            <td align="right">
                                <b>User Type:</b>
                            </td>
                            <td width='40%'>
                                Business Page
                            </td>
                            <td rowspan="6">
                                <img src= '<?php echo "../../assets/profile/bpage/".$bpageDetails['photo']; ?>' height="250">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Name:</b>
                            </td>
                            <td>
                                <?php echo $bpageDetails['name']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Email:</b>
                            </td>
                            <td>
                                <?php echo $bpageDetails['email']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Username:</b>
                            </td>
                            <td>
                                <?php echo $bpageDetails['username']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Registration Date:</b>
                            </td>
                            <td>
                                <?php echo $bpageDetails['regdate']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <b>Status:</b>
                            </td>
                            <td>
                                <?php echo $bpageDetails['status']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <a href="../controller/restrictbpage.php?username=<?php echo $bpageDetails['username']; ?>">Restrict User</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <a href="./updatebpage.php?id=<?php echo $bpageDetails['id']; ?>">Update User Info</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <a href="./allusers.php">Go Back</a>
                            </td>
                        </tr>
                    </table>
                    </div>
                    <br>
                </td>
            </tr>
        </table>
    <?php include('./footer.php'); ?>
</body>
</html>