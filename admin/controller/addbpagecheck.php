<?php
    session_start();
    include('./validate_functions.php');
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmpassword']) || $_FILES['propic']['size'] == 0)
    {
        echo "One or more of the fields is empty.";
    }
    else
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $file = $_FILES['propic'];
        $fileSaveName = $username.".".pathinfo($file['name'], PATHINFO_EXTENSION);

        $nameFlag = nameValidation($name);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);
        $usernameFlag = usernameValidation($username);
        $passwordFlag = passwordValidation($password);
        $imageFlag = imageValidate($file);

        if($nameFlag == true)
        {
            return;
            //echo "Name must be alphabetical!<br>";
        }

        if($emailFlag == true)
        {
            return;
            //echo "Email must have '@' symbol!<br>";
        }        

        if($phoneFlag == true)
        {
            return;
            // echo "Phone number can only have a '+' or numeric values!<br>";
        }

        if($usernameFlag == true)
        {
            return;
            //echo "Username must be alphanumeric!<br>";
        }

        if($passwordFlag == true)
        {
            return;
        }

        if($imageFlag == true)
        {
            return;
        }

        if($password != $confirmpassword)
        {
            $passwordFlag=true;
            echo "The passwords do not match!<br>";
            return;
        }

        if($nameFlag == false &&
        $emailFlag == false &&
        $phoneFlag == false &&
        $usernameFlag == false &&
        $passwordFlag == false &&
        $imageFlag == false)
        {
            include('../model/adminModel.php');
            $addAdminStatus = insertNewBpage($name, $email, $phone, $fileSaveName, $username, $password);
            //print_r($addAdminStatus);
            $picture = $_FILES['propic'];
            //$imageFlag = imageValidate($picture, $adminDetails['username']);
            $path = '../../assets/profile/bpage/'.$fileSaveName;

            if(move_uploaded_file($picture['tmp_name'], $path))
            {
                echo "New Business Page added successfully!<br>";
                echo "<a href='../view/allusers.php'>Go Back</a>";
                //header('location: ../view/picchangesuccess.php');
            }
            else
            {
                echo "Business Page addition failed!<br>";
            }
        }
    }
?>