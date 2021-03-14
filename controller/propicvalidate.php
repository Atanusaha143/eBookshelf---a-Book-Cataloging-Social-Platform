<?php
    include('./validate_functions.php');
    session_start();
    if($_FILES['propic']['size'] == 0)
    {
        echo "Please enter a valid jpeg file for upload.";
    }
    else
    {
        $picture = $_FILES['propic'];
        $path = '../images/profile/admin/'.$_SESSION['id'].'.jpeg';

        if(move_uploaded_file($picture['tmp_name'], $path))
        {
            echo "Photo uploaded!<br>";
            header('location: ../view/admin/picchangesuccess.php');
        }
        else
        {
            echo "Photo upload failed!<br>";
        }
    }
?>