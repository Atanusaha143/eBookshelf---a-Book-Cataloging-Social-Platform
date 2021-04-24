<?php
    
?>
<?php
    session_start();
    include('./validate_functions.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['phone']) || empty($_POST['password'])|| empty($_POST['confirmpassword']) || $_FILES['propic']['size'] == 0)
    {
        echo "Please enter all fields, including a profile picture.";

        // echo $_FILES['propic']['name'];
    }
    else
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
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
            $usernameCheckFlag = uniqueUsernameCheckRegular($username);
            if($usernameCheckFlag == false)
            {
                $addRegularStatus = insertNewRegular($fullname, $email, $phone, $username, $gender, $password, $fileSaveName);
                if($addRegularStatus == true)
                {
                    $picture = $_FILES['propic'];
                    $path = '../../assets/profile/admin/'.$fileSaveName;

                    if(move_uploaded_file($picture['tmp_name'], $path))
                    {
                        echo "Added Regular User";
                    }
                }
                else
                {
                    echo "Regular User addition failed!";
                }
            }
            else
            {
                echo "Username already exists";
            }
        }
    }
?>
