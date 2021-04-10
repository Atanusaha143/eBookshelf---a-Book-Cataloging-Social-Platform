<?php
    include('../model/dbCon.php');
    function validateLogIn($username, $password)
    {
        $connection = connect();
        $sql = "SELECT * FROM adminlogin WHERE username = '$username' and password = '$password'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $result = mysqli_fetch_assoc($result);
            return $result['id'];
        }
        else 
        {
            return false;
        }
    }

    function addAdmin()
    {
        
    }

    function getMessages($receiverID, $senderID)
    {
        $connection = connect();
        $sql = "SELECT * FROM messages WHERE (to_user = '$receiverID' AND from_user = '$senderID') OR (to_user = '$senderID' AND from_user = '$receiverID')";

        $result = mysqli_query($connection, $sql);

        return $result;
    }

    function getAdminInfoByUsername($username)
    {
        $connection = connect();
        $sql = "SELECT * FROM admin, adminlogin WHERE adminlogin.username = '".$username."' AND adminlogin.id = admin.id";
        $result = mysqli_query($connection, $sql);
        return $result;
    }
?>
