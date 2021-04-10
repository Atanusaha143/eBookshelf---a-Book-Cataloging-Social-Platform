<?php
    session_start();
    include('../model/adminModel.php');
    if(isset($_POST['username']))
    {   
        $receiverDetails = getAdminInfoByUsername($_POST['username']);
        $receiverDetails = mysqli_fetch_assoc($receiverDetails);

        $selfDetails = getAdminInfoByID($_SESSION['id']);
        $selfDetails = mysqli_fetch_assoc($selfDetails);
        if($receiverDetails == false)
        {
            echo "It seems the user you are looking for does not exist!";
        }
        else if($selfDetails['id'] == $receiverDetails['id'])
        {
            echo "You cannot send a message to yourself!";
        }
        else
        {
            $link = 'location: ../view/chat.php?username='.$_POST['username'];
            header($link);
            //print_r($adminDetails);
        }
    }
?>