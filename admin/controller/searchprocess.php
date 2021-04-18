<?php
    include('../model/adminModel.php');
    if(!empty($_GET['type']) && !empty($_GET['search']) && !empty($_GET['searchopt']))
    {
        if($_GET['type'] == 'admin')
        {   
            if($_GET['searchopt'] == 'id')
            {
                $adminDetails = getAdminInfoByID($_GET['search']);
                $adminDetails = mysqli_fetch_assoc($adminDetails);
                
                if($adminDetails)
                {
                    header("location: ../view/searchresult.php?id=".$adminDetails['id']);
                }
                else
                {
                    echo "User does not exist";
                }
                
            }
            else if($_GET['searchopt'] == 'username')
            {
                $adminDetails = getAdminInfoByUsername($_GET['search']);
                $adminDetails = mysqli_fetch_assoc($adminDetails);
                
                if($adminDetails)
                {
                    $link = "../view/anotherbpage.php?id=".$adminDetails['id'];
                    echo $link;
                    //header("location: ../view/searchresult.php?username=".$adminDetails['username']);
                }
                else
                {
                    echo "Nonexistent";
                }
                
            }
            //print_r($_GET);
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