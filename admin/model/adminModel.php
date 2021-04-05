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
?>
