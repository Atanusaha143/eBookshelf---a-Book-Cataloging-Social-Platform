<?php
    include('../model/dbCon.php');
    function validateLogIn($username, $password)
    {
        $connection = connect();
        $sql = "SELECT * FROM bpagelogin WHERE username = '$username' and password = '$password'";

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
        $sql = "SELECT * FROM bpagemessages WHERE (to_user = '$receiverID' AND from_user = '$senderID') OR (to_user = '$senderID' AND from_user = '$receiverID')";

        $result = mysqli_query($connection, $sql);

        return $result;
    }

    function getBpageInfoByUsername($username)
    {
        $connection = connect();
        $sql = "SELECT * FROM bpage, bpagelogin WHERE bpagelogin.username = '".$username."' AND bpagelogin.id = admin.id";
        $result = mysqli_query($connection, $sql);
        return $result;
    }
?>
