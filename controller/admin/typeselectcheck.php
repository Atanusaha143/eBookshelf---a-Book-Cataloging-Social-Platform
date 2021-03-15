<?php
    if(empty($_GET['type']))
    {
        echo "Please select a type before submitting";
    }
    else
    {
        if($_GET['type'] == 'admin')
        {
            header('location: ../../view/admin/addadmin.php');
        }
        else if($_GET['type'] == 'ruser')
        {
            header('location: ../../view/admin/addruser.php');
        }
        else if($_GET['type'] == 'bpage')
        {
            header('location: ../../view/admin/addbpage.php');
        }
    }
?>