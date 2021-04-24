<?php
    session_start();
    include('../model/bpageModel.php');
    include('./validate_functions.php');
    if(empty($_POST['title']) || empty($_POST['author']) || empty($_POST['genre']) || empty($_POST['book_condition']) || empty($_POST['post_content']) || empty($_POST['price']) || $_FILES['bookphoto']['size'] == 0)
    {
        echo "Done";
    }
    else
    {
        $id = $_SESSION['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $book_condition = $_POST['book_condition'];
        $post_content = $_POST['post_content'];
        $price = $_POST['price'];
        $file = $_FILES['bookphoto'];
        $fileSaveName = $title.".".pathinfo($file['name'], PATHINFO_EXTENSION);

        $priceFlag = priceValidate($price);
        $authorFlag = nameValidation($author);
        $imageFlag = imageValidate($file);

        //echo $priceFlag.'\n'.$authorFlag.'\n'.$imageFlag;

        //echo $sql;
        if($priceFlag == true)
        {
            //return;
        }
        else
        {

        }

        if($authorFlag == true)
        {
            //return;
        }
        else 
        {

        }

        if($imageFlag == true)
        {
            //return;
        }
        else
        {

        }

        if ($priceFlag == false && $authorFlag == false && $imageFlag == false)
        {
            $postStatus = insertSalePost($id, $title, $author, $genre, $book_condition, $post_content, $price, $fileSaveName);
            $postRegularStatus = insertRegularSalePost($title, $author, $genre, $book_condition, $price, $_SESSION['username'], $fileSaveName);

            if($postStatus == true && $postRegularStatus == true)
            {
                $picture = $_FILES['bookphoto'];
                $path = '../../assets/books/'.$fileSaveName;

                if(move_uploaded_file($picture['tmp_name'], $path))
                {
                    //echo "You have been added successfully!<br>";
                    //echo "<a href='../view/login.php'>Go Back</a>";
                    //header('location: ../view/picchangesuccess.php');
                    echo "Added post successfully";
                }
                else
                {
                    echo "Book addition failed!<br>";
                }
            }
        }
        else
        {
            echo "Failed to add sale post!";
        }
    }
?>

