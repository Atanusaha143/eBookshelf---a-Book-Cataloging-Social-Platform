<?php
	session_start();
	$clean_file = fopen("../model/".$_SESSION['Name']."Bookshelf".".json",'w');
	fclose($clean_file);
	header('location: ../view/userBookList.php');
?>