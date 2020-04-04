

<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <meta name="description" content="">

 <meta name="author" content="">

 <link rel="icon" href="../../favicon.ico">
 
 <!-- http://draganzlatkovski.com/code-projects/toggle-jquery-side-bar-menu-in-bootstrap-free-template/ -->
 
 <title>UNIMAS JOB RECRUITMENT SYSTEM</title>
 
 <!-- jQuery -->
 
 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="components/bootstrap/dist/js/jquery.js"></script>
 
  
 
 <!-- Bootstrap core CSS -->
 <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <!-- Custom styles for this template -->
 <link href="components/bootstrap/dist/css/simple-sidebar.css" rel="stylesheet">
  <link href="components/bootstrap/dist/css/postmodal.css" rel="stylesheet">
  <link href="components/bootstrap/dist/css/fbbox.css" rel="stylesheet">

 

 

 
 
</head>

<body>
 
 
 


 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container-fluid">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>

 <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
 
 </div>
 <div id="navbar" class="navbar-collapse collapse">
  
  
    <label class="navbar-text text-center text-primary" style="vertical-align:10px;font-size:medium ">Welcome to UNIMAS JOB RECRUITMENT SYSTEM </label>
<label class="navbar-text text-center text-primary" style="vertical-align:10px;font-size:medium ">Hello! <font style="font-size:13px"> <?php echo $_SESSION["username"]; ?> </font> </label>



<ul class="nav navbar-nav navbar-right">
  

 

 <li><a href="logout1.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
 </ul>
 <form class="navbar-form navbar-right" action="search.php" method="post">
 <div class="input-group" style="margin-right:200px">
 <input type="text" class="form-control" placeholder="Search..." id="query" name="search" value="">
 <div class="input-group-btn">
 <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
 </div>
 </div>
 </form>
 <div class="col-lg-8">
 </div>
 
 </div>

 
 </div>
 </nav>
 
 
 
 <!--
<div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Post Task</button></div>
-->

 


<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			
			
            <!-- content goes here -->
			  

		
		
			
	
		

					

		</div>
		

		
	</div>
  </div>
</div>

  		</form>
 
 
 
 
 
 
 
 <div id="wrapper" class="toggled">
 <div class="container-fluid">
 <!-- Sidebar -->
 <div id="sidebar-wrapper">
 <ul class="sidebar-nav">
 <li class="sidebar-brand">
 <br>

 <style>
 	.toggled
 	{
 		height: -5px;
 	}
 </style>
 </li>
 <li class="sidebar-brand">
 <a href="#" class="navbar-brand">
  
  
          
 
 </a>
 </li>
 <li>
 <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <font style="color:white"> Home </font></a>
 </li>
 <!--
 <li>
 <a href="#"><span  class="glyphicon glyphicon-comment"  aria-hidden="true"></span> Notification</a>
 </li> 
 
 -->
 <li>
  <a href="mytask.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> My Task</a>
 </li>
 
 <li>
 
 <li>
 
 </ul>
 </div>
 <!-- /#sidebar-wrapper -->
 

 
 
 
 <!-- /#page-content-wrapper -->
 </div>
 </div>
 <!-- /#wrapper -->

  
  <!-- Page Content -->
 <div id="page-content-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <br>

 </div>
 </div>
 <div class="row">
 <div class="col-lg-12">

     <div>
</div>
 </div>
 </div>
 </div>
 </div>
  
  
  <!-- this is div for user post -->
<div class="fluid-container">
<div class="row" style="clear:both">
 <div class="col-lg-12">
 	    <div class="col-lg-4">
		<div class="list-group" style="margin-right:250px">
 
   <a href="index_emp.php" class="list-group-item active" style="background-color:black;">
    Home</a>
  
 <a href="ourskill.php" class="list-group-item">Profile
  </a>

  
  </a>
   <a href="#demo" data-toggle="collapse" class="list-group-item"><span> Manage Tasks</span></a>

   <div id="demo" class="collapse">
        <a href="my_task.php"class='list-group-item' style='color:black'>Live Post</a>
        <a href="dis_mytask.php" class='list-group-item' style='color:black'>Your Posts</a>
      </div>


  
  <a href="post.php" data-toggle="#" data-target="#" class="list-group-item">
  	Post Job
  </a>
 
  
  <a href="changepass.php" class="list-group-item">Change Password
  </a>
  <a target="_blank" href="./chat/index.php" class="list-group-item" name="submit">Instant Employee</a>
<!--<a href="logout1.php" class="list-group-item">Log Out</a>-->
</div>
</div>
 	     <div class="col-lg-8">