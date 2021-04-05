<?php

use function PHPSTORM_META\type;

session_start();
    include('../model/adminModel.php');
    //print_r($_SESSION);
    if($_SESSION['flag'] == true)
    {
        if($_SESSION['type'] == 'admin')
        {
            /*$dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString, true);
            print_r($dataJSON);*/
            $connection = connect();
            $sql = "SELECT * FROM admin WHERE id = '".$_SESSION['id']."'";

            $result = mysqli_query($connection, $sql);
            $result = mysqli_fetch_assoc($result);

            if($_SESSION['id'] == $result['id'])
            {
                $_SESSION['id'] = $result['id'];
                $_SESSION['fullname'] = $result['fullname'];
                header('location: ../view/dashboard.php');
            }

            //print_r($result['id']);
            
            //print(gettype($result));
            // foreach($result as $user)
            // {
            //     print_r($user);
            //     print('.');
            //     if($_SESSION['id'] == $user['id'])
            //     {
            //         $_SESSION['id'] = $user['id'];
            //         $_SESSION['username'] = $user['username'];
            //         $_SESSION['fullname'] = $user['fullname'];
            //         $_SESSION['email'] = $user['email'];
            //         $_SESSION['dateOfBirth'] = $user['dob'];
            //         $_SESSION['phone'] = $user['phone'];
            //         $_SESSION['regdate'] = $user['regdate'];
            //         //print_r($_SESSION);
            //         //header('location: ../view/dashboard.php');
            //     }
            // }
        }
        else if($_SESSION['type'] == 'ruser')
        {
            /*$dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString, true);
            
            foreach($dataJSON as $user)
            {
                if($_SESSION['id'] == $user['id'])
                {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['fullname'] = $user['fullname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['dateOfBirth'] = $user['dateOfBirth'];
                    $_SESSION['phone'] = $user['phone'];
                    $_SESSION['regdate'] = $user['regdate'];
                    header('location: ../view/admin/dashboard.php');
                }
            }*/
            echo "Regular user logged in!";
        }
        else if($_SESSION['type'] == 'bpage')
        {
            echo "Business page logged in!";
        }
    }
    else
    {
        header('location: ../view/login.php');
    }
    //print_r($_SESSION);
?>
