<!DOCTYPE html>
<html>
<head>
	<title></title>
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


<form action ="edit_0.php" method="POST">
		請輸入欲編輯的文章ID<br>
		ID: <input type=' text' name='modifyId' ><br>
		Content:<input type=' text' name ='modifyContent'><br>
		<input type='submit'>
		</form>
</body>
</html>






