<?php
    session_start();
    include('./validate_functions.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['phone']) || empty($_POST['password'])|| empty($_POST['dateOfBirth']) || empty($_POST['confirmpassword']) || $_FILES['propic']['size'] == 0)
    {
        echo "Please enter all fields, including a profile picture.";

        echo $_FILES['propic']['name'];
        echo $_POST['dateOfBirth'];
    }
    else
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $file = $_FILES['propic'];
        $fileSaveName = $username.".".pathinfo($file['name'], PATHINFO_EXTENSION);

        $fullnameFlag = nameValidation($fullname);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);
        $passwordFlag = passwordValidation($password, $confirmpassword);
        $usernameFlag = usernameValidation($username);
        $imageFlag = imageValidate($file);

        if($fullnameFlag == true)
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

        if($fullnameFlag == false &&
        $emailFlag == false &&
        $phoneFlag == false &&
        $usernameFlag == false &&
        $passwordFlag == false &&
        $imageFlag == false)
        {
            include('../model/adminModel.php');
            $usernameCheckFlag = uniqueUsernameCheckAdmin($username);
            if($usernameCheckFlag == false)
            {
                $addAdminStatus = insertNewAdmin($fullname, $email, $phone, $dateOfBirth, $username, $password, $fileSaveName);
                if($addAdminStatus == true)
                {
                    $picture = $_FILES['propic'];
                    $path = '../../assets/profile/admin/'.$fileSaveName;

                    if(move_uploaded_file($picture['tmp_name'], $path))
                    {
                        echo "New Admin added successfully!";
                    }
                }
                else
                {
                    echo "Admin addition failed!";
                }
            }
            else
            {
                echo "Username already exists";
            }
        }
    }
?>
