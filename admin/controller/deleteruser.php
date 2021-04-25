<?php
    session_start();
    include('../model/adminModel.php');

    $deleteRegularUserStatus = deleteRegularByID($_GET['id']);
    if($deleteRegularUserStatus == true)
    {
        echo "Deleted";
        echo "<br><a href='../view/dashboard.php'>Go Back</a>";
    }
    else
    {
        echo "Failed";
    }
?>