<?php 
    session_start();
    include('../model/adminModel.php');
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        $allAdmins = getAllAdmins($_SESSION['id']);
        //$allAdmins = mysqli_fetch_assoc($allAdmins);
        $allBpages = getAllBpages();
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
    <table border='1px solid black' width='100%'>
        <tr>
            <th>
                ADMINS
            </th>
            <th>
                REGULAR USERS
            </th>
            <th>
                BUSINESS USERS
            </th>
        </tr>
        <tr>
            <td>
                <table align="center">
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
                        // foreach($dataJSON as $values)
                        // {
                        //     if($_SESSION['id'] != $values['id'])
                        //     {   
                        //         echo 
                        //         "<tr>
                        //             <td align='center'>"
                        //                 .$values['id'].
                        //             "</td>
                        //             <td align='center'>
                        //                 <a href='anotheruser.php?userid=".$values['id']."'>"
                        //                     .$values['fullname'].
                        //                 "</a>
                        //             </td>
                        //         </tr>";
                        //     }
                        // }
                    ?>
                </table>
            </td>
            <td>
            
            </td>
            <td>
                <table align="center">
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
            </td>
        </tr>
    </table>
    <?php include('./footer.php'); ?>
</body>
</html>