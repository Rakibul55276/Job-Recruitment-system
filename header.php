<?php
session_start();
if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
    include 'topnav.php';
}
else if(isset($_SESSION['user']) || trim($_SESSION['user']) == '') {
    include 'topnav1.php';
}

?>