<?php
    session_start();
    include('./validate_functions.php');
    include('../model/adminModel.php');
    if(empty($_POST['username']) && empty($_POST['password']))
    {
        echo "One or more of the fields are empty!";
    }
    else if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userFoundFlag = validateLogIn($username, $password);

        if($userFoundFlag)
        {
            //header('location: ../view/dashboard.php');
            $_SESSION['flag'] = true;
            $_SESSION['id'] = $userFoundFlag;
            $_SESSION['type'] = 'admin';
            setcookie('flag', true, time()+1200, '/');

            $adminDetails = getAdminInfoByID($_SESSION['id']);
            $adminDetails = mysqli_fetch_assoc($adminDetails);

            if($adminDetails['status'] == 'terminated')
            {
                unset($_SESSION['flag']);
                $_SESSION['terminated'] = true;
                echo "Terminated";
            }
            else
            {
                $_SESSION['id'] = $adminDetails['id'];
                $_SESSION['fullname'] = $adminDetails['fullname'];
                header('location: ../view/dashboard.php');
            }
        }
        else
        {
            echo "False";
        }
    }
?>