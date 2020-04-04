<?php 
	session_start();

	// variable declaration
	$name = "";
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to databaseindex

	$connect = new mysqli('localhost', 'root', '', 'resume');



	if ( $connect->connect_error){
		die('connection failed');
	} else





	// REGISTER USER
	if (isset($_POST['reguser']))
	{
		// receive all input values from the form

		$name = $_POST ['name'];
		$username = $_POST ['username'];
		$email = $_POST ['email'];
		$password_1 = $_POST ['password_1'];
		$password_2 = $_POST ['password_2'];
		
		
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
		if ($password_1 != $password_2)
		{
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0)
		{
			
			$sql = "INSERT INTO users (name, username, email, password) 
					  VALUES('$name', '$username', '$email', '$password_1')";

			if ($connect->query($sql) === TRUE)
			{
			$_SESSION['success'] = "You are now Registered";
			header('location: login.php');
			}

		}

	}




	// LOGIN USER
	if (isset($_POST['loginuser']))
	{
		$username = $_POST ['username'];
		$password = $_POST ['password'];

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0)
		{

			$sql ="SELECT username  FROM users WHERE username = '$username' AND password = '$password'";
			$results = $connect->query($sql);

			if ($results-> num_rows > 0)
			{

				while ($row=mysqli_fetch_assoc($results))
					{
						$_SESSION['username'] = $username;
						$_SESSION['success'] = "You are now logged in";
				header('location: php_resumepost.php');


					}			

			}
			else
			{
				array_push($errors, "Wrong username/password combination");
				}
		}
	

	}




?>