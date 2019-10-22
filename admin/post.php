<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
    <?php
        if(isset($_POST['signup'])){
            $title = $_POST['title'];
            $company = $_POST['company'];
            $details = $_POST['details'];
            $message = "$title would like to request for a post.";
            $query = "INSERT INTO `requests` (`id`, `title`,`company`, `details`, `message`, `date`) VALUES (NULL, '$title','$company', '$details', '$message', CURRENT_TIMESTAMP)";
            if(performQuery($query)){
                echo "<script>alert('Your request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }
    
    ?>
  <body class="text-center">
      <div class="container">
            <form method="post" class="form-signin">
              <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Post your Job Here</h1>


              <label for="inputEmail" class="sr-only">TITLE</label>

              <input name="title" type="text" id="title" class="form-control" placeholder="Title" required autofocus>

<br><br>

          <label for="company" class="sr-only">Company Name</label>
              
              <input name="company" type="company" id="inputEmail" class="form-control" placeholder="Company Name" required autofocus>


<br><br>
              <label for="text" class="sr-only">Details</label>
              
              <input name="details" type="textarea" id="text" class="form-control1" placeholder="Details" required>

              <style>
                
                    .form-signin {
                      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                      
                      width: 600px;

                      height: 600px;
                      
                      padding: 1em;
                      
                      border: 5px solid #ccc;
                       
                       margin-left: auto;
                      
                      margin-right: auto;

                      background-color:silver;
                                  }

                      .form-control1

                    {
                      height: 200px;
                      width:500px;
                      margin-right:550px;
                      font-size: 20px;
                      margin-right: 40%;
                      margin-left: 5%;
                      
                    }
                   .form-control
                    {
                      height: 40px;
                      width:500px;
                      margin-right:550px;
                      font-size: 20px;
                      margin-right: 40%;
                      margin-left: 5%;
                      
                    }

                    .btn
                        {
                          height: 35px;
                          width:100px;
                          background-color:#3823E6;
                        }

                    #btmn
                    {
                      color:blue;
                      text-decoration-color: red;
                    }
                    body {
                  background-image: url("paper.jpg");
                  background-repeat: no-repeat;
                  background-size: auto;
                  background-size: cover;
                    
}
              </style>
<br><br>
              <button name="signup" class="btn" type="submit">POST</button>

<br><br>
              <a href="login.php" class="mt-5 mb-3 text-muted" id="btmn">Go back to login page</a>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
