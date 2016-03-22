<?php 
	dirname(__FILE__);  //取的絕對路徑用
	include_once('../DB.php');
	echo  dirname(__FILE__);



	if(count($_POST)!= 0){//////////////////////準備寫入資料
			$temp = "INSERT INTO `all_messages` (`name`,`time`,`content`)  VALUE ('".$_POST['userName']."','".date("Y-m-d h:i:s",mktime(date('h')+6, date('i'), date('s'), date('m'), date('d'), date('Y')))."','".$_POST['content']."');";
			mysqli_query($conn,$temp);
		}
		
		// $stmt = $conn->prepare("INSERT INTO all_messages ( name, content, time) VALUES (?, ?, ?)");
		// $stmt->bind_param("sss", $name, $content, $time);

		// $name = $_POST['userName'];
		// $content = $_POST['content'];
		// $time = date("Y-m-d h:i:s",mktime(date('h')+6, date('i'), date('s'), date('m'), date('d'), date('Y')));
		// $stmt->execute();

		// echo "New records created successfully";
		// $stmt->close();	
		// $conn->close();





		header('refresh:0; url=http://localhost/Message_Board/Message_board.php');	
 ?>