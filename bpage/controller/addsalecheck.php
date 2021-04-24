<?php
    session_start();
    include('../model/bpageModel.php');
    include('./validate_functions.php');
    if(empty($_POST['title']) || empty($_POST['author']) || empty($_POST['post_content']) || empty($_POST['price']) || $_FILES['bookphoto']['size'] == 0)
    {
        echo "Done";
    }
    else
    {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $post_content = $_POST['post_content'];
        $price = $_POST['price'];
        $file = $_FILES['bookphoto'];

        $priceFlag = priceValidate($price);
        $authorFlag = nameValidation($author);
        $imageFlag = imageValidate($file);

        if($priceFlag == true)
        {
            return;
        }
        else
        {

        }

        if($authorFlag == true)
        {
            return;
        }
        else 
        {

        }

        if($imageFlag == true)
        {
            return;
        }
        else
        {

        }

        if ($priceFlag == false && $authorFlag == false && $imageFlag == false)
        {

        }
        else
        {
            echo "Failed to add sale post!";
        }
    }
?>

