<?php
    session_start();
    if(isset($_POST['username']))
    {   
        $link = 'location: ../view/chat.php?username='.$_POST['username'];
        header($link);
    }
?>