<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> 新增文章 </title>
</head>
<body>
	<?php 
	include_once('../DB.php');


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

		<form action ="saveData.php" method="POST">
		Name: <input type=' text' name='userName' ><br>
		Content:<input type=' text' name ='content'><br>
		<input type='submit'>
		</form>


	
</body>
</html>