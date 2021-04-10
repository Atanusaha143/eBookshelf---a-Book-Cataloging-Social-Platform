<?php
    function nameValidation($fullname)
    {
        for($i = 0 ; $i<strlen($fullname) ; $i=$i+1)
        {
            if(!((ord($fullname[$i]) >= 97 && ord($fullname[$i]) <= 122)) 
            && !((ord($fullname[$i]) >= 65 && ord($fullname[$i]) <= 90))&& !($fullname[$i] == ' ') && !($fullname[$i] == '-'))
            {
                echo "Name can be alphabetical, and can only contain spaces or '-' in between.<br>";
                return true;
            }
        }
        return false;
    }

    function emailValidation($email)
    {
        $count = 0;
        for($i = 0 ; $i<strlen($email) ; $i=$i+1)
        {
            if($email[$i] == '@')
            {
                $count = $count + 1;
            }
        }
        if($count==0)
        {
            echo "Email must have '@' symbol!<br>";
            return true;
        }
        else
        {
            return false;
        }
    }

    function phoneValidation($phone)
    {
        $count = 0;
        for($i = 0 ; $i<strlen($phone) ; $i=$i+1)
        {
            if((ord($phone[$i]) >= 48 && ord($phone[$i]) <= 57) || $phone[$i] == '+')
            {
                $count = $count + 1;
            }
        }
        if($count!=strlen($phone))
        {
            echo "Phone number can only have a '+' or numeric values!<br>";
            return true;
        }
        else
        {
            return false;
        }
    }

    function passwordValidation($password)
    {
        $specialCharCount = 0;
        $capitalLetterCount = 0;
        $smallLetterCount = 0;
        if(strlen($password) < 8)
        {
            echo "Password must be atleast 8 characters long!<br>";
            return true;
        }
        else if(strlen($password) >= 8)
        {
            for($i = 0 ; $i<strlen($password) ; $i=$i+1)
            {
                if((ord($password[$i]) >= 97 && ord($password[$i]) <= 122))
                {
                    $smallLetterCount = $smallLetterCount+1;
                }

                if((ord($password[$i]) >= 65 && ord($password[$i]) <= 90))
                {
                    $capitalLetterCount = $capitalLetterCount+1;
                }

                if(($password[$i] == '@' || $password[$i] == '#' || $password[$i] == '!' || $password[$i] == '$'))
                {
                    $specialCharCount = $specialCharCount+1;
                }
            }

            if($capitalLetterCount == 0)
            {
                echo "Password must contain atleast one capital letter!<br>";
                return true;
            }
            else if($smallLetterCount == 0)
            {
                echo "Password must contain atleast one small letter!<br>";
                return true;
            }
            else if($specialCharCount == 0 && $capitalLetterCount > 0)
            {
                echo "Password must contain atleast one special character ('@', '#', '!' or '$')!<br>";
                return true;
            }
            else
            {
                return false;
            }
            // if($passwordFlag == false)
            // {
            //     echo "password must contain '@', '#', '!' or '$'!<br>";
            // }
        }
    }

    function usernameValidation($username)
    {
        //$count = 0;
        for($i = 0 ; $i<strlen($username) ; $i=$i+1)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) 
            && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90)) 
            && !(ord($username[$i]) >= 48 && ord($username[$i]) <= 57))
            {
                echo "Username can only be alphanumeric!<br>";
                return true;
            }
        }
        return false;
    }

    function imageValidate($fileFlag, $username)
    {
        $file = $fileFlag['name'];
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        //print($extension);
        if($extension == 'JPG' || $extension == 'JPEG' || $extension == 'PNG' )
        {
            //echo "Picture uploaded successfully!";
            return false;
        }
        else
        {
            echo "File is not an image. Please upload an image file!";
            return true;
        }
    }
?>