<?php
	$con = new mysqli('localhost', 'root', '', 'update');

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}
?>