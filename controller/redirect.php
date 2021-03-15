<?php
    session_start();
    //print_r($_SESSION);
    if($_SESSION['flag'] == true)
    {
        if($_SESSION['type'] == 'admin')
        {
            $dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString, true);
            print_r($dataJSON);
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
            }
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
            //echo "Business page logged in!";
            $dataString = file_get_contents('../model/bpage.json');
            $dataJSON = json_decode($dataString, true);
            print_r($dataJSON);
            foreach($dataJSON as $user)
            {
                if($_SESSION['id'] == $user['id'])
                {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['fullname'] = $user['fullname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['phone'] = $user['phone'];
                    $_SESSION['regdate'] = $user['regdate'];
                    header('location: ../view/bpage/dashboard.php');
                }
            }
        }
    }
    else
    {
        header('location: ../view/login.php');
    }
    //print_r($_SESSION);
?>
