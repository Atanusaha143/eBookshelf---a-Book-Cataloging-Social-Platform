<?php
    session_start();
    include('../model/adminModel.php');
    $terminateStatus = terminateAdmin($_SESSION['id']);
    if($terminateStatus == true)
    {
        session_destroy();
        echo "<h3>Your account has been terminated, please proceed ";
        echo "<a href='../view/login.php'>here</a>";
        echo " to home page";
    }
    else
    {
        echo "There was an issue with your termination.<br>";
        echo "Click <a href='../view/settings.php'>here</a> to go back to settings";
    }
?>