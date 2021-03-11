<?php 
    session_start();
    if(!empty($_SESSION['flag']) && isset($_COOKIE['flag']))
    {
        //continue
        $dataString = file_get_contents('../../model/admin.json');
        $dataJSON = json_decode($dataString, true);
        // foreach($dataJSON as $values)
        // {
        //     print($values['fullname']);
        // }
        
    }
    else if(!(isset($_COOKIE['flag'])))
    {
        echo "Session expired, please <a href='../login.php'>Log In</a> again!";
        return;
    }
    else
    {
        header('location: ../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewing All Users</title>
</head>
<body bgcolor="#c5fcf7">
    <?php include('./adminheader.php'); ?>
    <table>
        <tr>
            <td>
                <?php 
                    foreach($dataJSON as $values)
                    {
                        if($_SESSION['id'] != $values['id'])
                        {
                            // echo 
                            // "<form>
                            //     <table>
                            //         <tr>
                            //             <td>
                            //                 <
                            //             </td>
                            //         </tr>
                            //     </table>
                            // </form>"
                            print_r($values['id']);
                            echo "||";
                            echo "<a href='anotheruser.php?userid=".$values['id']."'>";
                                print_r($values['fullname']);
                            echo "</a>";
                            echo "<br>";
                        }
                    }
                ?>
            </td>
            <td>
            
            </td>
            <td>
            
            </td>
        </tr>
    </table>
</body>
</html>