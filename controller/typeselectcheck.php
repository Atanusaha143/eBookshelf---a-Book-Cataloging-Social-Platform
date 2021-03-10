<?php
    if(empty($_GET['type']))
    {
        echo "Please select a type before submitting";
    }
    else
    {
        if($_GET['type'] == 'admin')
        {
            header('location: ../view/admin/addadmin.php');
        }
    }
?>