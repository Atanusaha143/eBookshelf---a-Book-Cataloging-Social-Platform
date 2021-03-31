<?php
    if(!empty($_GET['type']) && !empty($_GET['search']) && !empty($_GET['searchopt']))
    {
        if($_GET['type'] == 'admin')
        {
            $dataString = file_get_contents('../model/admin.json');
            $dataJSON = json_decode($dataString,true);
            
            if($_GET['searchopt'] == 'id')
            {
                foreach($dataJSON as $user)
                {
                    if($user['id'] == $_GET['search'])
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
                header("location: ../view/searchresult.php?fullname=".$user['fullname']);
            }
            else if($_GET['searchopt'] == 'name')
            {
                foreach($dataJSON as $user)
                {
                    if($user['fullname'] == $_GET['search'])
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
                header('location: ../view/searchresult.php');
            }
            print_r($_GET);
        }
        else if($_GET['type'] == 'ruser')
        {
            
        }
        else if($_GET['type'] == 'bpage')
        {
            
        }
    }
    else
    {
        echo "Please enter a type and input to start searching!";
    }
?>