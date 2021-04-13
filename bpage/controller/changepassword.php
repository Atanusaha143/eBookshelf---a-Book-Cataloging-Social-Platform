<?php
    session_start();
    include('./validate_functions.php');
    include('../model/bpageModel.php');
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
            $bpageUpdate = getBpageInfoByID($_SESSION['id']);

            $changePasswordStatus = updatePassword($_SESSION['id'], $newPassword);
            if($changePasswordStatus == true)
            {
                header('location: ../view/passchanged.php');
            }
            else
            {
                echo "Seems there was an issue trying to update your password.";
            }
            header('location: ./redirect.php');
        }
    }
?>