<?php
    //Return false in case conditions are met. 
    //Return true in case they are not met. 
    function nameValidation($fullname)
    {
        for($i = 0 ; $i<strlen($fullname) ; $i=$i+1)
        {
            if(!((ord($fullname[$i]) >= 97 && ord($fullname[$i]) <= 122)) 
            && !((ord($fullname[$i]) >= 65 && ord($fullname[$i]) <= 90))&& !($fullname[$i] == ' '))
            {
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
            echo "password must be atleast 8 characters long!<br>";
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
                return true;
            }
        }
        return false;
    }
?>