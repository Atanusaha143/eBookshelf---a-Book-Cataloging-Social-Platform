<?php 
    session_start();
    include('../model/adminModel.php');
    if(isset($_SESSION['flag']) && isset($_COOKIE['flag']))
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
    $results = getAdminInfoByID($_SESSION['id']);
    $results = mysqli_fetch_assoc($results);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Change Photograph</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
                <?php include('./menu.php'); ?>
            </td>
            <td>
                <div class="form">
                    <form action="../controller/propicvalidate.php" method="POST" enctype="multipart/form-data">
                        <table align="center" border="1px solid black">
                            <tr>
                                <td align="center">
                                    <img src= '<?php echo "../../assets/profile/admin/".$results['photo']; ?>' height="250">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type='file' name='propic'/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <center>
                                        <input type='submit' value="Submit">
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>