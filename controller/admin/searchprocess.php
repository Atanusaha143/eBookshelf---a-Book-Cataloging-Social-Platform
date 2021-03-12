<?php
    if(!empty($_GET['type']) && !empty($_GET['search']))
    {
        if($_GET['type'] == 'admin')
        {
            $dataString = file_get_contents('../../model/admin.json');
            $dataJSON = json_decode($dataString,true);
            
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