<?php
	$bName =  $_POST['text'];
	require_once('../../model/dbConnection.php');
	require_once('../../model/userModel.php');
	$result = ajaxHomeSearch($bName);
	$response = "";

	for ($i=0; $i <count($result) ; $i++) 
	{ 
		$response .= "
		<fieldset style='color: blue;' class='titleBox'>
				<br>
				<center><b style='color: black' class='titleBox'>Search Result</b></center>
				<table>
						<tr>
							<td style='width: 6%;'>Book Name:</td>
		<td>".$result[$i]['bookname']."</td></tr>
		<tr><td colspan='2'><hr></td></tr>
		<tr><td>Category:</td>
		<td>".$result[$i]['category']."</td></tr>
		<tr><td colspan='2'><hr></td></tr>
		<tr>
			<td>Author:</td>
			<td>".$result[$i]['authorname']."</td>
		</tr>
		<tr><td colspan='2'><hr></td></tr>
		<tr>
			<td>Post:</td>
			<td>".$result[$i]['post_content']."</td>
		</tr>
		<tr><td colspan='2'><hr></td></tr>
		<tr>
			<td>Post By:</td>
			<td>".$result[$i]['username']."</td>
		</tr>
		</table>
		<br>
		";
	}
	$response .= "</fieldset>";
	echo $response;
?>