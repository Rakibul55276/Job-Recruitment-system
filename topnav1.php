<?php
include 'session.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
    <title>NEUON AI</title>
    <meta name="description" content="Neuon AI -- Company Website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<script src="main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link  href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>


<body>

<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
			
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="index.php"><i class="ion-ios-analytics-outline"></i> NEUON AI</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <a class="page-scroll" href="#one">Model S</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Model X</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#three">Model 3</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#four">Roadster</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="scrollaffect.php">Energy</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
				
					<li>
						<ul class="nav navbar-nav">
						  <!-- User Account: style can be found in dropdown.less -->
						  <li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  
							  <img src="<?php echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'user_images/profile.jpg'; ?>" class="user-image" alt="User Image">
							  <span class="hidden-xs"><?php echo $user['firstname'].' '.$user['lastname']; ?></span>
							</a>
							<ul class="dropdown-menu">
							  <!-- User image -->
							  <li>
								<img class="imagedb" src="<?php echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg'; ?>" class="img-circle" alt="User Image">
								<?php echo $user['firstname'].' '.$user['lastname']; ?>
								<center>
								  <small>Member since </br><?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
								</center>
							  </li>
							  <li>
								<div class="pull-right">
								  <a href="update_user.php" class="btn btn-default btn-flat">View Profile</a>
								  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
								</div>
							  </li>
							</ul>
						  </li>
						</ul>
                    </li>
					<li>
                        <a href="career.php">career</a>
                    </li>
                    
					<li class="dropdown">
					
						<img src="images/bar1.png" id="baricon" onclick="myFunction()" class="dropbtn">
							<div id="myDropdown" class="dropdown-content">
								<a href="#" class="p"><b>Used Inventory</b></a>
								<a href="#"><b>Visit a Store</b></a>
								<a href="#"><b>Support</b></a>
								<a href="#"><b>Get Newsletter</b></a>
								<a href="#"><b>News</b></a>
								<a href="#"><b>News Inventory</b></a>
								<a href="#"><b>Charging</b></a>
								<a href="#"><b>Semi</b></a>
								<a href="#"><b>Carbon Impact</b></a>
							</div>
					</li>
						<script>
						/* When the user clicks on the button, 
						toggle between hiding and showing the dropdown content */
						function myFunction() {
						  document.getElementById("myDropdown").classList.toggle("show");
						}

						// Close the dropdown if the user clicks outside of it
						window.onclick = function(event) {
						  if (!event.target.matches('.dropbtn')) {
							var dropdowns = document.getElementsByClassName("dropdown-content");
							var i;
							for (i = 0; i < dropdowns.length; i++) {
							  var openDropdown = dropdowns[i];
							  if (openDropdown.classList.contains('show')) {
								openDropdown.classList.remove('show');
							  }
							}
						  }
						}
						</script>
					
                </ul>
            </div>

    </nav>
</body>

</html>