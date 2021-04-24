<?php
    session_start();
    include('./validate_functions.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['phone']))
    {
        echo "Please enter all fields, including your profile picture.";
    }
    else
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $fullnameFlag = nameValidation($fullname);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);

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

        if($fullnameFlag == false &&
        $emailFlag == false &&
        $phoneFlag == false )
        {
            include('../model/bpageModel.php');
            $updateResult = updateBpageByID($_SESSION['id'], $fullname, $email, $phone);
            
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
        
            echo "Profile Information updated successfully! <br>";
            echo "<a href='../view/profile.php'>Go Back</a>";
        }
    }
?>
