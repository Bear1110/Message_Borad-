<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Simple Message Board </title>
</head>
<body>

</body>
	<?php 
	include_once('DB.php');



	$sql = "SELECT * FROM `all_messages`";/////////////////////////////////LOAD DATA
	$result = mysqli_query($conn,$sql);
	$messages = array();
	while($row = mysqli_fetch_array($result)){
			$temp = new Message($row['id'],$row['name'],$row['time'],$row['content']);
			array_push($messages, $temp);
	}
	foreach ($messages as $m  ) {////////////////////////////////SHOW the Message
				$m->show();
			}
	?>

	<input type="button" value="新增文章" onclick="location.href='function/New.php'">
	<input type="button" value="刪除文章" onclick="location.href='function/delete.php'">
	<input type="button" value="編輯文章" onclick="location.href='function/edit.php'">


</html>