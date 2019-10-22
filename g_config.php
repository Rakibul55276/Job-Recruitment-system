
<?php
	session_start();
	require __DIR__ . './vendor/autoload.php';
	$gClient = new Google_Client();
	$gClient->setClientId("648048727869-lnu33aatda9dgv8pi4og902ohri6do4h.apps.googleusercontent.com");
	$gClient->setClientSecret("Kgo8I_uhJq93vo2yL4uZBI-q");
	$gClient->setApplicationName("NeuonAI");
	$gClient->setRedirectUri("http://localhost:8181/Neuon_AI/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('localhost', 'root','' ,'neuonai');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>