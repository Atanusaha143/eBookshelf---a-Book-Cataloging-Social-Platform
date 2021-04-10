<?php
    session_start();
    include('../model/adminModel.php');
    if(isset($_POST['username']))
    {   
        $adminDetails = getAdminInfoByUsername($_POST['username']);
        $adminDetails = mysqli_fetch_assoc($adminDetails);
        if($adminDetails == false)
        {
            echo "It seems the user you are looking for does not exist!";
        }
        else
        {
            //$link = 'location: ../view/chat.php?username='.$_POST['username'];
            //header($link);
            print_r($adminDetails);
        }
    }
?>