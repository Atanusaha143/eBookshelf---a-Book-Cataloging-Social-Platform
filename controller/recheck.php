<?php 
    if(empty($_POST['id']) && empty($_POST['fullname']) && empty($_POST['email']) && empty($_POST['phone']) && empty($_POST['dateOfBirth']) && empty($_POST['username']) && empty($_POST['password']) && empty($_POST['confirmpassword']))
    {
        
        echo "One or more of the fields are empty!";
    }
    else
    {
        echo "Yes";
    }
?>
