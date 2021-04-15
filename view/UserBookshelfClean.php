<!-- using Json -->
<!-- <?php
	/*session_start();
	$clean_file = fopen("../model/".$_SESSION['Name']."Bookshelf".".json",'w');
	fclose($clean_file);
	header('location: ../view/userBookList.php');*/
?> -->


<!-- using DB -->
<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	$clearBookshelf = clearBookshelf($_SESSION['UserName']);
	header('location: ../view/userBookList.php');
?>