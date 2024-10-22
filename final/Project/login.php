<?php 

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'joy_db');

// Check for errors
if(mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from user where email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['email'] = $user_data['email'];
						header("Location: Joyphp.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>