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
            disconnect($connection);
            return $result['id'];
        }
        else 
        {
            disconnect($connection);
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
        disconnect($connection);
        return $result;
    }

    function getAdminInfoByID($id)
    {
        $connection = connect();
        $sql = "SELECT * FROM admin, adminlogin WHERE adminlogin.id = ".$id." AND adminlogin.id = admin.id";
        $result = mysqli_query($connection, $sql);
        disconnect($connection);
        return $result;
    }

    function getBpageInfoByID($id)
    {
        $connection = connect();
        $sql = "SELECT * FROM bpage, bpagelogin WHERE bpagelogin.id = ".$id." AND bpagelogin.id = bpage.id";
        $result = mysqli_query($connection, $sql);
        disconnect($connection);
        return $result;
    }

    function getRegularInfoByID($id)
    {
        $connection = connect();
        $sql = "SELECT * FROM regular_userlist WHERE id = ".$id;
        $result = mysqli_query($connection, $sql);
        disconnect($connection);
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
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
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
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
            return false;
        }
    }

    function updateRegularByID($id, $fullname, $email, $phone, $username, $status)
    {
        $connection = connect();
        $sql = "UPDATE regular_userlist SET name = '$fullname', email = '$email', phone_number = '$phone', username = '$username', status = '$status' WHERE id = $id";
        $updateResult = mysqli_query($connection, $sql);

        if($updateResult)
        {
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
            return false;
        }
    }

    function checkPassword($id, $password)
    {
        $connection = connect();
        $sql = "SELECT * FROM adminlogin WHERE id = $id AND password = '$password'";

        $currentPassword = mysqli_query($connection, $sql);
        if(mysqli_num_rows($currentPassword)>0)
        {
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
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
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
            return false;
        }
    }

    function uniqueUsernameCheckAdmin($username)
    {
        $connection = connect();
        $sql = "SELECT * FROM adminlogin WHERE username = '$username'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $result = mysqli_fetch_assoc($result);
            disconnect($connection);
            return true;
        }
        else 
        {
            disconnect($connection);
            return false;
        }
    }

    function uniqueUsernameCheckRegular($username)
    {
        $connection = connect();
        $sql = "SELECT * FROM regular_userlist WHERE username = '$username'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $result = mysqli_fetch_assoc($result);
            disconnect($connection);
            return true;
        }
        else 
        {
            disconnect($connection);
            return false;
        }
    }

    function uniqueUsernameCheckBpage($username)
    {
        $connection = connect();
        $sql = "SELECT * FROM bpagelogin WHERE username = '$username'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $result = mysqli_fetch_assoc($result);
            disconnect($connection);
            return true;
        }
        else 
        {
            disconnect($connection);
            return false;
        }
    }

    function insertNewAdmin($fullname, $email, $phone, $dob, $username, $password, $photo)
    {
        $connection = connect();
        
        
        $regdate = date("Y-m-d");

        $connection = connect();
        $sqlAdmin = "INSERT INTO admin(fullname, email, phone, dob, regdate, photo) VALUES('$fullname', '$email', '$phone', '$dob', '$regdate', '$photo')";

        $adminUpdateResult = mysqli_query($connection, $sqlAdmin);

        //$lastID = mysqli_insert_id($connection);
        $sqlLastID = "SELECT MAX(ID) FROM admin";

        $lastID = mysqli_query($connection, $sqlLastID);
        $lastID = mysqli_fetch_assoc($lastID);

        $sqlLogIn = "INSERT INTO adminlogin(id, username, password, type, status) VALUES(".$lastID['MAX(ID)'].", '$username', '$password', 'admin', 'active')";
        $loginUpdateResult = mysqli_query($connection, $sqlLogIn);

        if($adminUpdateResult == true && $loginUpdateResult == true)
        {
            disconnect($connection);
            return true;
        }
        if($adminUpdateResult == false || $loginUpdateResult == false)
        {
            disconnect($connection);
            return false;
        }
    }

    function insertNewRegular($fullname, $email, $phone, $username, $gender, $password, $photo)
    {
        $connection = connect();
        $regdate = date("Y-m-d");

        $connection = connect();
        $sqlAdmin = "INSERT INTO regular_userlist(name, email, username, password, phone_number, gender, profile_photo, status) VALUES('$fullname', '$email', '$username', '$password', '$phone', '$gender', '$photo', 'active')";

        $adminUpdateResult = mysqli_query($connection, $sqlAdmin);

        if($adminUpdateResult == true)
        {
            disconnect($connection);
            return true;
        }
        else if($adminUpdateResult == false)
        {
            disconnect($connection);
            return false;
        }
    }

    function insertNewBpage($name, $email, $phone, $photo, $username, $password)
    {
        $regdate = date("Y-m-d");

        $connection = connect();
        $sqlAdmin = "INSERT INTO bpage(name, email, phone, regdate, photo) VALUES('$name', '$email', '$phone', '$regdate', '$photo')";

        $bpageUpdateResult = mysqli_query($connection, $sqlAdmin);

        //$lastID = mysqli_insert_id($connection);
        $sqlLastID = "SELECT MAX(ID) FROM bpage";

        $lastID = mysqli_query($connection, $sqlLastID);
        $lastID = mysqli_fetch_assoc($lastID);

        $sqlLogIn = "INSERT INTO bpagelogin(id, username, password, type, status) VALUES(".$lastID['MAX(ID)'].", '$username', '$password', 'bpage', 'active')";
        $loginUpdateResult = mysqli_query($connection, $sqlLogIn);

        if($bpageUpdateResult == true && $loginUpdateResult == true)
        {
            disconnect($connection);
            return true;
        }
        if($bpageUpdateResult == false || $loginUpdateResult == false)
        {
            disconnect($connection);
            return false;
        }
    }

    function terminateAdmin($id)
    {
        $connection = connect();
        $sql = "UPDATE adminlogin SET status = 'terminated' WHERE id = $id";
        $result = mysqli_query($connection, $sql);

        if($result)
        {
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
            return false;
        }
    }

    function getAllAdmins($id)
    {
        $sql = "SELECT * FROM admin WHERE id != $id";
        $connection = connect();

        $allAdmins = mysqli_query($connection, $sql);
        disconnect($connection);
        return $allAdmins;
    }

    function getAllBpages()
    {
        $sql = "SELECT * FROM bpage";
        $connection = connect();
        $allBpages = mysqli_query($connection, $sql);
        disconnect($connection);
        return $allBpages;
    }

    function getAllPosts()
    {
        $sql = "SELECT * FROM regular_post";
        $connection = connect();
        $allPosts = mysqli_query($connection, $sql);
        disconnect($connection);
        return $allPosts;
    }

    function getAllRegular()
    {
        $connection = connect();
        $sql = "SELECT * FROM regular_userlist";
        $allRegular = mysqli_query($connection, $sql);
        disconnect($connection);
        return $allRegular;
    }

    function deleteAdminByID($id)
    {
        $connection = connect();
        $sqlLogin = "DELETE FROM adminlogin WHERE id = $id AND status = 'terminated'";
        $deleteLoginStatus = mysqli_query($connection, $sqlLogin);

        if($deleteLoginStatus)
        {
            $sqlAdmin = "DELETE FROM admin WHERE id = $id";
            $deleteAdminStatus = mysqli_query($connection, $sqlAdmin);

            if($deleteAdminStatus)
            {
                disconnect($connection);
                return true;
            }
            else
            {
                disconnect($connection);
                return false;
            }
        }
        else
        {
            disconnect($connection);
            return false;
        }
    }
    
    function deleteRegularByID($id)
    {
        $connection = connect();
        $sqlRegular = "DELETE FROM regular_userlist WHERE id = $id";
        $deleteRegularStatus = mysqli_query($connection, $sqlRegular);

        if($deleteRegularStatus)
        {
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
            return false;
        }
    }

    function deletePostByID($id)
    {
        $connection = connect();
        $sqlPost = "DELETE FROM regular_post WHERE id = $id";
        $deletePostStatus = mysqli_query($connection, $sqlPost);

        if($deletePostStatus)
        {
            disconnect($connection);
            return true;
        }
        else
        {
            disconnect($connection);
            return false;
        }
    }
?>
