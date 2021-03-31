<?php
    if(empty($_GET['type']))
    {
        echo "Please select a type before submitting";
    }
    else
    {
        if($_GET['type'] == 'admin')
        {
            header('location: ../view/addadmin.php');
        }
        else if($_GET['type'] == 'ruser')
        {
            header('location: ../view/addruser.php');
        }
        else if($_GET['type'] == 'bpage')
        {
            header('location: ../view/addbpage.php');
        }
    }
?>