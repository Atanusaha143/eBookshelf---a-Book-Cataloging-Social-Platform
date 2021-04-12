<?php    
    include('./validate_functions.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['dateOfBirth']) || empty($_POST['confirmpassword']))
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

        $fullnameFlag = $emailFlag = $phoneFlag = $usernameFlag = $passwordFlag = '';
        $fullnameFlag = nameValidation($fullname);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);
        $passwordFlag = passwordValidation($password);
        $usernameFlag = usernameValidation($username);

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
            echo "validated!<br>";
            header('location: ../view/login.php');
        }
    }
?>