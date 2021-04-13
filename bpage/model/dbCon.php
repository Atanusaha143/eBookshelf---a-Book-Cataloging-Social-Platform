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
            return $connection;
        }
        else
        {
            return false;
        }
    }

    function disconnect($connection)
    {   
        $thread_id = mysqli_thread_id($connection);
        mysqli_kill($connection, $thread_id);
    }
?>