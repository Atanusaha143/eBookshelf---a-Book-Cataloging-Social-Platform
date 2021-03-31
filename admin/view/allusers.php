<?php 
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        $dataString = file_get_contents('../model/admin.json');
        $dataJSON = json_decode($dataString, true);
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        echo "Session expired, please <a href='../login.php'>Log In</a> again!";
        return;
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
    <link rel='icon' href='../images/assets/icon.png'>
    <title>Viewing All Users</title>
</head>
<body bgcolor="#c5fcf7">
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
                        foreach($dataJSON as $values)
                        {
                            if($_SESSION['id'] != $values['id'])
                            {   
                                echo 
                                "<tr>
                                    <td align='center'>"
                                        .$values['id'].
                                    "</td>
                                    <td align='center'>
                                        <a href='anotheruser.php?userid=".$values['id']."'>"
                                            .$values['fullname'].
                                        "</a>
                                    </td>
                                </tr>";
                            }
                        }
                    ?>
                    <!-- <?php 
                        foreach($dataJSON as $values)
                        {
                            if($_SESSION['id'] != $values['id'])
                            {
                                print_r($values['id']);
                                echo "||";
                                echo "<a href='anotheruser.php?userid=".$values['id']."'>";
                                    print_r($values['fullname']);
                                echo "</a>";
                                echo "<br>";
                            }
                        }
                    ?> -->
                </table>
            </td>
            <td>
            
            </td>
            <td>
            
            </td>
        </tr>
    </table>
</body>
</html>