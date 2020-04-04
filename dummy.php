<?php
 //we need session for the log in thingy XD 
    include("session.php");
?>

<?php
function timeAgo($time_ago){

            $time_ago = strtotime($time_ago);
            $cur_time   = time();
            $time_elapsed   = $cur_time - $time_ago;
            $seconds    = $time_elapsed ;
            $minutes    = round($time_elapsed / 60 );
            $hours      = round($time_elapsed / 3600);
            $days       = round($time_elapsed / 86400 );
            $weeks      = round($time_elapsed / 604800);
            $months     = round($time_elapsed / 2600640 );
            $years      = round($time_elapsed / 31207680 );
            // Seconds
            if($seconds <= 60){
                return "just now";
            }
            //Minutes
            else if($minutes <=60){
                if($minutes==1){
                    return "one minute ago";
                }
                else{
                    return "$minutes minutes ago";
                }
            }
            //Hours
            else if($hours <=24){
                if($hours==1){
                    return "an hour ago";
                }else{
                    return "$hours hrs ago";
                }
            }
            //Days
            else if($days <= 7){
                if($days==1){
                    return "yesterday";
                }else{
                    return "$days days ago";
                }
            }
            //Weeks
            else if($weeks <= 4.3){
                if($weeks==1){
                    return "a week ago";
                }else{
                    return "$weeks weeks ago";
                }
            }
            //Months
            else if($months <=12){
                if($months==1){
                    return "a month ago";
                }else{
                    return "$months months ago";
                }
            }
            //Years
            else{
                if($years==1){
                    return "one year ago";
                }else{
                    return "$years years ago";
                }
            }
        } 
?>
<?php 

    

  if(isset($_POST["post"]))
  {  
     $status_tit=$_POST["status_title"];
     $sta=$_POST["status"];
     //$uid=$_SESSION["id"];
      //$q= mysqli_query($con,"SELECT *FROM employers WHERE usr_id = 'id'");
    //$uid=["id"];

    //$p_id=$_POST["pid"];

   $uid=$_SESSION["id"];


     $sql=mysqli_query($con,"insert into requests(usr_id_p, status_title, status, status_image, status_time) 
        values('$uid','$status_tit','$sta','',now());");

      //$sql=mysqli_query($con,"insert into default(usr_id_p, status_title, status, status_image, status_time) values('$uid','$status_tit','$sta','',now());");
     if($sql)
     {
        echo '<script>alert("post inserted successfully waiting for Admin approval..");

            window.location="index_emp.php"
        </script>';
        //header("index_emp.php");
     }
  }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>UNIMAS JOB RECRUITMENT SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
    
  <body class="text-center">
      <div class="container">
            <form method="post"class="form-signin">
             
              <h1 class="h3 mb-3 font-weight-normal">Post your Job Here</h1>


              <label for="inputEmail" class="sr-only">TITLE</label>

              <input name="status_title" type="text" id="title" class="form-control" placeholder="Title" required>


<br><br>
              
          
            <textarea class="form-control1" cols="45" rows="10" placeholder="Write Job Details..." type="textarea" name="status" required></textarea>

              
              

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
              <button name="post" class="btn" type="submit">POST</button>

<br><br>
<button>
              <a href="index_emp.php"style="text-decoration: none;" class="mt-5 mb-3 text-muted" id="btmn">Back</a>
              </button>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

