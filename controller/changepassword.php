<?php
    include('./validate_functions.php');
    session_start();
    if(empty($_POST['currentpass']) || empty($_POST['newpass']) || empty($_POST['confirmpass']))
    {
        echo "Please enter all three fields.";
    }
    else
    {
        $currentPassword = $_POST['currentpass'];
        $newPassword = $_POST['newpass'];
        $confirmPassword = $_POST['confirmpass'];

        $passwordFlag = passwordValidation($currentPassword);
        
        if($currentPassword == $newPassword)
        {
            echo "New password cannot be the same as the old one!<br>";
            return;
        }
        if($newPassword != $confirmPassword)
        {
            echo "Passwords do not match!<br>";
            return;
        }
        else
        {
            echo "Password validated";
        }
    }
?>