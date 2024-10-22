	<?php
		// Connect to the database
		$conn = mysqli_connect('localhost', 'root', '', 'joy_db');

		// Check for errors
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		// Check if form was submitted
		if(isset($_POST['signup'])){
			// Get form data and sanitize input
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			
			// Insert user data into database
			mysqli_query($conn, "INSERT INTO user (name, email,password ) VALUES ('$username', '$email', '$password')");

			// Redirect to login page
			header("Location: http://localhost/Project/login1.php");
			exit();
		}
	?>

