<?php 
    include("dbconfig.php");
?>
<?php
if(isset($_POST['btn-signup']))
{
	$fname = strip_tags($_POST['txt_fname']);
	$username = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);

	$address = strip_tags($_POST['address']);
	$skills = strip_tags($_POST['skills']);
	$contact = strip_tags($_POST['contact']);
	$gender = strip_tags($_POST['gender']);
	$birthdate = strip_tags($_POST['birthdate']);

	$pic=$_FILES["img"]["name"];

    $tmp=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];
   
      
    $path="user_images/".$pic;
	$icon="warning";
	$class="danger";

 // Check if email already exists
    $check_sql = "SELECT * FROM seekers WHERE email='$umail' or username = '$username' LIMIT 1";
    $result = mysqli_query($con, $check_sql);
    $seeker = mysqli_fetch_assoc($result);

if ($seeker) { // if user exists
    if ($seeker['username'] === $username) {
      $error['username'] = "Username already exists";
      //array_push($errors, "Username already exists");
    }

    if ($seeker['email'] === $umail) {
      
      $error['email'] = "Email already exists";
      //array_push($errors, "email already exists");
    }
  }

    //if (mysqli_num_rows($result) > 0) {
       
        		// $error['email'] = "Email already exists";
        	//}


     else if($fname=="")	{
		$error[] = "provide fullname !";	
	}   
	else if($username=="")	{
		$error[] = "provide username !";	
	}
	else if($type=="application/pdf" || $type=="application/pdf" || $type=="application/x-zip-compressed")	{
		$error[] = "this type of file does not supported !";	
	}
	else if($pic=="")	{
		$error[] = "Select Image !";	
	}
	else if($umail=="")	{
		$error[] = "provide email id !";	
	}


	else if($address=="")	{
		$error[] = "provide address !";	
	}else if($contact=="")	{
		$error[] = "provide Contact Number !";	
	}else if($skills=="")	{
		$error[] = "provide Your Skills !";	
	}else if($gender=="")	{
		$error[] = "Choose your Gender !";	
	}else if($birthdate=="")	{
		$error[] = "Select birthdate !";	
	}




	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if(strlen($upass) < 6){
		$error[] = "Password must be atleast 6 characters";	
	}

else
	{
		//$sql="insert into registration values();"
$sql= mysqli_query($con,"insert into seekers(fname, username, email, image, password, address, birthdate, contact, gender, skills ) values('$fname','$username','$umail','$pic','$upass', '$address','$birthdate','$contact','$gender','$skills')");

$result = mysqli_query($con,$sql);



		if($sql)
		{  
            move_uploaded_file($tmp,$path);
		   $error[] = "Registration successfully for login click on sign button";
		   $icon="success";
	       $class="success";	
		}

	}

	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UNIMAS JOB RECRUITMENT SYSTEM</title>
<link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
 <link rel="stylesheet" href="components/bootstrap/dist/css/style.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="./includes/bootstrap-datepicker.min.js"></script>
  <script src="./includes/bootstrap-datepicker.js"></script>


  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</head>
<body>
	
	<style>
		body {
        background-image: url('paper.jpg');
       background-color: #cccccc;
        background-repeat: no-repeat;
         background-size: cover;
}
.form-signin-heading
		{
			 margin: auto;
  			width: 40%;
  			padding: 10px;
		}
	.form-signin
	{

	}

	</style>

<div class="signin-form">

<div class="container">
    	
        <form method="post" class="form-signin" enctype="multipart/form-data">
            <h2 class="form-signin-heading">SEEKER</h2><hr />
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-<?php echo $class; ?>">
                        <i class="glyphicon glyphicon-<?php echo $icon; ?>-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
			}

			?>
      <?php
    require_once "g_config.php";
  if (isset($_SESSION['username'])) {
    header('Location: index_emp.php');
    exit();
  }
  $loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html>
<head>
  <title>UNIMAS JOB RECRUTMENT SYSTEM</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="76902827140-rvrfaunlfn3frtu5q86mp4v5mcat9r7g.apps.googleusercontent.com">
</head>
			<div class="form-group">
            <input type="text" class="form-control" name="txt_fname" placeholder="Enter Fullname" value="<?php if(isset($error)){echo $fname;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if(isset($error)){echo $username;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_umail" placeholder="Enter E-Mail ID" value="<?php if(isset($error)){echo $umail;}?>" />
            </div>


            <div class="form-group">
            <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number" value="<?php if(isset($error)){echo $contact;}?>" />
            </div>

            <div class="form-group">

            <textarea name="skills"class="form-control" rows='4' cols="50"  placeholder="Enter Your Skills"value="<?php if(isset($error)){echo $skills;}?>" /></textarea>

            </div>

            <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Enter Your Address" value="<?php if(isset($error)){echo $address;}?>" />
            </div>

			<div class="form-group">
             		<label>Gender</label> 
                      <select name="gender" id="gender" required>
                        <option value="" selected>- Select -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
            </div>



            <div class="form-group">
            	
            	<input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />

            </div>

			<div class="form-group">
            	<input type="file"name="img"  />
            </div>


            <div class="form-group">
                  	<label for="datepicker_add">Birthdate</label>

               <div> 
                      <div>
                        <input class="form-control" type="text" id="datepicker" name="birthdate">
                      </div>
                </div>
            </div>




 


            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" id="left" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
<br><br>
                <div class="row">
                    <div>
                        <center><div class="g-signin2" onclick="window.location = '<?php echo $loginURL ?>';"  name="google"></div></center>
                    </div>
                </div>
            </div>
            <style>
            	#left{
            		margin-left: 150px;
            	}
              .g-signin2{
                margin-right: 10%;
              }
            </style>
            <br /><br />

             <label style="color: green;">have an account ! <a href="forgot_p_seek.php" style="color: red">Forgot Password ?</a></label>
      
            <label>have an account ! <a href="index.php">Sign In</a></label>
           
            
        </form>
       </div>
</div>

</div>

</body>
</html>