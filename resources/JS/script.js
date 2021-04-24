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
	if($flag == true)
	{
		return false;
	}
}

function forgetPasswordValidation()
{
	let checkemail = document.getElementById('forgotEmail').value;
	if(checkemail == "")
	{
		document.getElementById('email').innerHTML = "Email required";
		return false;
	}
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
		document.getElementById('print').innerHTML = "Review content required";
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
	return false;
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
	let photo = document.getElementById('image').value;
	$flag = false;
	if(bName == "")
	{
		document.getElementById('print1').innerHTML = "Bookname required";
		$flag = true;
	}
	if(aName == "")
	{
		document.getElementById('print2').innerHTML = "Photo required";
		$flag = true;
	}
	if(condition1 == "" && condition2 == "")
	{
		document.getElementById('print3').innerHTML = "Authorname required";
		$flag = true;
	}
	if(price == "")
	{
		document.getElementById('print4').innerHTML = "Condition required";
		$flag = true;
	}
	if(photo == "")
	{
		document.getElementById('print5').innerHTML = "Price required";
		$flag = true;
	}
	alert("GO");
	if ($flag) 
	{
		return false;
	}
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

function changeLinkName()
{
	alert("Added");
}