<?php
    session_start();
    include('./validate_functions.php');
    include('../model/adminModel.php');
    if($_FILES['propic']['size'] == 0)
    {
        echo "Please enter a valid jpeg file for upload.";
    }
    else
    {
        $adminDetails = getAdminInfoByID($_SESSION['id']);
        $adminDetails = mysqli_fetch_assoc($adminDetails);

        $picture = $_FILES['propic'];
        $imageFlag = imageValidate($picture, $adminDetails['username']);
        $path = '../../assets/profile/admin/'.$adminDetails['username'].'.jpeg';

        if(move_uploaded_file($picture['tmp_name'], $path))
        {
            echo "Photo uploaded!<br>";
            header('location: ../view/picchangesuccess.php');
        }
        else
        {
            echo "Photo upload failed!<br>";
        }
    }
?>