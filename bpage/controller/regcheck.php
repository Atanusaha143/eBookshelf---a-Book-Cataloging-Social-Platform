<?php    
    include('./validate_functions.php');
    include('../model/bpageModel.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['confirmpassword']) ||$_FILES['propic']['size'] == 0)
    {
        echo "One or more of the fields are empty!";
    }
    else
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $file = $_FILES['propic'];
        $fileSaveName = $username.".".pathinfo($file['name'], PATHINFO_EXTENSION);

        //$fullnameFlag = $emailFlag = $phoneFlag = $usernameFlag = $passwordFlag = '';
        $fullnameFlag = nameValidation($fullname);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);
        $passwordFlag = passwordValidation($password);
        $usernameFlag = usernameValidation($username);
        $imageFlag = imageValidate($file, $username);

        if($fullnameFlag == true)
        {
            return;
        }

        if($emailFlag == true)
        {
            return;
        }        

        if($phoneFlag == true)
        {
            return;
        }

        if($usernameFlag == true)
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
            echo "passwords do not match!<br>";
            return;
        }

        if($fullnameFlag == false &&
        $emailFlag == false &&
        $phoneFlag == false &&
        $usernameFlag == false &&
        $passwordFlag == false &&
        $imageFlag == false)
        {
            $addBpageStatus = insertNewBpage($fullname, $email, $phone, $username, $password, $fileSaveName);
            $picture = $_FILES['propic'];
            $path = '../../assets/profile/bpage/'.$fileSaveName;

            if(move_uploaded_file($picture['tmp_name'], $path))
            {
                echo "You have been added successfully!<br>";
                echo "<a href='../view/login.php'>Go Back</a>";
                //header('location: ../view/picchangesuccess.php');
            }
            else
            {
                echo "Admin addition failed!<br>";
            }
        }
    }
?>