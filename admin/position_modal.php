<?php include 'session.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'topnav.php'; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="./includes/bootstrap-datepicker.min.js"></script>
  <script src="./includes/bootstrap-datepicker.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<style>
body{
 background-color: silver;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 18px;
  margin: 0; padding: 0; color: white;
}
.signup-button{
  padding-top: 250px;
}
#message {
  text-align: center;
  font-size: 40px;
}
li{
  background-color:gray;
  margin-left: 570px;
  margin-right: 600px;
  padding: 10px 10px 10px 10px;
  text-align: center;
  display: inline-block;
  width: 150px; 
}
a{
  text-decoration: none;
  font-size: 20px;
  color: white;
}
a:hover{
  background-color: maroon;
  color: snow;
  padding: 10px 10px 10px 10px;
  text-align: center;
}
</style>
</head>
<body>
<section class="signup-button">
  <div id="message"></div>
  
</section>    
<script>
var messageing = "Welcome to our Admin Panel";
var message = messageing.split("");
var el = document.getElementById('message');
(function animate() {
message.length > 0 ? el.innerHTML += message.shift() : clearTimeout(running); 
var running = setTimeout(animate, 60);
})();
</script>
</body>
</html>

</html>