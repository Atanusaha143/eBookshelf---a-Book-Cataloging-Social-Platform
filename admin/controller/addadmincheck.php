<?php
    session_start();
    include('./validate_functions.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['phone']) || empty($_POST['password'])|| empty($_POST['dateOfBirth']) || empty($_POST['confirmpassword']) || $_FILES['propic']['size'] == 0)
    {
        echo "Please enter all fields, including your profile picture.";
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
        $passwordFlag = passwordValidation($password);
        $usernameFlag = usernameValidation($username);
        $imageFlag = imageValidate($file, $username);

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
            include('../model/adminModel.php');
            $addAdminStatus = insertNewAdmin($fullname, $email, $phone, $dateOfBirth, $username, $password, $fileSaveName);
            print_r($addAdminStatus);
            $picture = $_FILES['propic'];
            //$imageFlag = imageValidate($picture, $adminDetails['username']);
            $path = '../../assets/profile/admin/'.$fileSaveName;

            if(move_uploaded_file($picture['tmp_name'], $path))
            {
                echo "Photo uploaded!<br>";
                //header('location: ../view/picchangesuccess.php');
            }
            else
            {
                echo "Photo upload failed!<br>";
            }
            //print_r($file);

            // $dataStringAdmin = file_get_contents('../../model/admin.json');
            // $dataJSONAdmin = json_decode($dataStringAdmin, true);
            // $last = sizeof($dataJSONAdmin);
            // $id = "a-".strval((intval(substr($dataJSONAdmin[$last-1]['id'], 2))+1));

            // $inputAdminArray = [
            //     "id" => $id,
            //     "fullname" => $fullname,
            //     "email"=>$email,
            //     "phone"=>$phone,
            //     "dateOfBirth"=>$dateOfBirth,
            //     "username"=>$username,
            //     "password"=>$password,
            //     "regdate"=>date("Y-m-d"),
            //     "type"=>"admin"
            // ];

            // array_push($dataJSONAdmin, $inputAdminArray);
            // $dataJSONAdmin = json_encode($dataJSONAdmin);
            // file_put_contents('../../model/admin.json', $dataJSONAdmin);

            // $inputLogInArray = [
            //     "id"=>$id,
            //     "username"=>$username,
            //     "password"=>$password,
            //     "type"=>"admin"
            // ];

            // $dataStringLogIn = file_get_contents('../../model/login.json');
            // $dataJSONLogIn = json_decode($dataStringLogIn, true);
            // array_push($dataJSONLogIn, $inputLogInArray);
            // $dataJSONLogIn = json_encode($dataJSONLogIn);
            // file_put_contents('../../model/login.json', $dataJSONLogIn);

            // $picture = $_FILES['propic'];
            // $path = '../../images/profile/admin/'.$id.'.jpeg';

            // if(move_uploaded_file($picture['tmp_name'], $path))
            // {
            //     echo "Photo uploaded!<br>";
            // }
            // else
            // {
            //     echo "Photo upload failed!<br>";
            // }


        
            echo "New Admin added successfully!<br>";
            echo "<a href='../view/addadmin.php'>Go Back</a>";
        }
    }
?>
