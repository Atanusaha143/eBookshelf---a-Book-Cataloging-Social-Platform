// function profileHighlight()
// {
//     document.getElementById('profile').style.backgroundColor = blue;
// }

// function clickProfile()
// {

// }

let i = 0;

function nameValidation(fullname)
{
    for(i = 0 ; i < fullname.length ; i=i+1)
    {
        if(!((fullname.charCodeAt(i) >= 97 && fullname.charCodeAt(i) <= 122)) 
        && !((fullname.charCodeAt(i) >= 65 && fullname.charCodeAt(i) <= 90))&& 
        !(fullname.charCodeAt(i) == 32) && !(fullname.charCodeAt(i) == 45))
        {
            //console.log('Name can be alphabetical, and can only contain spaces or '-' in between.')
            document.getElementById('namehint').innerHTML = "Name can be alphabetical, and can only contain spaces or '-' in between.";
            return true;
        }
    }
    console.log('Name is valid.');
    return false;
}

function emailValidation(email)
{
    let countAt = 0;
    let countDotCom = 0;
    for(i = 0 ; i<email.length ; i=i+1)
    {
        if(email[i] == '@')
        {
            countAt = countAt + 1;
        }
    }

    let last4Chars = email.slice(-4);
    if(last4Chars == '.com' || last4Chars == '.edu')
    {
        countDotCom = 1;
    }
    if(countAt == 0 || countDotCom == 0)
    {
        document.getElementById('emailhint').innerHTML = "Email must have '@' symbol, followed by a valid mail domain (such as '.com')";
        return true;
    }
    else
    {
        return false;
    }
}

function dobValidation(dob)
{
    dateObject = new Date(dob);
    let year = dateObject.getFullYear();
    //console.log(typeof(year));
    if(year < 1900)
    {
        document.getElementById('dobhint').innerHTML = "The minimum year for date of birth must is 1900";
        return true;
    }
    else
    {
        return false;
    }
}

function phoneValidation(phone)
{
    let count = 0;
    for(i = 1 ; i<phone.length ; i=i+1)
    {
        if(!(phone.charCodeAt(i) >= 48 && phone.charCodeAt(i) <= 57))
        {
            count = count + 1;
        }
    }

    let phonePrefix = phone.substr(0, 3);
    if(phonePrefix != '+88')
    {
        console.log(phonePrefix);
        document.getElementById('phonehint').innerHTML = 'Phone must start with country code (+88)';
        return true;
    }
    else if(count != 0)
    {
        document.getElementById('phonehint').innerHTML = 'Phone number can only contain numeric values';
        return true;
    }
    else if(phone.length < 14)
    {
        document.getElementById('phonehint').innerHTML = 'Phone number must have at least 11 digits after country code';
        return true;
    }
    else if(phonePrefix == '+88' && count == 0 && phone.length == 14)
    {
        return false;
    }
}

function usernameValidation(username)
{
    for(i = 0 ; i < username.length ; i=i+1)
    {
        if(!((username.charCodeAt(i) >= 97 && username.charCodeAt(i) <= 122)) 
        && !((username.charCodeAt(i) >= 65 && username.charCodeAt(i) <= 90)) 
        && !(username.charCodeAt(i) >= 48 && username.charCodeAt(i) <= 57))
        {
            //console.log("Username can only be alphanumeric!");
            document.getElementById('usernamehint').innerHTML = "Username can only be alphanumeric!";
            return true;
        }
    }
    console.log('Username is valid.');
    return false;
}

function passwordValidation(password, confirmpassword)
{
    specialCharCount = 0;
    capitalLetterCount = 0;
    smallLetterCount = 0;
    numericCount = 0;

    if(password == confirmpassword)
    {
        if(password.length < 8)
        {
            console.log('Password must be at least 8 characters long.');
            document.getElementById('passwordhint').innerHTML = "Password must be at least 8 characters long.";
            return true;
        }
        else
        {
            for(i=0 ; i<password.length ; i++)
            {
                if((password.charCodeAt(i) >= 97 && password.charCodeAt(i) <= 122))
                {
                    smallLetterCount = smallLetterCount+1;
                }

                if((password.charCodeAt(i) >= 65 && password.charCodeAt(i) <= 90))
                {
                    capitalLetterCount = capitalLetterCount+1;
                }

                if((password[i] == '@' || password[i] == '#' || password[i] == '!' || password[i] == '$'))
                {
                    specialCharCount = specialCharCount+1;
                }

                if((password.charCodeAt(i) >= 48 && password.charCodeAt(i) <= 57))
                {
                    numericCount = numericCount + 1
                }
            }

            if(capitalLetterCount == 0)
            {
                console.log("Password must contain atleast one capital letter!");
                document.getElementById('passwordhint').innerHTML = "Password must contain atleast one capital letter!";
                return true;
            }
            else if(smallLetterCount == 0)
            {
                console.log("Password must contain atleast one small letter!");
                document.getElementById('passwordhint').innerHTML = "Password must contain atleast one small letter!";
                return true;
            }
            else if(specialCharCount == 0 && capitalLetterCount > 0)
            {
                console.log("Password must contain atleast one special character ('@', '#', '!' or '$')!");
                document.getElementById('passwordhint').innerHTML = "Password must contain atleast one special character ('@', '#', '!' or '$')!";
                return true;
            }
            else if(numericCount == 0)
            {
                console.log("Password must contain at least one number.");
                document.getElementById('passwordhint').innerHTML = "Password must contain at least one number.";
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    else
    {
        console.log('Passwords do not match!');
    }
}

function addAdminCheck()
{
    let name = document.getElementById('fullname').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let dob = document.getElementById('dob').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirmpassword = document.getElementById('confirmpassword').value;
    var propic = document.getElementById('propic');

    let nameFlag, emailFlag, phoneFlag, dobFlag, usernameFlag,passwordFlag;

    //Name
    if(name == "")
    {
        document.getElementById('namehint').innerHTML = 'Please enter the name.';
    }
    else if(name != "")
    {
        nameFlag = nameValidation(name);
        if(nameFlag == true)
        {
            console.log('not ok');
        }
        else
        {
            document.getElementById('namehint').innerHTML = '';
        }
    }

    //Email
    if(email == "")
    {
        document.getElementById('emailhint').innerHTML = 'Please enter the email';
    }
    else if(email != "")
    {   emailFlag = emailValidation(email);
        if(emailFlag == true)
        {

        }
        else
        {
            document.getElementById('emailhint').innerHTML = '';
        }
    }

    //Phone Number
    if(phone == "+88")
    {
        document.getElementById('phonehint').innerHTML = 'Please enter the phone number';
    }
    else if(phone != "+88")
    {
        phoneFlag = phoneValidation(phone);
        if(phoneFlag == true)
        {

        }
        else
        {
            document.getElementById('phonehint').innerHTML = '';
            phoneEncode = encodeURIComponent(phone);
        }
    }

    //Date of Birth
    if(dob == "")
    {
        document.getElementById('dobhint').innerHTML = 'Please enter the date of birth';
    }
    else if(dob != "")
    {
        dobFlag = dobValidation(dob);
        if(dobFlag == true)
        {

        }
        else
        {
            document.getElementById('dobhint').innerHTML = '';
        }
    }

    //Username
    if(username == "")
    {
        document.getElementById('usernamehint').innerHTML = 'Please enter the username';
    }
    else if(username != "")
    {
        usernameFlag = usernameValidation(username);
        if(usernameFlag == true)
        {

        }
        else
        {
            document.getElementById('usernamehint').innerHTML = '';
        }
    }

    //Password
    if(password == "")
    {
        document.getElementById('passwordhint').innerHTML = 'Please enter the password';
    }
    else if(password != "")
    {
        passwordFlag = passwordValidation(password, confirmpassword);
        if(passwordFlag == true)
        {

        }
        else
        {
            document.getElementById('passwordhint').innerHTML = '';
            document.getElementById('passwordhint').innerHTML = 'Password matched';
        }
    }
    if(confirmpassword == "")
    {
        document.getElementById('confirmpasswordhint').innerHTML = 'Please enter the password again';
    }
    else if(confirmpassword != "")
    {
        document.getElementById('confirmpasswordhint').innerHTML = '';
    }

    //Profile Picture
    if(propic.length == 0)
    {
        document.getElementById('propichint').innerHTML = 'Please attach a valid photograph';
    }
    else if(propic.length != 0)
    {
        document.getElementById('propichint').innerHTML = '';
    }
    
    if(nameFlag == false && emailFlag == false && phoneFlag == false && dobFlag == false && usernameFlag == false && passwordFlag == false)
    {
        var formData = new FormData();

        var files = propic.files;
        var propicFile = files[0];

        formData.append('propic', propicFile, propicFile.name);
        formData.append('fullname', name);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('dateOfBirth', dob);
        formData.append('username', username);
        formData.append('password', password);
        formData.append('confirmpassword', confirmpassword);

        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../admin/controller/addadmincheck.php", true);
        xhttp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                if(this.responseText == "New Admin added successfully!")
                {
                    document.getElementById('addadminhint').innerHTML = "Admin added successfully!";
                }
                else if(this.responseText == "Admin addition failed!")
                {
                    document.getElementById('addadminhint').innerHTML = "Failed to add admin!"
                }
                else if(this.responseText == "Username already exists")
                {
                    document.getElementById('addadminhint').innerHTML = "Username is already taken";
                }
                else
                {
                    document.getElementById('addadminhint').innerHTML = "Error occured, failed to add admin.";
                }
            }
        };
        //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(formData);
    }
    return false;
}

function adminUpdateInfo()
{
    let name = document.getElementById('fullname').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let dob = document.getElementById('dob').value;

    let nameFlag, emailFlag, phoneFlag, dobFlag;
    var phoneEncode;

    
    if(name == "")
    {
        document.getElementById('namehint').innerHTML = 'Please enter a valid name';
    }
    else
    {
        nameFlag = nameValidation(name);
        if(nameFlag == true)
        {

        }
        else
        {
            document.getElementById('namehint').innerHTML = '';
        }
    }
    if(email == "")
    {
        document.getElementById('emailhint').innerHTML = 'Please enter a valid email';
    }
    else
    {
        emailFlag = emailValidation(email);
        if(emailFlag == true)
        {

        }
        else
        {
            document.getElementById('emailhint').innerHTML = '';
        }
    }
    if(phone == "")
    {
        document.getElementById('phonehint').innerHTML = 'Please enter a valid phone number';
    }
    else
    {
        phoneFlag = phoneValidation(phone);
        if(phoneFlag == true)
        {

        }
        else
        {
            document.getElementById('phonehint').innerHTML = '';
            phoneEncode = encodeURIComponent(phone);
        }
    }
    if(dob == "")
    {
        document.getElementById('dob').innerHTML = 'Please enter a valid date of birth';
    }
    else
    {
        dobFlag = dobValidation(dob);
        if(dobFlag == true)
        {

        }
        else
        {
            document.getElementById('dobhint').innerHTML = '';
        }
    }
    //alert(phone);

    if(nameFlag == false && emailFlag == false && phoneFlag == false && dobFlag == false)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == 'Updated')
                {
                    document.getElementById('updatehint').innerHTML='Updated information successfully';
                    //console.log('User does not exist');
                }
                else if(this.responseText == 'Terminated')
                {
                    //window.location.href = '../../admin/view/termination.php';
                }
                else
                {
                    alert(this.responseText);
                }
            }
            else
            {

            }
        };
        xhttp.open("POST", "../../admin/controller/editprofilevalidate.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("fullname="+name+"&email="+email+"&phone="+phoneEncode+"&dob="+dob);
    }
    //console.log(name+" "+email+" "+phone+" "+dob);
    return false;
}

function adminLoginCheck()
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if(username=="" && password =="")
    {
        document.getElementById('loginhint').innerHTML='Please enter a username<br>Please enter a password';
        return false;
    }
    else if(username=="")
    {
        document.getElementById('loginhint').innerHTML='Please enter a username';
        return false;
    }
    else if(password=="")
    {
        document.getElementById('loginhint').innerHTML='Please enter a password';
        return false;
    }
    else if(username!="" || password!="")
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText == 'False')
                {
                    document.getElementById('loginhint').innerHTML='User does not exist';
                    console.log('User does not exist');
                }
                else if(this.responseText == 'Terminated')
                {
                    window.location.href = '../../admin/view/termination.php';
                }
                else
                {
                    window.location.reload();
                }
            }
            else
            {

            }
        };
        xhttp.open("POST", "../../admin/controller/logincheck.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&password="+password);
        
        return false;
    }
}

function searchValidate()
{
    let optionlist = document.getElementById('type');
    let option = optionlist.value;
    let radioid = document.getElementById('id');
    let radiousername = document.getElementById('username');
    let searchText = document.getElementById('searchText').value;

    let option1 = false, option2 = false, username = false;
    //console.log(option);
    if(option == 'disabled')
    {
        document.getElementById('searchhint1').innerHTML = 'Please select a type of user';
    }
    else if(option =='admin' || option == 'ruser' || option == 'bpage')
    {
        option1 = true
        document.getElementById('searchhint1').innerHTML = '';
    }
    //console.log(radioid.checked+", "+radiousername);
    if(radioid.checked == true || radiousername.checked == true)
    {
        //console.log('ID or Username is selected');
        option2 = true;
        document.getElementById('searchhint2').innerHTML = '';
    }
    else
    {
        
        document.getElementById('searchhint2').innerHTML = 'Please select an option (ID or Username)';
    }
    
    if(searchText == "")
    {
        document.getElementById('searchhint3').innerHTML = 'Please enter a valid username to search';
        //console.log(searchText);
    }
    else
    {
        usernameFlag = true;
        document.getElementById('searchhint3').innerHTML = '';
        //console.log(searchText);
    }

    if(option1 == true && option2 == true && usernameFlag == true)
    {
        // var xhttp = new XMLHttpRequest();
        // xhttp.onreadystatechange = function() {
        //     if (this.readyState == 4 && this.status == 200) {
        //         if(this.responseText == 'Nonexistent')
        //         {
        //             document.getElementById('messagehint').innerHTML='User does not exist.';
        //             //console.log('User does not exist');
        //             console.log(this.responseText);
        //         }
        //         else
        //         {
        //             //window.location.href = this.responseText;
        //             console.log(this.responseText);
        //         }
        //     }
        //     else
        //     {

        //     }
        // };
        // xhttp.open("GET", "../../admin/controller/searchprocess.php", true);
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // xhttp.send("type="+username);
        return true;
    }
    // console.log(option.value);
    return false;
}

function sendMessage()
{
    let username = document.getElementById('messageUsername').value;

    if(username == "")
    {
        document.getElementById('messagehint').innerHTML = 'Please enter an id to send a message';
        return false;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == 'Nonexistent')
            {
                document.getElementById('messagehint').innerHTML='User does not exist.';
                //console.log('User does not exist');
            }
            else if(this.responseText == 'Self')
            {
                document.getElementById('messagehint').innerHTML='You cannot send a message to yourself!';
                //window.location.href = '../../admin/view/termination.php';
            }
            else
            {
                window.location.href = this.responseText;
            }
        }
        else
        {

        }
    };
    xhttp.open("POST", "../../admin/controller/checkchat.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username="+username);
    
    return false;
}