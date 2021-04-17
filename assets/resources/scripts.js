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

    if(password == confirmpassword)
    {
        if(password.length < 8)
        {
            console.log('Password must be at least 8 characters long.');
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
            }

            if(capitalLetterCount == 0)
            {
                console.log("Password must contain atleast one capital letter!");
                return true;
            }
            else if(smallLetterCount == 0)
            {
                console.log("Password must contain atleast one small letter!");
                return true;
            }
            else if(specialCharCount == 0 && capitalLetterCount > 0)
            {
                console.log("Password must contain atleast one special character ('@', '#', '!' or '$')!");
                return true;
            }
            else
            {
                return false;
            }
        }
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
    let propic = document.getElementById('propic').files;

    //Name
    if(name == "")
    {
        document.getElementById('namehint').innerHTML = 'Please enter the name.';
    }
    else if(name != "")
    {
        document.getElementById('namehint').innerHTML = '';
    }

    //Email
    if(email == "")
    {
        document.getElementById('emailhint').innerHTML = 'Please enter the email';
    }
    else if(email != "")
    {
        document.getElementById('emailhint').innerHTML = '';
    }

    //Phone Number
    if(phone == "+88")
    {
        document.getElementById('phonehint').innerHTML = 'Please enter the phone number';
    }
    else if(phone != "+88")
    {
        document.getElementById('phonehint').innerHTML = '';
    }

    //Date of Birth
    if(dob == "")
    {
        document.getElementById('dobhint').innerHTML = 'Please enter the date of birth';
    }
    else if(dob != "")
    {
        document.getElementById('dobhint').innerHTML = '';
    }

    //Username
    if(username == "")
    {
        document.getElementById('usernamehint').innerHTML = 'Please enter the username';
    }
    else if(username != "")
    {
        document.getElementById('usernamehint').innerHTML = '';
    }

    //Password
    if(password == "")
    {
        document.getElementById('passwordhint').innerHTML = 'Please enter the password';
    }
    else if(password != "")
    {
        document.getElementById('passwordhint').innerHTML = '';
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
    
    if(name!="" && email!="" && phone!="+880" && dob != "" && username != "" && password!="" && confirmpassword!="" && propic.length>0)
    {
        // let nameFlag = nameValidation(name);
        // let emailFlag = emailValidation(email);
        // let usernameFlag = usernameValidation(username);
        // let passwordFlag = passwordValidation(password, confirmpassword);


        // if(usernameFlag == true || nameFlag == true || emailFlag == true)
        // {
        //     return false;
        // }
        // else
        // {
        //     console.log('ok');
        // }
        console.log('ok')
    }
    //document.getElementById('namehint').innerHTML = 'You must dash dash dash dash dash';
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