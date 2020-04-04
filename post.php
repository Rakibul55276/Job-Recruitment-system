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

            window.location="post.php"
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
   <?php include('header1.php') ?>



  </head>
    
  
         

<div class="row" style="clear:both">
<div class="col-lg-20">

<div class="col-lg-8">
	</div>


<div class="col-lg-10"style="margin-right: 50%;">
	<div class="panel panel-default">
	
<form  method="POST">


	
  <h1 style="margin-left: 200px;">Post your Job Here</h1>


<br><br>
<label>Title :</label>
<input type="text" name="status_title"  placeholder="Job title"class="form-control" ><br><br>


<br><br>
<label>Details Job :</label><br>
<textarea  name="status" rows='4' cols="50"class="form-control"  placeholder="Write you job description here"></textarea>
<BR/><BR>

 <input type="submit" name="post" style="margin-left: 300px;"class="btn btn-default" value="POST">
 </div>


</div>
</div>
</form>


</div>


		<!--content -->
			
						




</div>




</div>

</div>

<?php include"footer.php";?>

      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

