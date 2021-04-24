<?php
    session_start();
    include('../model/adminModel.php');
    if(isset($_POST['message']) && isset($_GET['username']) && $_POST['message'] != "")
    {
        $message = $_POST['message'];
        $receiverInfo = getAdminInfoByUsername($_GET['username']);
        $receiverInfo = mysqli_fetch_assoc($receiverInfo);

        $messageStatus = insertMessage($message, $_SESSION['id'], $receiverInfo['id']);
        if($messageStatus == true)
        {
            echo "Message sent successfully!";
            header('location: ../view/chat.php?username='.$receiverInfo['username']);
        }
        else
        {
            echo "Message failed to send!";
        }
    }
    else
    {
        echo "Please enter a message!";
    }
?>