<?php
    session_start();
    include('../model/adminModel.php');
    //print_r($_SESSION);
    if($_SESSION['flag'] == true)
    {
        if($_SESSION['type'] == 'admin')
        {
            $adminDetails = getAdminInfoByID($_SESSION['id']);
            $adminDetails = mysqli_fetch_assoc($adminDetails);

            if($_SESSION['id'] == $adminDetails['id'])
            {
                if($adminDetails['status'] == 'terminated')
                {
                    unset($_SESSION['flag']);
                    $_SESSION['terminated'] = true;
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
?>
