<?php
    session_start();
    include('./validate_functions.php');
    include('../model/bpageModel.php');
    if($_FILES['propic']['size'] == 0)
    {
        echo "Please enter a valid jpeg file for upload.";
    }
    else
    {
        $bpageDetails = getBpageInfoByID($_SESSION['id']);
        $bpageDetails = mysqli_fetch_assoc($bpageDetails);

        $picture = $_FILES['propic'];
        $imageFlag = imageValidate($picture, $bpageDetails['username']);
        $path = '../../assets/profile/bpage/'.$bpageDetails['username'].'.jpeg';

        if(move_uploaded_file($picture['tmp_name'], $path))
        {
            echo "Photo uploaded!<br> <a href='../view/profile.php'>Go Back</a>";
            //header('location: ../view/picchangesuccess.php');
        }
        else
        {
            echo "Photo upload failed!<br>";
        }
    }
?>