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

function registrationValidation()
{
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let username = document.getElementById('regusername').value;
	let password = document.getElementById('regpassword').value;
	let rpassword = document.getElementById('rpassword').value;
	let phone = document.getElementById('phone').value;
	let gender = document.getElementById('gender').value;
	let $flag = false;
	if(name == "")
	{
		document.getElementById('regName').innerHTML = "Empty name field";
		$flag = true;
	}
	if(email == "")
	{
		document.getElementById('regEmail').innerHTML = "Empty email field";
		$flag = true;
	}
	if(username == "")
	{
		document.getElementById('regUsername').innerHTML = "Empty username field";
		$flag = true;
	}
	if(password == "")
	{
		document.getElementById('regPassword').innerHTML = "Empty password field";
		$flag = true;
	}
	if(rpassword == "")
	{
		document.getElementById('regRPassword').innerHTML = "Empty confirm password field";
		$flag = true;
	}
	if(phone == "")
	{
		document.getElementById('regPhone').innerHTML = "Empty phone number field";
		$flag = true;
	}
	if(gender == "")
	{
		document.getElementById('regGender').innerHTML = "Empty gender field";
		$flag = true;
	}
	if(password != rpassword)
	{
		document.getElementById('regPassword').innerHTML = "Password and Confirm Password mismatch";
		$flag = true;
	}
	for (var i=0; i <name.length ; i++) 
	{
		if (name.charCodeAt(i) >= 48 && name.charCodeAt(i) <= 57 ) 
		{
			$flag = true;
			document.getElementById('regName').innerHTML = "Name must not contain other than char";
		}
	}
	if($flag == false)
	{
		let at = 0;
		let dot = 0;
		for (var i=0; i <email.length ; i++) 
		{ 
			if (email[i] == '@') 
			{
				at++;
			}
			else if (email[i] == '.')
			{
				dot++;
			}
		}
		if(at != 1 || dot == 0) 
		{
			document.getElementById('regEmail').innerHTML = "Email is not in proper format"; 
			$flag = true; 
		}
	}
	if(username.length <3)  
	{
		document.getElementById('regUsername').innerHTML = "Username must contain at least 3 charecters";  
		$flag = true; 
	}
	if(password.length <8) 
	{
		document.getElementById('regPassword').innerHTML = "Password must contain at least 8 charecters"; 
		$flag = true; 
	}
	if(phone.length <11)
	{
		document.getElementById('regPhone').innerHTML = "Phone number must contain 11 digits";
		$flag = true;
	}
	if(phone.length >=11)
	{
		for (var i=0; i < phone.length; i++) 
		{ 
			if(phone[i]=='0' || phone[i]=='1' || phone[i]=='2' || phone[i]=='3' || phone[i]=='4' || phone[i]=='5' || phone[i]=='6' || phone[i]=='7' || phone[i]=='8' || phone[i]=='9') { continue; }
			else
			{ 
				document.getElementById('regPhone').innerHTML = "Phone Number must be between 0 - 9";  
				$flag = true; 
				break; 
			}
		}
	}
	if($flag == true)
	{
		return false;
	}
}

function forgetPasswordValidation(email)
{
	// let checkemail = document.getElementById('forgotEmail').value;
	if(email == "")
	{
		// document.getElementById('email').innerHTML = "Email required";
		return false;
	}
	else return true;
}

function searchPostValidation()
{
	let text = document.getElementById('Search').value;
	if(text == "")
	{
		document.getElementById('print').innerHTML = "Search box is empty";
		return false;
	}
}

function checkCurrentPassword()
{
	let pass = document.getElementById('cPass').value;
	if(pass == "")
	{
		document.getElementById('print').innerHTML = "Current password required";
		return false;
	}
}

function userPostValidity()
{
	let bName = document.getElementById('bookname').value;
	let aName = document.getElementById('authorname').value;
	let content = document.getElementById('post').value;
	$flag = false;
	if(bName == "")
	{
		document.getElementById('print1').innerHTML = "Bookname required";
		$flag = true;
	}
	if(aName == "")
	{
		document.getElementById('print2').innerHTML = "Authorname required";
		$flag = true;
	}
	if(content == "")
	{
		document.getElementById('print3').innerHTML = "Post content required";
		$flag = true;
	}
	if ($flag) 
	{
		return false;
	}
	else
	{
		return true;
	}
}

function addReviewSearch()
{
	let searchtext = document.getElementById('s').value;
	if(searchtext == "")
	{
		alert("Search field is empty");
		return false;
	}
}

function addReviewPost()
{
	let reviewText = document.getElementById('post').value;
	if(reviewText == "")
	{
		document.getElementById('errorPrint').innerHTML = "Review content required";
		return false;
	}
}

function addRatingValidation()
{
	let check1 = document.getElementById('rate1').checked;
	let check2 = document.getElementById('rate2').checked;
	let check3 = document.getElementById('rate3').checked;
	let check4 = document.getElementById('rate4').checked;
	let check5 = document.getElementById('rate5').checked;
	console.log(check1);
	console.log(check2);
	console.log(check3);
	console.log(check4);
	console.log(check5);
	if(check1 == false && check2 == false && check3 == false && check4 == false && check5 == false)
	{
		document.getElementById('print').innerHTML = "Rating required";
		return false;
	}
}

function sendMessageValidation()
{
	let searchText = document.getElementById('s').value;
	let sendText = document.getElementById('t').value;
	$flag = false;
	if(searchText == "")
	{
		document.getElementById('print1').innerHTML = "Name required";
		$flag = true;
	}
	if(sendText == "")
	{
		document.getElementById('print2').innerHTML = "Message required";
		$flag = true;
	}

	if($flag)
	{
		return false;
	}

}

function confirmBuyingOrderValidation()
{
	let trx = document.getElementById('TRX').value;
	let address = document.getElementById('add').value;
	$flag = false;
	if(trx == "")
	{
		document.getElementById('print1').innerHTML = "Trx ID required";
		$flag = true;
	}
	if(address == "")
	{
		document.getElementById('print2').innerHTML = "Address required";
		$flag = true;
	}

	if($flag)
	{
		return false;
	}

}

function sellPostvalidation()
{
	let bName = document.getElementById('bookname').value;
	let aName = document.getElementById('authorname').value;
	let condition1 = document.getElementById('new').value;
	let condition2 = document.getElementById('old').value;
	let price = document.getElementById('Price').value;
	let photo = document.getElementById('image').value;
	$flag = false;
	if(bName == "")
	{
		document.getElementById('print1').innerHTML = "Bookname required";
		$flag = true;
	}
	if(aName == "")
	{
		document.getElementById('print2').innerHTML = "Authorname required";
		$flag = true;
	}
	if(condition1 == "" && condition2 == "")
	{
		document.getElementById('print3').innerHTML = "Condition required";
		$flag = true;
	}
	if(price == "")
	{
		document.getElementById('print4').innerHTML = "Price required";
		$flag = true;
	}
	if(photo == "")
	{
		document.getElementById('print5').innerHTML = "Photo required";
		$flag = true;
	}
	if ($flag) 
	{
		return false;
	}
}

function mySellPostValidation()
{
	let bName = document.getElementById('bookname').value;
	let aName = document.getElementById('authorname').value;
	let condition1 = document.getElementById('new').value;
	let condition2 = document.getElementById('old').value;
	let price = document.getElementById('Price').value;
	$flag = false;
	if(bName == "")
	{
		document.getElementById('print1').innerHTML = "Bookname required";
		$flag = true;
	}
	if(aName == "")
	{
		document.getElementById('print3').innerHTML = "Authorname required";
		$flag = true;
	}
	if(condition1 == "" && condition2 == "")
	{
		document.getElementById('print4').innerHTML = "Condition required";
		$flag = true;
	}
	if(price == "")
	{
		document.getElementById('print5').innerHTML = "Price required";
		$flag = true;
	}
	if ($flag) 
	{
		return false;
	}
	else return true;
}

function contactValiadtion()
{
	let msgText = document.getElementById('Message').value;
	if(msgText == "")
	{
		document.getElementById('print').innerHTML = "Message required";
		return false;
	}
}

function eBookshelf()
{
	const xhttp	= new XMLHttpRequest();

	xhttp.open('GET', 'resources/JS/eBookshelfDetails.php', true);
	xhttp.send();
	xhttp.onreadystatechange = function()
	{	
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('eBookshelf').innerHTML = this.responseText;
		}
	}
}

function homeSearch()
{
	const text = document.getElementById("Search").value;
	const xhttp	= new XMLHttpRequest();
	xhttp.open('POST', '../resources/JS/homeSearch.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('text='+text);
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200){
			 document.getElementById('print').innerHTML = this.responseText;
		}
	}
}

function ajaxForgotPasswordCheck()
{
	const email = document.getElementById("forgotEmail").value;
	var result = forgetPasswordValidation(email);
	if(result == false)
	{
		document.getElementById('email').innerHTML = "Email required";
	}
	else
	{
		const xhttp	= new XMLHttpRequest();
		xhttp.open('POST', '../resources/JS/ajaxForgotPasswordCheck.php', true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send('email='+email);
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200){
				 if(this.responseText == "Success")
				 {
				 	alert("Check your email!");
				 }
				 else
				 {
				 	alert("Invalid email!");
				 }
			}
		}
	}
}

function ajaxAddReviewSearch()
{
	const text = document.getElementById("Search").value;
	const xhttp	= new XMLHttpRequest();
	xhttp.open('POST', '../resources/JS/addReviewSearch.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('text='+text);
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200){
			 document.getElementById('print').innerHTML = this.responseText;
		}
	}
}


function ajaxLogin()
{
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	var remember = document.getElementById("remem").checked;

	if(user != "" && pass != "")
	{
		const xhttp	= new XMLHttpRequest();
		xhttp.open('POST', 'resources/JS/ajaxLoginCheck.php', true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send('user='+user+"&&pass="+pass+"&&remember="+remember);
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				if(this.responseText == "Success")
				{
					window.location.href = "../../view/UserHome.php";
					window.location.reload();
				}
				else if(this.responseText == "terminated")
				{
				 	alert("You have been terminated!");
				}
				else
				{
					alert("Invalid Username and Password");
				}
			}
		}
	}
	else
	{
		alert("Username or Password can't be empty!");
	}
}

function ajaxRegistration()
{
	var name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let username = document.getElementById('regusername').value;
	let password = document.getElementById('regpassword').value;
	let rpassword = document.getElementById('rpassword').value;
	let phone = document.getElementById('phone').value;
	let gender = document.getElementById('gender').value;
	let $flag = false;
	if(name == "")
	{
		document.getElementById('regName').innerHTML = "Empty name field";
		$flag = true;
	}
	if(email == "")
	{
		document.getElementById('regEmail').innerHTML = "Empty email field";
		$flag = true;
	}
	if(username == "")
	{
		document.getElementById('regUsername').innerHTML = "Empty username field";
		$flag = true;
	}
	if(password == "")
	{
		document.getElementById('regPassword').innerHTML = "Empty password field";
		$flag = true;
	}
	if(rpassword == "")
	{
		document.getElementById('regRPassword').innerHTML = "Empty confirm password field";
		$flag = true;
	}
	if(phone == "")
	{
		document.getElementById('regPhone').innerHTML = "Empty phone number field";
		$flag = true;
	}
	if(gender == "")
	{
		document.getElementById('regGender').innerHTML = "Empty gender field";
		$flag = true;
	}
	if(password != rpassword)
	{
		document.getElementById('regPassword').innerHTML = "Password and Confirm Password mismatch";
		$flag = true;
	}
	for (var i=0; i <name.length ; i++) 
	{
		if (name.charCodeAt(i) >= 48 && name.charCodeAt(i) <= 57 ) 
		{
			$flag = true;
			document.getElementById('regName').innerHTML = "Name must not contain other than char";
		}
	}
	if($flag == false)
	{
		let at = 0;
		let dot = 0;
		for (var i=0; i <email.length ; i++) 
		{ 
			if (email[i] == '@') 
			{
				at++;
			}
			else if (email[i] == '.')
			{
				dot++;
			}
		}
		if(at != 1 || dot == 0) 
		{
			document.getElementById('regEmail').innerHTML = "Email is not in proper format"; 
			$flag = true; 
		}
	}
	if(username.length <3)  
	{
		document.getElementById('regUsername').innerHTML = "Username must contain at least 3 charecters";  
		$flag = true; 
	}
	if(password.length <8) 
	{
		document.getElementById('regPassword').innerHTML = "Password must contain at least 8 charecters"; 
		$flag = true; 
	}
	if(phone.length <11)
	{
		document.getElementById('regPhone').innerHTML = "Phone number must contain 11 digits";
		$flag = true;
	}
	if(phone.length >=11)
	{
		for (var i=0; i < phone.length; i++) 
		{ 
			if(phone[i]=='0' || phone[i]=='1' || phone[i]=='2' || phone[i]=='3' || phone[i]=='4' || phone[i]=='5' || phone[i]=='6' || phone[i]=='7' || phone[i]=='8' || phone[i]=='9') { continue; }
			else
			{ 
				document.getElementById('regPhone').innerHTML = "Phone Number must be between 0 - 9";  
				$flag = true; 
				break; 
			}
		}
	}
	if($flag == false)
	{
		const xhttp	= new XMLHttpRequest();
		xhttp.open('POST', 'resources/JS/ajaxRegistrationCheck.php', true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send('name='+name+"&&email="+email+"&&user="+username+"&&pass="+password+"&&phone="+phone+"&&gender="+gender);
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200){
				if(this.responseText == " [Username already exist!] ")
				{
					document.getElementById('print').innerHTML = this.responseText;
				}
				else if (this.responseText == " [Email already exist!] ")
				{
					document.getElementById('print').innerHTML = this.responseText;
				}
				else if (this.responseText == " [Phone Number already exist!] ")
				{
					document.getElementById('print').innerHTML = this.responseText;
				}
				else
				{
					window.location.href = "../../view/UserHome.php";
					window.location.reload();
				}
			}
		}
	}
}

function ajaxAddPost()
{
	let result = userPostValidity()
	if(result == true)
	{
		let bName = document.getElementById('bookname').value;
		let aName = document.getElementById('authorname').value;
		let category = document.getElementById('category').value;
		let content = document.getElementById('post').value;
		const xhttp	= new XMLHttpRequest();
		xhttp.open('POST', '../resources/JS/ajaxPostCheck.php', true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send('bookname='+bName+'&&authorname='+aName+'&&category='+category+'&&content='+content);
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200){
				 if(this.responseText == "Success")
				 {
				 	window.location.href = "UserShowMyPost.php";
					window.location.reload();
				 }
				 else
				 {
				 	alert("Failed to post!");
				 }
			}
		}
	}
}