<?php
	require_once('db.php');

        function register($name,$email, $password,$gender,$date,$month,$year){

		$conn = getConnection();
		$sql = "insert into users values( '{$name}','{$email}', '{$password}','{$gender}', '{$date}','{$month}','{$year}',0)";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}

?>