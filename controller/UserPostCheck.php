<?php
	session_start();
	if(isset($_POST['post']))
	{
		$book_name = $_POST['bookName'];
		$author = $_POST['bookAuthor'];
		$post_content = $_POST['postContent'];
		$post_category = $_POST['Category'];
		$user_name = $_SESSION['Name'];

		$post = array( "bookName" => $book_name, "authorName" => $author, "categoryName" => $post_category, "postContent" => $post_content);

		$post_encode = json_encode($post);
		$post_data = fopen("../model/$user_name".".json", "a");
		fwrite($post_data, $post_encode."\r\n");
		fclose($post_data);
		header('location: ../view/UserHome.php');
	}
?>