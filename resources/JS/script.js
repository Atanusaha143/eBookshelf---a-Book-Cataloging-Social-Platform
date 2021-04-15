function loginValidation()
	{
		let username = document.getElementById('username').value;
		let password = document.getElementById('password').value;
		if(username == "")
		{
			alert("Username must be filled out");
			return false;
		}
		else if(password == "")
		{
			alert("Password must be filled out");
			return false;
		}
	}