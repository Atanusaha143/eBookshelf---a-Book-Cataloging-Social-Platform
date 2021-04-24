<?php 
    session_start();
    include('../model/adminModel.php');
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        $allAdmins = getAllAdmins($_SESSION['id']);
        //$allAdmins = mysqli_fetch_assoc($allAdmins);
        $allBpages = getAllBpages();
        $allRegular = getAllRegular();
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../../assets/images/icon.png">
    <link rel='stylesheet' href="../../assets/resources/style.css">
    <title>Viewing All Users</title>
</head>
<body>
    <?php include('./header.php'); ?>
    <?php include('./navbar.php'); ?>
    <table width='100%'>
        <tr>
            <th>
                <a href="./alladmins.php" class="link">ADMINS</a>
            </th>
            <th>
                <a href="./allrusers.php" class="link">REGULAR USERS</a>
            </th>
            <th>
                <a href="./allbpages.php" class="link">BUSINESS USERS</a>
            </th>
        </tr>
        <tr>
            <td>
                <div class="data">
                    <table align="center" class="data">
                        <?php
                                foreach($allAdmins as $admin)
                                {
                                    echo
                                    "<tr>
                                    <td align='center'>"
                                        .$admin['id'].
                                    "</td>
                                    <td align='center'>
                                        <a href='anotheradmin.php?id=".$admin['id']."'>"
                                            .$admin['fullname'].
                                        "</a>
                                    </td>
                                    </tr>";
                                }
                        ?>
                    </table>
                </div>
            </td>
            <td>
                <div class="data">
                    <table align="center" class="data">
                        <?php
                                foreach($allRegular as $regular)
                                {
                                    echo
                                    "<tr>
                                    <td align='center'>"
                                        .$regular['id'].
                                    "</td>
                                    <td align='center'>
                                        <a href='anotherbpage.php?id=".$regular['id']."'>"
                                            .$regular['name'].
                                        "</a>
                                    </td>
                                    </tr>";
                                }
                        ?>
                    </table>
                </div>
            </td>
            <td>
                <div class="data">
                    <table align="center" class="data">
                        <?php
                                foreach($allBpages as $bpage)
                                {
                                    echo
                                    "<tr>
                                    <td align='center'>"
                                        .$bpage['id'].
                                    "</td>
                                    <td align='center'>
                                        <a href='anotherbpage.php?id=".$bpage['id']."'>"
                                            .$bpage['name'].
                                        "</a>
                                    </td>
                                    </tr>";
                                }
                        ?>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>