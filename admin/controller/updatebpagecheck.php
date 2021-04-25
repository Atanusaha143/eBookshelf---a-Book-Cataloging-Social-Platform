<?php
    session_start();
    include('../model/adminModel.php');
    include('./validate_functions.php');
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['username']) || empty($_POST['status']))
    {
        echo "Please enter all fields";
    }
    else
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $status = $_POST['status'];

        $nameFlag = nameValidation($name);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);
        $usernameFlag = usernameValidation($username);
       

        $updateStatus = updateBpageByID($_GET['id'], $name, $email, $phone, $username, $status);
        if($updateStatus == true)
        {
            echo "Update successful!";
        }
        else
        {
            echo "Update failed!";
        }
    }
?>