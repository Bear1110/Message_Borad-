<?php 
	include_once('../DB.php');
	if(count($_POST)!= 0){//////////////////////準備寫入資料
			$temp = "DELETE FROM `all_messages` WHERE id = '".$_POST['id']."'";
			mysqli_query($conn,$temp);
		}

		header('refresh:0; url=http://localhost/Message_Board/Message_board.php');	
 ?>