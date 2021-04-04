<?php
    function connect()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'ebs';

        $connection = mysqli_connect($host, $user, $password, $database);
        if($connection)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function disconnect($connection)
    {

    }
?>