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

        $fullnameFlag = $emailFlag = $phoneFlag = $dobFlag = $usernameFlag = $passwordFlag = '';
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
            echo "validated!<br>";
        }
        echo "fullname: ".$fullnameFlag."<br>"."email: ".$emailFlag."<br>"."phone: ".$phoneFlag."<br>"."username: ".$usernameFlag."<br>"."password: ".$passwordFlag;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error!</title>
</head>
<body>
    
</body>
</html>