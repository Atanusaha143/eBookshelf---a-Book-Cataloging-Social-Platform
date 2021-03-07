<?php
    session_start();
    if(empty($_POST['username']) && empty($_POST['password']))
    {
        echo "One or more of the fields are empty!";
    }
    else if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $usernameValidation = false;

        for($i=0;$i<strlen($username);$i++)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) 
            && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  
            && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)) 
            && !($username[$i] == '.') && !($username[$i] == '-') && !($username[$i] == '_'))
            {
                echo 'Username can be only alphanumeric';break;
            }
        }

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
                header('location: ./redirect.php');
            }
        }
        if($userFoundFlag == false)
        {
            echo "Invalid user!";
        }
    }
?>