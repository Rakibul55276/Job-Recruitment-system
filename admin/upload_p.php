<?php 
include("session.php");
    include("dbconfig.php");
    include("topnav.php");
      include("navbar.php");
?>
<?php
if(isset($_POST['btn-signup']))
{


	$p_name = strip_tags($_POST['p_name']);

	$details = strip_tags($_POST['details']);

	$pic=$_FILES["img"]["name"];
    $tmp=$_FILES["img"]["tmp_name"];
    $type=$_FILES["img"]["type"];
   
      
    $path="../user_images/".$pic;
	$icon="warning";
	$class="danger";

 // Check if email already exists
   



    //if (mysqli_num_rows($result) > 0) {
       
        		// $error['email'] = "Email already exists";
        	//}




	if($p_name=="")	{
		$error[] = "provide Product Name !";	
	}
	else if($details=="")	{
		$error[] = "provide Product details !";	
	}   
	
	else if($type=="application/pdf" || $type=="application/pdf" || $type=="application/x-zip-compressed")	{
		$error[] = "this type of file does not supported !";	
	}
	else if($pic=="")	{
		$error[] = "Select Image !";	
	}
	


else
	{
		//$sql="insert into registration values();"
		$sql= mysqli_query($con,"insert into product(p_name, details, image) values('$p_name','$details','$pic')") or die($con);

		//$result = mysqli_fetch_assoc($sql);
		if($sql)
		{  
            move_uploaded_file($tmp,$path);
       
		   $error[] = "Upload successfully ";
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
       
       background-color: white;
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
            <h2 class="form-signin-heading">Products</h2><hr />
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
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully uploaded
                 </div>
                 <?php
			}
			?>
			<div class="form-group">
&nbsp;
            <input type="text" style = "width:500px;margin-left: 200px;"class="form-control" name="p_name" placeholder="Enter Product Name" value="<?php if(isset($error)){echo $p_name;}?>"/>
            </div>

       


            <div class="form-group">

            <textarea style = "width:500px;margin-left: 200px;" name="details"class="form-control" rows='4' cols="50"  placeholder="Enter Product details"value="<?php if(isset($error)){echo $details;}?>"/></textarea>

            </div>

            <div class="form-group"style = "width:500px;margin-left: 200px;color: black;">
            	<input type="file"  name="img"  />
            </div>


            <div class="clearfix"></div><hr />
            <div class="form-group"style = "width:500px;margin-left: 200px;">
            	<button type="submit" class="btn btn-primary" name="btn-signup"style="color: green;">
                	<i class="glyphicon glyphicon-open-file"style = "width:5px;margin-left: 50px;color: black;"></i>&nbsp;Uploaded
                </button>
            </div>
           
        </form>
       </div>
</div>

</div>

</body>
</html>