<?php
    session_start();
    if(isset($_SESSION['flag']) == true)
    {
        if(isset($_SESSION['type']) == 'admin')
        {
            $dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString, true);
            $userFoundFlag = false;
            
            foreach($dataJSON as $user)
            {
                if($_SESSION['id'] == $user['id'])
                {
                    $userFoundFlag = true;
                }
            }
            if($userFoundFlag == false)
            {
                echo "Invalid user!";
            }
        }
    }
?>