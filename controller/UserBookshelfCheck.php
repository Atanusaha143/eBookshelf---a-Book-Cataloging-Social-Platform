<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	$bookId = $_GET['id'];
	$bookDetails = getBookById($bookId);
	$bookname = $bookDetails['bookname'];
	$check = addToBookshelf($_SESSION['UserName'],$bookname);
	header('location: ../view/UserBookshelf.php');
?>