<?php
    session_start();
    if(isset($_POST['username']) && isset($_POST['message']))
    {   
        $link = 'location: ../view/chat.php?username='.$_POST['username'];
        header($link);
    }
?>