<script src="resources/JS/script.js"></script>
<?php
	$bName =  $_POST['text'];
	require_once('../../model/dbConnection.php');
	require_once('../../model/userModel.php');
	$result = ajaxAddReviewSearch($bName);
	$response = "";

	for ($i=0; $i <count($result) ; $i++) 
	{ 
		$response .= " <fieldset style='color: blue;' class='titleBox'> <br>
		<center><b style='color: black' class='titleBox'>Search Result</b></center> <br>
		<form action='../controller/UserAddReviewCheck.php' method='POST' onsubmit='return addReviewPost()'>
							<table border = 0 cellspacing = 0 align=center>
							<tr>
								<td><b>Bookname: <b/></td>
								<td>
									<input type='text' name='bookname' value='{$result[$i]['bookname']}' readonly='readonly' size='45%'/>
								</td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td><b>Author:</b></td>
								<td>
									<input type='text' name='authorname' value='{$result[$i]['authorname']}' readonly='readonly' size='45%'/>
								</td>
							</tr>
							<tr><td><br></td></tr>
							<tr rowspan = 2>
								<td>Review Content:</td>
								<td colspan=2 align=center>
								<textarea id='post' rows = '5' cols = '35' name = 'reviewText'></textarea>
								</td>
								<td colspan='3' align='center'>
								<b id='errorPrint' style='color: red'></b>	
								</td>
							</tr>
							<tr><td><br></td></tr>
						
							<tr>
								<td colspan=2 align='center'>
									 	<input type='submit' name='addReview' value='Add Review' class='submitBtn' style='padding:10px 10px'/>
								</td>
							</tr>
							<tr><td><br></td></tr>
							</table>
							</form>";
	}
	$response .= "</fieldset>";
	echo $response;
?>