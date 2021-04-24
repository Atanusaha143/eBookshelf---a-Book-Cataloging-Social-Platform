<?php
    session_start();
    include('../model/adminModel.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['username']) || empty($_POST['status']))
    {
        echo "Please enter all fields";
    }
    else
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $status = $_POST['status'];

        $updateStatus = updateRegularByID($_GET['id'], $fullname, $email, $phone, $username, $status);
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