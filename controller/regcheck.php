<?php 
    if(empty($_POST['fullname']) && empty($_POST['email']) && empty($_POST['phone']) && empty($_POST['dateOfBirth']) && empty($_POST['username']) && empty($_POST['password']) && empty($_POST['confirmpassword']))
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

        //$idFlag = false;
        $fullnameFlag = $emailFlag = $phoneFlag = $dobFlag = $usernameFlag = $passwordFlag = false;

        /*
        for($i = 0 ; $i<strlen($id) ; $i=$i+1)
        {
            if(!(ord($id[$i]) >= 48 && ord($id[$i]) <= 57))
            {
                $idFlag = true;
                break;
            }
        }

        if($idFlag == true)
        {
            echo "ID must be a numeric value!<br>";
        }
        */
        
        for($i = 0 ; $i<strlen($fullname) ; $i=$i+1)
        {
            if(!((ord($fullname[$i]) >= 97 && ord($fullname[$i]) <= 122)) 
            && !((ord($fullname[$i]) >= 65 && ord($fullname[$i]) <= 90))&& !($fullname[$i] == ' '))
            {
                $fullnameFlag = true;
                break;
            }
        }

        if($fullnameFlag == true)
        {
            echo "Name must be alphabetical!<br>";
        }

        for($i = 0 ; $i<strlen($email) ; $i=$i+1)
        {
            if($email[$i] == '@')
            {
                $emailFlag = true;
                break;
            }
        }

        if($emailFlag == false)
        {
            echo "Name must be alphabetical!<br>";
        }

        for($i = 0 ; $i<strlen($phone) ; $i=$i+1)
        {
            if(!(ord($phone[$i]) >= 48 && ord($phone[$i]) <= 57)||!($phone[$i]=='+'))
            {
                $phoneFlag = true;
                break;
            }
        }

        if($phoneFlag == true)
        {
            echo "Phone number can only have a '+' or numeric values!<br>";
        }

        for($i = 0 ; $i<strlen($username) ; $i=$i+1)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) 
            && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))&&!(ord($username[$i]) >= 48 && ord($username[$i]) <= 57))
            {
                $usernameFlag = true;
                break;
            }
        }

        if($usernameFlag == true)
        {
            echo "Username must be alphanumeric!<br>";
        }

        if(strlen($password) < 8)
        {
            echo "password must be atleast 8 characters long!<br>";
        }
        else if(strlen($password) >= 8)
        {
            for($i = 0 ; $i<strlen($password) ; $i=$i+1)
            {
                if(($password[$i] == '@' || $password[$i] == '#' || $password[$i] == '!' || $password[$i] == '$'))
                {
                    $passwordFlag = true;
                    break;
                }
            }

            if($passwordFlag == true)
            {
                echo "password must contain '@', '#', '!' or '$'!<br>";
            }
        }
        if($password != $confirmpassword)
        {
            echo "passwords do not match!<br>";
        }

        if($fullnameFlag == false &&
        $emailFlag == false &&
        $phoneFlag == false &&
        $dobFlag == false &&
        $usernameFlag == false &&
        $passwordFlag == false)
        {
            echo "validated!";
        }
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