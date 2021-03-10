<?php
    include('./validate_functions.php');
    /*
    $dataString = file_get_contents('../model/ruser.json');
    $dataJSON = json_decode($dataString, true);
    $last = sizeof($dataJSON);
    print_r(intval(substr($dataJSON[$last-1]['id'], 2))+1);
    */
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['phone']) || empty($_POST['password'])|| empty($_POST['dateOfBirth']) || empty($_POST['confirmpassword']))
    {
        echo "One or more of the fields are empty!";
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

        $fullnameFlag = nameValidation($fullname);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);
        $passwordFlag = passwordValidation($password);
        $usernameFlag = usernameValidation($username);

        if($fullnameFlag == true)
        {
            echo "Name must be alphabetical!<br>";
        }

        if($emailFlag == true)
        {
            echo "Email must have '@' symbol!<br>";
        }        

        if($phoneFlag == true)
        {
            echo "Phone number can only have a '+' or numeric values!<br>";
        }

        if($usernameFlag == true)
        {
            echo "Username must be alphanumeric!<br>";
        }

        if($password != $confirmpassword)
        {
            $passwordFlag=true;
            echo "passwords do not match!<br>";
        }

        if($fullnameFlag == false &&
        $emailFlag == false &&
        $phoneFlag == false &&
        $usernameFlag == false &&
        $passwordFlag == false)
        {
            $dataStringAdmin = file_get_contents('../model/admin.json');
            $dataJSONAdmin = json_decode($dataStringAdmin, true);
            $last = sizeof($dataJSONAdmin);
            $id = "a-".strval((intval(substr($dataJSONAdmin[$last-1]['id'], 2))+1));

            $inputAdminArray = [
                "id" => $id,
                "fullname" => $fullname,
                "email"=>$email,
                "phone"=>$phone,
                "dateOfBirth"=>$dateOfBirth,
                "username"=>$username,
                "password"=>$password,
                "regdate"=>date("Y-m-d"),
                "type"=>"admin"
            ];

            array_push($dataJSONAdmin, $inputAdminArray);
            $dataJSONAdmin = json_encode($dataJSONAdmin);
            file_put_contents('../model/admin.json', $dataJSONAdmin);

            $inputLogInArray = [
                "id"=>$id,
                "username"=>$username,
                "password"=>$password,
                "type"=>"admin"
            ];

            $dataStringLogIn = file_get_contents('../model/login.json');
            $dataJSONLogIn = json_decode($dataStringLogIn, true);
            array_push($dataJSONLogIn, $inputLogInArray);
            $dataJSONLogIn = json_encode($dataJSONLogIn);
            file_put_contents('../model/login.json', $dataJSONLogIn);
        
            echo "New Admin added successfully!";


        }

        
    }
?>
