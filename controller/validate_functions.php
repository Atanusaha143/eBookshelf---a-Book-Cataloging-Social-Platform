<?php
    //Return false in case conditions are met. 
    //Return true in case they are not met. 
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
        $count = 0;
        if(strlen($password) < 8)
        {
            echo "Password must be atleast 8 characters long!<br>";
            return true;
        }
        else if(strlen($password) >= 8)
        {
            for($i = 0 ; $i<strlen($password) ; $i=$i+1)
            {
                if(($password[$i] == '@' || $password[$i] == '#' || $password[$i] == '!' || $password[$i] == '$'))
                {
                    $count = $count+1;
                }
            }

            if($count > 0)
            {
                return false;
            }
            else
            {
                echo "password must contain '@', '#', '!' or '$'!<br>";
                return true;
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
?>