<?php
    if(!empty($_GET['userid']))
    {
        $userid = $_GET['userid'];
        if($userid[0] == 'a')
        {
            $dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString, true);

            foreach($dataJSON as $user)
            {
                if($user['id'] == $userid)
                {
                    $_GET['id'] = $user['id'];
                    $_GET['fullname'] = $user['fullname'];
                    $_GET['email'] = $user['email'];
                    $_GET['phone'] = $user['phone'];
                    $_GET['dateOfBirth'] = $user['dateOfBirth'];
                    $_GET['username'] = $user['username'];
                    $_GET['regdate'] = $user['regdate'];
                    $_GET['type'] = $user['type'];
                }
            }
        }
        
    }
?>