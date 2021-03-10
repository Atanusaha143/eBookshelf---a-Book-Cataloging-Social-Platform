<?php
    include('./validate_functions.php');
    session_start();
    if(empty($_POST['currentpass']) || empty($_POST['newpass']) || empty($_POST['confirmpass']))
    {
        echo "Please enter all three fields.";
    }
    else
    {
        
    }
?>