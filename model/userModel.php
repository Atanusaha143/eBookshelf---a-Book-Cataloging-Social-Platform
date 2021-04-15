<?php //Author: Atanu Saha

	function insertUser($userDetails)
	{
		$conn = getConnection();
		$sql = "insert into regular_userlist values('', '{$userDetails['name']}', '{$userDetails['email']}', '{$userDetails['username']}', '{$userDetails['password']}','{$userDetails['phone_number']}','{$userDetails['gender']}','')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getAllUser()
	{
		$conn = getConnection();
		$sql = "select * from regular_userlist";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}

	function getUserByUsername($username)
	{

		$conn = getConnection();
		$sql = "select * from regular_userlist where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getUserByName($name)
	{

		$conn = getConnection();
		$sql = "select * from regular_userlist where name='{$name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function updateUser($userDetails,$id)
	{

		$conn = getConnection();
		$sql = "update regular_userlist set name = '{$userDetails['name']}', email = '{$userDetails['email']}', username = '{$userDetails['username']}', password = '{$userDetails['password']}', phone_number = '{$userDetails['phone_number']}', gender = '{$userDetails['gender']}', profile_photo='{$userDetails['dp']}'  where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getBookById($id)
	{

		$conn = getConnection();
		$sql = "select * from regular_allbooks where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllBooks()
	{
		$conn = getConnection();
		$sql = "select * from regular_allbooks";
		$result = mysqli_query($conn, $sql);
		$books =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($books, $row); 
		}

		return $books;
	}

	function addToBookshelf($username,$bookname)
	{
		$conn = getConnection();
		$sql = "insert into regular_bookshelf values('','{$username}','{$bookname}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getBookshelfByUsername($username)
	{

		$conn = getConnection();
		$sql = "select * from regular_bookshelf where username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		$bookshelf =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($bookshelf, $row); 
		}

		return $bookshelf;
	}

	function clearBookshelf($username)
	{
		$conn = getConnection();
		$sql = "delete from regular_bookshelf where username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function updateBookshelf($username,$id)
	{
		$conn = getConnection();
		$sql = "delete from regular_bookshelf where username = '{$username}' and id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertPost($postDetails)
	{
		$conn = getConnection();
		$sql = "insert into regular_post values('', '{$postDetails['username']}', '{$postDetails['bookname']}', '{$postDetails['authorname']}', '{$postDetails['category']}','{$postDetails['postcontent']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertActivity($activityDetails)
	{
		$conn = getConnection();
		$sql = "insert into regular_activities values('', '{$activityDetails['username']}', '{$activityDetails['type']}', '{$activityDetails['time']}', '{$activityDetails['details']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertAllBooks($bookDetails)
	{
		$conn = getConnection();
		$sql = "insert into regular_allbooks values('', '{$bookDetails['bookname']}', '{$bookDetails['category']}', '{$bookDetails['authorname']}', '{$bookDetails['details']}', '{$bookDetails['username']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getAllActivitiesByUserName($username)
	{
		$conn = getConnection();
		$sql = "select * from regular_activities where username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		$activities =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($activities, $row); 
		}

		return $activities;
	}

	function insertContactMessage($username, $message, $time)
	{
		$conn = getConnection();
		$sql = "insert into regular_contact values('', '{$username}', '{$message}', '{$time}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertReview($username, $bookname, $authorname, $post)
	{
		$conn = getConnection();
		$sql = "insert into regular_addreview values('', '{$username}', '{$bookname}', '{$authorname}', '{$post}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getAllReview()
	{
		$conn = getConnection();
		$sql = "select * from regular_addreview";
		$result = mysqli_query($conn, $sql);
		$reviews =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($reviews, $row); 
		}

		return $reviews;
	}

	function getReviewByUserName($username)
	{
		$conn = getConnection();
		$sql = "select * from regular_addreview where username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		$myReviews =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($myReviews, $row); 
		}

		return $myReviews;
	}

	function getPostByUserName($username)
	{
		$conn = getConnection();
		$sql = "select * from regular_post where username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		$myPosts =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($myPosts, $row); 
		}

		return $myPosts;
	}

	function getPostById($id)
	{
		$conn = getConnection();
		$sql = "select * from regular_post where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function deletePostById($id)
	{
		$conn = getConnection();
		$sql = "delete from regular_post where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function updatePostById($id, $updatePost)
	{
		$conn = getConnection();
		$sql = "update regular_post set bookname = '{$updatePost['bookname']}', authorname = '{$updatePost['authorname']}', category = '{$updatePost['category']}', post_content = '{$updatePost['post']}'  where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function deleteReviewById($id)
	{
		$conn = getConnection();
		$sql = "delete from regular_addreview where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getReviewById($id)
	{
		$conn = getConnection();
		$sql = "select * from regular_addreview where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function updateReviewById($id, $updateReview)
	{
		$conn = getConnection();
		$sql = "update regular_addreview set bookname = '{$updateReview['bookname']}', authorname = '{$updateReview['authorname']}', review_content = '{$updateReview['review']}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertRating($username, $bookname, $authorname, $rating)
	{
		$conn = getConnection();
		$sql = "insert into regular_addrating values('', '{$username}', '{$bookname}', '{$authorname}', '{$rating}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getRatingByUserName($username)
	{
		$conn = getConnection();
		$sql = "select * from regular_addrating where username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		$myRating =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($myRating, $row); 
		}

		return $myRating;
	}

	function getAllRating()
	{
		$conn = getConnection();
		$sql = "select * from regular_addrating";
		$result = mysqli_query($conn, $sql);
		$ratings =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($ratings, $row); 
		}

		return $ratings;
	}

	function getPostByBookname($bookname)
	{
		$conn = getConnection();
		$sql = "select * from regular_post where bookname='{$bookname}'";
		$result = mysqli_query($conn, $sql);
		$book =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($book, $row); 
		}

		return $book;
	}

	function getAllPost()
	{
		$conn = getConnection();
		$sql = "select * from regular_post";
		$result = mysqli_query($conn, $sql);
		$posts =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($posts, $row); 
		}

		return $posts;
	}

	function getBookByBookname($bookname)
	{
		$conn = getConnection();
		$sql = "select * from regular_allbooks where bookname = '{$bookname}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getReviewByBookname($bookname)
	{
		$conn = getConnection();
		$sql = "select * from regular_addreview";
		$result = mysqli_query($conn, $sql);
		$reviews =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($reviews, $row); 
		}

		return $reviews;
	}

	function getRatingByBookname($bookname)
	{
		$conn = getConnection();
		$sql = "select * from regular_addrating";
		$result = mysqli_query($conn, $sql);
		$ratings =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($ratings, $row); 
		}

		return $ratings;
	}

	function getRatingById($id)
	{
		$conn = getConnection();
		$sql = "select * from regular_addrating where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function updateRatingById($id, $updateRating)
	{
		$conn = getConnection();
		$sql = "update regular_addrating set bookname = '{$updateRating['bookname']}', authorname = '{$updateRating['authorname']}', rating = '{$updateRating['rating']}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function deleteRatingwById($id)
	{
		$conn = getConnection();
		$sql = "delete from regular_addrating where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertSell($sellDetails)
	{
		$conn = getConnection();
		$sql = "insert into regular_sell values('', '{$sellDetails['bookname']}', '{$sellDetails['authorname']}', '{$sellDetails['category']}', '{$sellDetails['condition']}','{$sellDetails['price']}','{$sellDetails['username']}','{$sellDetails['photo']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getUserSellPostByUsername($username)
	{
		$conn = getConnection();
		$sql = "select * from regular_sell where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$sellpost =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($sellpost, $row); 
		}

		return $sellpost;
	}

	function getAllSellPost()
	{
		$conn = getConnection();
		$sql = "select * from regular_sell";
		$result = mysqli_query($conn, $sql);
		$allsellpost =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($allsellpost, $row); 
		}

		return $allsellpost;
	}

	function getSellPostById($id)
	{
		$conn = getConnection();
		$sql = "select * from regular_sell where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function updateSellPostById($id, $updateSell)
	{
		$conn = getConnection();
		$sql = "update regular_sell set bookname = '{$updateSell['bookname']}', authorname = '{$updateSell['authorname']}', category = '{$updateSell['category']}', book_condition = '{$updateSell['condition']}', price = '{$updateSell['price']}', photo = '{$updateSell['photo']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	function deleteSellingPostById($id)
	{
		$conn = getConnection();
		$sql = "delete from regular_sell where id = '{$id}'";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertBuy($sellDetails)
	{
		$conn = getConnection();
		$sql = "insert into regular_buy values('', '{$sellDetails['bookname']}', '{$sellDetails['authorname']}', 
			'{$sellDetails['category']}', '{$sellDetails['book_condition']}','{$sellDetails['price']}','{$sellDetails['buyername']}','{$sellDetails['buyeremail']}','{$sellDetails['buyerphone']}','{$sellDetails['trxId']}','{$sellDetails['address']}', '{$sellDetails['sellername']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getPurchaseByBuyername($buyername)
	{
		$conn = getConnection();
		$sql = "select * from regular_buy where buyername ='{$buyername}'";
		$result = mysqli_query($conn, $sql);
		$allsellpost =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($allsellpost, $row); 
		}

		return $allsellpost;
	}

	function insertSentMessage($username,$receivername,$message1)
	{
		$conn = getConnection();
		$sql = "insert into regular_sentmessage values('', '{$username}', '{$receivername}', '{$message1}' )";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertReceiveMessage($username1,$sendername,$message2)
	{
		$conn = getConnection();
		$sql = "insert into regular_receivemessage values('', '{$username1}', '{$sendername}', '{$message2}' )";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getSentMessagesByUserName($username)
	{
		$conn = getConnection();
		$sql = "select * from regular_sentmessage where username ='{$username}'";
		$result = mysqli_query($conn, $sql);
		$allSentMsg =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($allSentMsg, $row); 
		}

		return $allSentMsg;
	}

	function getReceiveMessagesByUserName($username)
	{
		$conn = getConnection();
		$sql = "select * from regular_receivemessage where username ='{$username}'";
		$result = mysqli_query($conn, $sql);
		$allReceiveMsg =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($allReceiveMsg, $row); 
		}

		return $allReceiveMsg;
	}
?>