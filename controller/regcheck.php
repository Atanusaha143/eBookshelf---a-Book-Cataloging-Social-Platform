<?php 
    if(empty($_POST['id']) && empty($_POST['fullname']) && empty($_POST['email']) && empty($_POST['phone']) && empty($_POST['dateOfBirth']) && empty($_POST['username']) && empty($_POST['password']) && empty($_POST['confirmpassword']))
    {
        echo "One or more of the fields are empty!";
    }
    else
    {
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $idFlag = false;
        $fullnameFlag = false;
        $emailFlag = false;
        $phoneFlag = false;
        $dobFlag = false;
        $usernameFlag = false;
        $passwordFlag = false;
        $confirmpasswordFlag = false;

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