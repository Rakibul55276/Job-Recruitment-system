 
<?php include('session.php') ?>


<?php


// initializing variables
if (isset($_POST['reguser'])) 
{
$Name   = "";
$username = "";
$password = "";
$pic = "";
$email    = "";
$education = "";
$skills = "";
$experience = "";
$_SESSION['success'] = "";
$errors = array(); 

  $pic=$_FILES["img"]["name"];
    $tmp=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];


  $path="user_images/".$pic;
  $icon="warning";
  $class="danger";

// connect to the database


// REGISTER USERhk

  // receive all input values from the form
	$Name = mysqli_real_escape_string($con, $_POST['name']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $pic = mysqli_real_escape_string($con, $_POST['img']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$education = mysqli_real_escape_string($con, $_POST['education']);
	$skills = mysqli_real_escape_string($con, $_POST['skills']);
	$experience = mysqli_real_escape_string($con, $_POST['experience']);
  
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
	if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  if($pic=="") {
    $error[] = "Select Image !";  
  }
  //if (empty($pic)) { array_push($errors, "image is required"); }
  if (empty($education)) { array_push($errors, "experience is required"); }
  if (empty($skills)) { array_push($errors, "skills is required"); }
  if (empty($experience)) { array_push($errors, "experience is required");} 
  //if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");
//  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $seeker_check_query = "SELECT * FROM seekers WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($con, $seeker_check_query);
  $seeker = mysqli_fetch_assoc($result);
  
  if ($seeker) { // if user exists
    if ($seeker['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($seeker['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password =($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO seekers (name, username,password,image,email,  education,skills,experience) 
  			  VALUES('$Name', '$username','$password',$pic','$email', 
          '$education','$skills','$experience')";

 move_uploaded_file($tmp,$path);
       $error[] = "Registration successfully for login click on sign button";
       
       echo '<script>alert("Registration successfully for login click on sign button");</script>';
       $icon="success";
         $class="success";


mysqli_query($con, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: Home.php');
  }
}

// LOGIN USER
if (isset($_POST['loginuser'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);//md5
    $query = "SELECT * FROM seekers WHERE username='$username' AND password='$password'";
    $results = mysqli_query($con, $query);
    


    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: Home.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>