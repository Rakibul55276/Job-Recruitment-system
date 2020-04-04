<?php 
    include("dbconfig.php");
?>
<?php
if(isset($_POST['btn-signup']))
{
	$cname = strip_tags($_POST['txt_cname']);

	$ctype = strip_tags($_POST['ctype']);

	$username = strip_tags($_POST['txt_uname']);

	$umail = strip_tags($_POST['txt_umail']);

	$website = strip_tags($_POST['website']);

	$upass = strip_tags($_POST['txt_upass']);

	$language = strip_tags($_POST['language']);

	$about = strip_tags($_POST['about']);

	$pic=$_FILES["img"]["name"];
    $tmp=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];
   
      
    $path="user_images/".$pic;
	$icon="warning";
	$class="danger";

 // Check if email already exists
    $check_sql = "SELECT * FROM employers WHERE email='$umail' or username = '$username' LIMIT 1";
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


     else if($cname=="")	{
		$error[] = "provide Company Name !";	
	}

	else if($ctype=="")	{
		$error[] = "provide Company Type !";	
	}

	else if($website=="")	{
		$error[] = "provide website Name !";	
	}

	else if($language=="")	{
		$error[] = "provide Company Name !";	
	}
	else if($about=="")	{
		$error[] = "provide Company Name !";	
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
		$sql= mysqli_query($con,"insert into employers(company,c_type, username, email, image,website, password,language,about) values('$cname','$ctype','$username','$umail','$pic','$website','$upass','$language','$about')") or die($con);

		//$sql = mysqli_query($con,"insert into chat_user(regusername)values('$username')")or die($con);

		//$result = mysqli_fetch_assoc($sql);
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UNIMAS JOB RECRUITMENT SYSTEM</title>
<link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
 <link rel="stylesheet" href="components/bootstrap/dist/css/style.css" />
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
            <h2 class="form-signin-heading">Employer</h2><hr />
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
			<div class="form-group">

            <input type="text" class="form-control" name="txt_cname" placeholder="Enter Company Name" value="<?php if(isset($error)){echo $cname;}?>"/>
            </div>


            <div class="form-group">
            <input type="text" class="form-control" name="ctype" placeholder="Enter Company Type, e.g, IT, Marketting, etc;" value="<?php if(isset($error)){echo $ctype;}?>"/>
            </div>


            <div class="form-group">
            <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if(isset($error)){echo $username;}?>" />
            </div>

            <div class="form-group">

            <input type="text" class="form-control" name="txt_umail" placeholder="Enter E-Mail ID" value="<?php if(isset($error)){echo $umail;}?>" />
            </div>

            <div class="form-group">

            <input type="text" class="form-control" name="website" placeholder="Enter your website" value="<?php if(isset($error)){echo $website;}?>"/>
            </div>


            <div class="form-group">
            	<input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />
            </div>

            <div class="form-group">

            <input type="text" class="form-control" name="language" placeholder=" Enter Language. e.g,English, Malay, etc.." value="<?php if(isset($error)){echo $language;}?>"/>
            </div>


            <div class="form-group">

            <textarea name="about"class="form-control" rows='4' cols="50"  placeholder="About your Company"value="<?php if(isset($error)){echo $about;}?>"/></textarea>

            </div>

            <div class="form-group">
            	<input type="file"  name="img"  />
            </div>


            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
            


             <label> <a target="_blank" href="forgot_p_emp.php" style="color: red">Forgot Password ?</a></label><br>
            <label>have an account ! <a href="index.php">Sign In</a></label>
        </form>
       </div>
</div>

</div>

</body>
</html>