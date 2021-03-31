<?php
    include('./validate_functions.php');
    session_start();
    if(empty($_POST['username']) && empty($_POST['password']))
    {
        echo "One or more of the fields are empty!";
    }
    else if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $usernameFlag = usernameValidation($username);
        $passwordFlag = passwordValidation($password);

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
    }
?>