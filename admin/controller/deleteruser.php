<?php
    session_start();
    include('../model/adminModel.php');

    $deleteRegularUserStatus = deleteRegularByID($_GET['id']);
    if($deleteRegularUserStatus == true)
    {
        echo "Deleted";
    }
    else
    {
        echo "Failed";
    }
?>