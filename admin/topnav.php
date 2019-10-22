<?php 
include 'conn.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

<div class="navbartop">
	<div class="navbar-nav navbar-left" id="adminlogo1">
        <a href="#" id="adminlogo1"><i class="ion-ios-analytics-outline"></i>NEUON AI</a>
    </div>
	<center class="navbar-nav navbar-center">Neuon AI Admin Panel</center>

	<a href="#" class="navbar-nav navbar-right" data-toggle="dropdown">
		<span>
			<?php echo $user['username']; ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		<img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '/images/profile.jpg'; ?>" alt="Admin">
	</a>
	<ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="<?php echo (!empty($user['photo'])) ? '/images/'.$user['photo'] : '../images/profile.jpg'; ?>" alt="User Image">

            <p>
                <?php echo $user['firstname']; ?>
                <small>Member since <?php echo date('M. Y', strtotime($admin['created_on'])); ?></small>
            </p>
        </li>
        <li class="user-footer">
            <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>

</div>

</body>

</html>
