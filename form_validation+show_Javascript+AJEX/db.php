<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'hm');
		return $conn;
	}
?>