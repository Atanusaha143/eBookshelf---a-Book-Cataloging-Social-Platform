<?php
    session_start();
    include('../model/bpageModel.php');
    //print_r($_SESSION);
    if($_SESSION['flag'] == true)
    {
        if($_SESSION['type'] == 'bpage')
        {
            $connection = connect();
            $sql = "SELECT * FROM admin WHERE id = '".$_SESSION['id']."'";

            $result = mysqli_query($connection, $sql);
            $result = mysqli_fetch_assoc($result);

            if($_SESSION['id'] == $result['id'])
            {
                $_SESSION['id'] = $result['id'];
                $_SESSION['name'] = $result['name'];
                header('location: ../view/dashboard.php');
            }
            //echo "Business page logged in!";
            // $dataString = file_get_contents('../model/bpage.json');
            // $dataJSON = json_decode($dataString, true);
            // print_r($dataJSON);
            // foreach($dataJSON as $user)
            // {
            //     if($_SESSION['id'] == $user['id'])
            //     {
            //         $_SESSION['id'] = $user['id'];
            //         $_SESSION['username'] = $user['username'];
            //         $_SESSION['fullname'] = $user['fullname'];
            //         $_SESSION['email'] = $user['email'];
            //         $_SESSION['phone'] = $user['phone'];
            //         $_SESSION['regdate'] = $user['regdate'];
            //         header('location: ../view/dashboard.php');
            //     }
            // }
        }
        else
        {
            
        }
    }
    else
    {
        header('location: ../view/login.php');
    }
    //print_r($_SESSION);
?>
