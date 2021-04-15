<!-- Using DB -->
<?php
	session_start();
	if(isset($_POST['post']))
	{
		if($_POST['bookName'] == "" || $_POST['bookAuthor'] == "" || !isset($_POST['condition']) || $_POST['price'] == "") echo "All fields need to be filled";
		else
		{
			require_once('../model/dbConnection.php');
			require_once('../model/userModel.php');
			$bookname = $_POST['bookName'];
			$authorname = $_POST['bookAuthor'];
			$condition = $_POST['condition'];
			$category = $_POST['Category'];
			$price = $_POST['price'];
			$username = $_SESSION['UserName'];

			$filename = $_FILES["profilePic"]["name"];
			$tempname = $_FILES["profilePic"]["tmp_name"];
        	$folder = "../resources/img/Sell/".$filename;
        		move_uploaded_file($tempname, $folder);

			$sellPost = array("bookname" => $bookname, "authorname" => $authorname, "category" => $category, "condition" => $condition, "price" => $price, "username" => $username, "photo" => $filename);
			$check = insertSell($sellPost);

			date_default_timezone_set('Asia/Dhaka');
			$date_time = date('Y-m-d H:i:s');
			$activityDetails = array("type" => "Created Sell Post", "time" => $date_time, "details" => $bookname, "username" => $_SESSION['UserName']);
			$addActivity = insertActivity($activityDetails);

	 		header('location: ../view/UserShowMySell.php');
		}
	}
?>