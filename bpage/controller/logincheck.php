<?php
    include('./validate_functions.php');
    include('../model/bpageModel.php');
    session_start();
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
            $_SESSION['type'] = 'bpage';
            setcookie('flag', true, time()+1200, '/');
            //header('location: ./redirect.php');

            $bpageDetails = getBpageInfoByID($_SESSION['id']);
            $bpageDetails = mysqli_fetch_assoc($bpageDetails);

            if($bpageDetails['status'] == 'deactivated')
            {
                unset($_SESSION['flag']);
                $_SESSION['deactivated'] == true;
                echo "Deactivated";
            }
            else
            {
                $_SESSION['id'] = $bpageDetails['id'];
                $_SESSION['name'] = $bpageDetails['name'];
                $_SESSION['username'] = $bpageDetails['username'];
                header('location: ../view/dashboard.php');
            }
        }
        else
        {
            echo "False";
        }

        /*
        $dataString = file_get_contents('../model/login.json');
        $dataJSON = json_decode($dataString, true);
        $userFoundFlag = false;

        foreach($dataJSON as $user)
        {
            if($user['username'] == $username && $user['password'] == $password)
            {
                $_SESSION['flag'] = true;
                $_SESSION['id'] = $user['id'];
                $_SESSION['type'] = $user['type'];
                $userFoundFlag = true;
                setcookie('flag', true, time()+1200, '/');
                header('location: ./redirect.php');
            }
        }
        if($userFoundFlag == false)
        {
            echo "Invalid user!";
        }
        //print_r($_SESSION);
        */
    }
?>