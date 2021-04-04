<?php
    include('./dbCon.php');
    function validateLogIn($username, $password)
    {
        $connection = connect();
        $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            echo "User logged in";
        }
        else 
        {
            echo "Log in fail";
        }
    }
?>