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
            console.log('Name can be alphabetical, and can only contain spaces or '-' in between.')
            return true;
        }
    }
    console.log('Name is valid.');
    return false;
}

function usernameValidation(username)
{
    for(i = 0 ; i < username.length ; i=i+1)
    {
        if(!((username.charCodeAt(i) >= 97 && username.charCodeAt(i) <= 122)) 
        && !((username.charCodeAt(i) >= 65 && username.charCodeAt(i) <= 90)) 
        && !(username.charCodeAt(i) >= 48 && username.charCodeAt(i) <= 57))
        {
            console.log("Username can only be alphanumeric!");
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

usernameValidation('snigdho611')

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