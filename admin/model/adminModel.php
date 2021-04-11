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

    function getMessagesForChat($receiverID, $senderID)
    {
        $connection = connect();
        $sql = "SELECT * FROM adminmessages WHERE (to_user = $receiverID AND from_user = $senderID) OR (to_user = $senderID AND from_user = $receiverID)";
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

    function getAdminInfoByID($id)
    {
        $connection = connect();
        $sql = "SELECT * FROM admin, adminlogin WHERE adminlogin.id = ".$id." AND adminlogin.id = admin.id";
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
        $sql = "INSERT INTO adminmessages (content, to_user, from_user, time) VALUES('$message', $receiverID, $senderID, '$time')";
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

    function updateAdminByID($id, $fullname, $email, $phone, $dob)
    {
        $connection = connect();
        $sql = "UPDATE admin SET fullname = '$fullname', email = '$email', phone = '$phone', dob = '$dob' WHERE id = $id";
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
        $sql = "UPDATE adminlogin SET password = '".$password."' WHERE id = $id";
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

    function insertNewAdmin($fullname, $email, $phone, $dob, $username, $password, $photo)
    {
        $regdate = date("Y-m-d");

        $connection = connect();
        $sqlAdmin = "INSERT INTO admin(fullname, email, phone, dob, regdate, photo) VALUES('$fullname', 
        '$email', 
        '$phone', 
        '$dob', 
        '$regdate',
        '$photo')";

        $adminUpdateResult = mysqli_query($connection, $sqlAdmin);

        //$lastID = mysqli_insert_id($connection);
        $sqlLastID = "SELECT MAX(ID) FROM admin";

        $lastID = mysqli_query($connection, $sqlLastID);
        $lastID = mysqli_fetch_assoc($lastID);

        $sqlLogIn = "INSERT INTO adminlogin(id, username, password, type) VALUES(".$lastID['MAX(ID)'].", '$username', '$password', 'admin')";
        $loginUpdateResult = mysqli_query($connection, $sqlLogIn);

        if($adminUpdateResult)
        {
            echo "Admin added<br>";
        }
        if($loginUpdateResult)
        {
            echo "Admin's login added<br>";
        }
        if($adminUpdateResult == false && $loginUpdateResult == false)
        {
            echo "Failed to add admin<br>";
        }
    }

    function getAllAdmins($id)
    {
        $sql = "SELECT * FROM admin WHERE id != $id";
        $connection = connect();

        $allAdmins = mysqli_query($connection, $sql);
        return $allAdmins;
    }

    function getAllBpages()
    {
        $sql = "SELECT * FROM bpage";
        $connection =connect();
        $allBpages = mysqli_query($connection, $sql);

        return $allBpages;
    }
?>
