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
            echo "Nonexistent";
        }
        else if($selfDetails['id'] == $receiverDetails['id'])
        {
            echo "Self";
        }
        else
        {
            $link = '../view/chat.php?username='.$_POST['username'];
            echo $link;
            //header($link);
        }
    }
?>