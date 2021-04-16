// function profileHighlight()
// {
//     document.getElementById('profile').style.backgroundColor = blue;
// }

// function clickProfile()
// {

// }

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
                    //return false;
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
                //console.log(this.status);
            }
        };
        xhttp.open("POST", "../../admin/controller/logincheck.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&password="+password);
        
        return false;
    }
}

