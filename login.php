<?php
	
	session_start();

	require_once("connection.php");

	if(isset($_POST["username"])) {
		
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$query = "SELECT * FROM users WHERE username='$user' AND password= PASSWORD('$pass')";
		$login = mysqli_query( $conn,$query);
		
		if(mysqli_num_rows($login) == 1) {
			echo "Login Success";
		}
		else {
			echo "Login failed";
		}
	}	
	mysqli_close($conn);
	
	
?>