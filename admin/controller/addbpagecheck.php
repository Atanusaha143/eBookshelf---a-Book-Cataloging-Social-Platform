<?php
    session_start();
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmpassword']) || empty($_POST['propic']))
    {
        echo "One or more of the fields is empty.";
    }
    else
    {

    }
?>