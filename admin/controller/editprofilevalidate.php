<?php
    session_start();
    include('./validate_functions.php');
    if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['dob']))
    {
        echo "Please enter all fields, including your profile picture.";
    }
    else
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];

        $fullnameFlag = nameValidation($fullname);
        $emailFlag = emailValidation($email);
        $phoneFlag = phoneValidation($phone);
        $dateFlag = dateValidation($dob);

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

        if($dateFlag == true)
        {
            return;
        }

        if($fullnameFlag == false &&
        $emailFlag == false &&
        $phoneFlag == false &&
        $dateFlag == false)
        {
            include('../model/adminModel.php');
            $updateResult = updateAdminByID($_SESSION['id'], $fullname, $email, $phone, $dob);
        
            echo "Profile Information updated successfully! <br>";
            echo "<a href='../view/profile.php'>Go Back</a>";
        }
    }
?>
