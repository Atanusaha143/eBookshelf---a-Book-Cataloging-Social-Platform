<?php
    session_start();
    include('../model/adminModel.php');
    $deletePostStatus = deletePostByID($_GET['id']);
    if($deletePostStatus == true)
    {
        echo "Successfully deleted post!";
        echo "<a href='../view/dashboard.php'>Go Back</a>";
    }
    else
    {
        echo "Failed to delete post!";
        echo "<a href='../view/dashboard.php'>Go Back</a>";
    }
?>