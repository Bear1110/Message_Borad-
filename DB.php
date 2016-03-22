<?php 
		$dbServer="localhost";
		$dbUser="root";
		$dbPass="";
		$dbName = "db_message";

		$conn = @mysqli_connect($dbServer , $dbUser , $dbPass , $dbName);
		//$this->database = @mysqli_connect($dbhost,$account,$password, $dbName);	
						  				
		if(mysqli_connect_errno($conn))			//if error 
			die("Unconnected");

		mysqli_set_charset($conn,"utf-8");			//set the  character

		
		

////////////////////////////////////////////////////class
		class Message{
			var $name;
			var $time;
			var $content;
			var $ID;

			function __construct($id,$n , $t , $c){
				$this->ID   = $id;
				$this->name = $n;
				$this->time = $t;
				$this->content = $c;
			}
			function show(){


				echo "ID: ".$this->ID."<br>";
				echo "Name: ".$this->name."<br>";
				echo "Time: ".$this->time."<br>";
				echo "Content: ".$this->content."<br>";
				echo "====================<br>";

			}
		}
	?>



	