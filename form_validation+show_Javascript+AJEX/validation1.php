<?php
	
	require_once('functions.php');

	if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["gender"]) 
 && isset($_POST["date"]) && isset($_POST["month"]) && isset($_POST["year"])){
			

		$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	$date = $_POST["date"];
	$month = $_POST["month"];
	$year = $_POST["year"];

     
 $status = register($name, $email,$password,$gender,$date,$month,$year);

			if($status){

				header('location:registration.html?msg=success');
			}else{
				header('location:registration.html?msg=dberror');
			}
		}

	else{
		header('location:registration.html');
	}


?>