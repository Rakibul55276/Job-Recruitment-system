<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>UNIMAS JOB RECRUITMENT SYSTEM </title>
		<link rel="stylesheet" type="text/css" href="design.css">
	</head>

<body>
	<div class="container">

		<div class="logo"><img src="img/1.png" alt="img" height="500" width="500"></div> 
		<div class="head"><h1>UNIMAS JOB RECRUITMENT SYSTEM</h1></div>
	
  </div>

	<div class="login">
		<form method="post" action="login.php">

 		<div class="container">

 				<div>
   				 	<label for="uname"><b>Username</b></label>
    				<input type="text" placeholder="Enter Username" name="username" required>
    		
        </div>
    			<br>
    	<div>

    				<label for="psw"><b>Password</b></label>
    				<input type="password" placeholder="Enter Password" name="password" required>

    				<h5>Forgot Password?</h5>
    		</div>

    	<div>
        <button type="submit" class="button_1" name="loginuser">Login</button>
      </div>
          
            <div >
              <?php include('errors.php'); ?>
            </div>

          

    </div>
</form>

</div>

</body>




</html>
