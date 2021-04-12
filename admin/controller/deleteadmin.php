<?php
    session_start();
    include('../model/adminModel.php');
    $deleteStatus = deleteAdminByID($_GET['id']);
    if($deleteStatus)
    {
        echo "<h3>Successfully deleted admin from database.</h3>";
        echo "<h3>Click <a href='../view/dashboard.php'>here</a> to go back to dashboard</h3>";
    }
    else
    {
        echo "<h3>It seems the admin was not in terminated status.</h3>";
        echo "<h3>Click <a href='../view/profile.php?id=".$_GET['id']."'>here</a> to go back to the profile</h3>";
    }
?>