<?php
	session_start();
	include 'conn.php';


  if (!isset($_SESSION['admin'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin']);
    header("location: login.php");
  }

	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $con->query($sql);
	$user = $query->fetch_assoc();
?>