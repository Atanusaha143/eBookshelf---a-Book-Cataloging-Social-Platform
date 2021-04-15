<?php
	
	session_start();
			require_once('../model/dbConnection.php');
		require_once('../model/userModel.php');
	$id = $_SESSION['sessionBookIdForOrder'];
	$bookDetails = getSellPostById($id);
	$userInfo = getUserByUsername($_SESSION['UserName']);

	$bookname = $bookDetails['bookname'];
	$authorname = $bookDetails['authorname'];
	$category = $bookDetails['category'];
	$book_condition = $bookDetails['book_condition'];
	$price = $bookDetails['price'];
	$buyername = $userInfo['name'];
	$buyeremail = $userInfo['email'];
	$buyerphone = $userInfo['phone_number'];
	$trxId = $_POST['trx'];
	$shippingaddress = $_POST['address'];
	$sellername = $bookDetails['username'];

	$sellDetails = array("bookname" => $bookname, "authorname" => $authorname, "category" => $category, "book_condition" => $book_condition, "price" => $price, "buyername" => $buyername, "buyeremail" => $buyeremail, "buyerphone" => $buyerphone, "trxId" => $trxId, "address" => $shippingaddress, "sellername" => $sellername);
	$add = insertBuy($sellDetails);

	date_default_timezone_set('Asia/Dhaka');
			$date_time = date('Y-m-d H:i:s');
			$activityDetails = array("type" => "Ordered book", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
			$addActivity = insertActivity($activityDetails);

	header('location: ../view/UserShowMyOrderList.php');
?>