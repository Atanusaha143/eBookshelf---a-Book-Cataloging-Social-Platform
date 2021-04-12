<?php
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
            // $connection = connect();
            // $sql = "SELECT * FROM admin WHERE id = '".$_SESSION['id']."'";

            // $result = mysqli_query($connection, $sql);
            // $result = mysqli_fetch_assoc($result);
            $adminDetails = getAdminInfoByID($_SESSION['id']);
            $adminDetails = mysqli_fetch_assoc($adminDetails);

            if($_SESSION['id'] == $adminDetails['id'])
            {
                if($adminDetails['status'] == 'terminated')
                {
                    header('location: ../view/termination.php');
                }
                else
                {
                    $_SESSION['id'] = $adminDetails['id'];
                    $_SESSION['fullname'] = $adminDetails['fullname'];
                    header('location: ../view/dashboard.php');
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
            echo "Business page logged in!";
        }
    }
    else
    {
        header('location: ../view/login.php');
    }
    //print_r($_SESSION);
?>
