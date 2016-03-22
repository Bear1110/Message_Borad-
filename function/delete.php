<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Simple Message Board </title>
</head>
<body>
	<?php 
	include_once('../DB.php');
	include_once('../Message.php');



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



	<form action ="delete_0.php" method="POST">
	選擇要刪除的文章ID<br>
	ID: <input type=' text' name='id' ><br>
	<input type='submit'>
	</form>
</body>
</html>