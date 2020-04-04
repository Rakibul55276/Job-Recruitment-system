<?php
	session_start();
	include 'dbconfig.php';


  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../index.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
  }

$sql = "SELECT * FROM seekers WHERE usr_id = '".$_SESSION['username']."'";
	$query = $con->query($sql);
	$user = $query->fetch_assoc();
?>