<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'joy_db');

		// Check for errors
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
      // Check if the user is logged in
      if (!isset($_SESSION['email'])) {
      header("Location: login1.php");
      exit();
      }
      
      // Check if form was submitted
      if (isset($_POST['update_profile'])) {
        // Get form data and sanitize input
      $name = mysqli_real_escape_string($conn, $_POST['update_name']);
      $email = mysqli_real_escape_string($conn, $_POST['update_email']);
      $old_password = mysqli_real_escape_string($conn, $_POST['old_password']);
      $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
      $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
      
        // Verify old password
      $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
      $user = mysqli_fetch_assoc($result);

      if ((!$user && !password_verify($old_password, $user['password']))) {
         echo "Incorrect old password.";
      } else {
          // Check if new password matches confirm password
         if ($new_password != $confirm_password) {
         echo "New password and confirm password do not match.";
         } else {
            // Hash the new password
   
            // Update the user's information in the database
            $update = mysqli_query($conn, "UPDATE user SET name='$name', email='$email', password='$new_password' WHERE email='{$_SESSION['email']}'");
      
            if ($update) {
              // Update session variables
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
      
         echo "Profile updated successfully.";
            } else {
         echo "Profile update failed. Please try again later.";
            }
         }
      }
      
   }
      // Close database connection
      mysqli_close($conn);
      ?>