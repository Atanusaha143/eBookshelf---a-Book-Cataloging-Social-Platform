// function profileHighlight()
// {
//     document.getElementById('profile').style.backgroundColor = blue;
// }

// function clickProfile()
// {

// }

function nameValidation(fullname)
{
    let i = 0;
    for(i = 0 ; i < fullname.length ; i=i+1)
    {
        if(!((fullname.charCodeAt(i) >= 97 && fullname.charCodeAt(i) <= 122)) 
        && !((fullname.charCodeAt(i) >= 65 && fullname.charCodeAt(i) <= 90))&& 
        !(fullname.charCodeAt(i) == 32) && !(fullname.charCodeAt(i) == 45))
        {
            //echo "Name can be alphabetical, and can only contain spaces or '-' in between.<br>";
            console.log('Name can be alphabetical, and can only contain spaces or '-' in between.')
            return true;
        }
        //console.log(fullname.charCodeAt(i));
    }
    console.log('Name is valid.');
    return false;
}

nameValidation('-')

function usernameValidation(username)
{
    
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