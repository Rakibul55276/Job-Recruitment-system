
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMAIL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <img style="height: 200px;width: 200px;" src="img/logo1.png">
                 
                
<br><br>
                <form method="post"  enctype="multipart/form-data">

                    <input  class="form-control" name="receiver" type="email" placeholder="Email..."required ><br>


                    <input type="text" class="form-control" name="subject" placeholder="Subject..."required><br>
                    
                    <p>
                    <textarea placeholder="Message" class="form-control" name="message" required></textarea><br>
                    </p>
                  
                    <input class="form-control" type="file" name="file" value ="Resume" required><br>
                    <input class="btn btn-primary" name="submit" type="submit" value="Send Email">
                </form>
            </div>
        </div>
    </div>
</body>
</html>








<?php
include ("session.php");

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader

if(isset($_POST["submit"])){
    require("../PHPMailer/PHPMailerAutoload.php");

 $mail = new PHPMailer(true);
 $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'irakibul550@gmail.com';                     // Your gmail address
    $mail->Password   = '012848598788';                               // Your gmail password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587; 

    $mail->setFrom('irakibul550@gmail.com', 'Job Seeker');
    $mail->addAddress($_POST["receiver"]);
    $file_name = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
    $mail->addAttachment($file_name);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["subject"];
     
    $mail->Body    = $_POST["message"];
  
  if (!$mail->send()) 
  {
       
    echo "Message could not be sent."; 
    echo "Mailer Error: " . $mail->ErrorInfo;
  }

    else{
           echo "<script> Message has been sent </script>"; 
    }
}
//$mail->send();
    //echo 'Message has been sent';
//} else {
  //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}
//require 'vendor/autoload.php';



/*try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'irakibul550@gmail.com';                     // Your gmail address
    $mail->Password   = '0128485987';                               // Your gmail password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('your_gmail_ID', 'your_name');
    $mail->addAddress($_POST["receiver"]);

    $file_name = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
    $mail->addAttachment($file_name);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["message"];

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}*/?>