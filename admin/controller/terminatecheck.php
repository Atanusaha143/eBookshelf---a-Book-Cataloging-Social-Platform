<?php
    session_start();
    include('../model/adminModel.php');
    $terminateStatus = terminateAdmin($_SESSION['id']);
    if($terminateStatus == true)
    {
        //session_destroy();
        unset($_SESSION['flag']);
        $_SESSION['terminated'] = true;
        header('location: ../view/termination.php');
    }
    else
    {
        echo "There was an issue with your termination.<br>";
        echo "Click <a href='../view/settings.php'>here</a> to go back to settings";
    }
?>