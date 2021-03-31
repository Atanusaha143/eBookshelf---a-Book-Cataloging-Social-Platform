<?php
	session_start();
	if(isset($_POST['post']))
	{
		if($_POST['bookName'] == "") echo "Please write book name";
		elseif($_POST['bookAuthor'] == "") echo "Please write author name";
		elseif($_POST['postContent'] == "") echo "Please write post content";
		elseif (!empty($_POST['bookName']) && !empty($_POST['bookAuthor']) && !empty($_POST['postContent']))
		{
			date_default_timezone_set('Asia/Dhaka');
			$book_name = $_POST['bookName'];
			$author = $_POST['bookAuthor'];
			$post_content = $_POST['postContent'];
			$post_category = $_POST['Category'];
			$user_name = $_SESSION['Name'];
			$date_time = date('Y-m-d H:i:s');

			$post = array( "bookName" => $book_name, "authorName" => $author, "categoryName" => $post_category, "postContent" => $post_content, "username" => $user_name);
			$activity = array("timeAndDate" => $date_time, "bookName" => $book_name, "authorName" => $author, "categoryName" => $post_category, "postContent" => $post_content, "activity_type" => 'Create Post');

			$post_encode = json_encode($post);
			$post_data = fopen("../model/$user_name"."AllPost".".json", "a");
			fwrite($post_data, $post_encode."\r\n");
			fclose($post_data);

			$activity_encode = json_encode($activity);
			$activity_data = fopen("../model/$user_name"."AllActivity".".json", "a");
			fwrite($activity_data, $activity_encode."\r\n");
			fclose($activity_data);

			header('location: ../view/UserHome.php');
		}
	}
?>