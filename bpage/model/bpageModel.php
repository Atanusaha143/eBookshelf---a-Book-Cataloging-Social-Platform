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
        $sql = "SELECT * FROM bpage, bpagelogin WHERE bpagelogin.username = '".$username."' AND bpagelogin.id = bpage.id";
        $result = mysqli_query($connection, $sql);
        return $result;
    }

    function getBpageInfoByID($id)
    {
        $connection = connect();
        $sql = "SELECT * FROM bpage, bpagelogin WHERE bpagelogin.id = ".$id." AND bpagelogin.id = bpage.id";
        $result = mysqli_query($connection, $sql);
        return $result;
    }

    
    function insertMessage($message, $senderID, $receiverID)
    {
        $connection = connect();
        $time = date("Y-m-d H:i:s");//2021-04-08 05:33:24
        $sql = "INSERT INTO bpagemessages (content, to_user, from_user, time) VALUES('$message', $receiverID, $senderID, '$time')";
        $insert = mysqli_query($connection, $sql);
        if($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function updateBpageByID($id, $name, $email, $phone)
    {
        $connection = connect();
        $sql = "UPDATE bpage SET name = '$name', email = '$email', phone = '$phone' WHERE id = $id";
        $updateResult = mysqli_query($connection, $sql);

        if($updateResult)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function updatePassword($id, $password)
    {
        $connection = connect();
        $sql = "UPDATE bpagelogin SET password = '".$password."' WHERE id = $id";
        $updateResult = mysqli_query($connection, $sql);

        if($updateResult)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function insertNewBpage($fullname, $email, $phone, $username, $password, $photo)
    {
        $regdate = date("Y-m-d");

        $connection = connect();
        $sqlBpage = "INSERT INTO bpage(fullname, email, phone, regdate, photo) VALUES('$fullname', 
        '$email', 
        '$phone', 
        '$regdate',
        '$photo')";

        $bpageUpdateResult = mysqli_query($connection, $sqlBpage);

        //$lastID = mysqli_insert_id($connection);
        $sqlLastID = "SELECT MAX(ID) FROM bpage";

        $lastID = mysqli_query($connection, $sqlLastID);
        $lastID = mysqli_fetch_assoc($lastID);

        $sqlLogIn = "INSERT INTO bpagelogin(id, username, password, type) VALUES(".$lastID['MAX(ID)'].", '$username', '$password', 'bpage')";
        $loginUpdateResult = mysqli_query($connection, $sqlLogIn);

        if($bpageUpdateResult)
        {
            echo "Bpage added<br>";
        }
        if($loginUpdateResult)
        {
            echo "Bpage's login added<br>";
        }
        if($bpageUpdateResult == false && $loginUpdateResult == false)
        {
            echo "Failed to add bpage<br>";
        }
    }
?>
