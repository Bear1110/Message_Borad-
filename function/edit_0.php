<?php 
	include_once('../DB.php');
	if(count($_POST)!=0){				///////////////////修改

			$time = date("Y-m-d h:i:s",mktime(date('h')+6, date('i'), date('s'), date('m'), date('d'), date('Y')));

			mysqli_query($conn,"UPDATE `all_messages` SET time='".$time."',content='".$_POST['modifyContent']."' WHERE id =".$_POST['modifyId'].";");
		}

		header('refresh:0; url=http://localhost/Message_Board/Message_board.php');	
 ?>