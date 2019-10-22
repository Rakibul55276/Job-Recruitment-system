<?php 
    include("dbconfig.php");
?>
<?php
  session_start();

  if($_SESSION['username']=='')
  {
     header('location:index_emp.php');
  }

 ?>
<?php

if(isset($_POST["update"])) {
	# code...

$about=$_POST["about"];
//$company=$_POST["company"];
//$email=$_POST["email"];
$website = $_POST["website"];
$language = $_POST["language"];
$ctype = $_POST["ctype"];


$filename = $_FILES['photo']['name'];

		
if(!empty($filename))
{
		move_uploaded_file($_FILES['photo']['tmp_name'], 'user_images/'.$filename);
}

if(empty($filename))
{
	$sql = mysqli_query($con,"UPDATE employers SET about='".$about."', c_type='".$ctype."', website='".$website."',language='".$language."' where username='".$_SESSION['username']."'") or die($con);
}
else
{
$sql = mysqli_query($con,"UPDATE employers SET about='".$about."', c_type='".$ctype."', website='".$website."',language='".$language."',image='".$filename."' where username='".$_SESSION['username']."'") or die($con);
}
//$update = mysqli_fetch_assoc($sql);


}



//mysqli_query($con,"UPDATE employers SET username='".$username."',company='".$company."',email='".$email."' where username='".$_SESSION['username']."'");

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

<?php include('header1.php') ?>

           <div class="panel panel-default">
           <div class="panel-heading">My Profile</div>

<?php

	$sql="SELECT * FROM `employers` WHERE `username`='".$_SESSION['username']."'";
	
	$result = $con->query($sql);
	

			if ($result->num_rows>0)
				 {
			    

			    while($row = $result->fetch_assoc()) 
			    {
			   
			    
           echo "<div class='col-md-4 panel panel-default'>";
           	echo"<img src='user_images/".$row['image']."' style='width:400;height:250px'class='img img-thumbnail'></div>";
           

           echo "<div class='col-md-8 panel panel-default' style='width:300;height:400px'><br/>";

           //echo "<label> Name </label> <br/>";
           echo "<label>Company Name : &nbsp;&nbsp;".$row['company']."</label><br/><br/>";

           echo "<label>Company Type : &nbsp;&nbsp;".$row['c_type']."</label><br/><br/>";

           echo "<label>Username : &nbsp;&nbsp;".$row['username']."</label><br/><br/>";
           //echo "<label> Email </label>	<br/>";

           echo "<label>Email : &nbsp;&nbsp; ".$row['email']."</label><br/><br/>"; 

         echo "<label>Website : &nbsp;&nbsp; ".$row['website']."</label><br/><br/>";

         echo "<label>Language : &nbsp;&nbsp;".$row['language']."</label><br/><br/>";

         echo "<label>About : &nbsp;&nbsp;".$row['about']."</label><br/><br/>";

}
}

?>
           </div>




           </div>

					
 	     </div>
     
</div>

<div class="row" style="clear:both">
<div class="col-lg-12">

<div class="col-lg-4">
	</div>


<div class="col-lg-8">
	<div class="panel panel-default">
<?php		
$sql=mysqli_query($con,"select * from employers where username='".$_SESSION['username']."'");

$res=mysqli_fetch_array($sql);



?>		
<form  method="POST" enctype="multipart/form-data">

<div class="panel-heading">About</div>
	</div><label></label>

	

<textarea name="about" rows='4' cols="100"  placeholder="Update about your company"><?php echo $res['about']; ?></textarea>
<BR/><BR>

<label>Company Type :</label><br>
<textarea name="ctype" rows='4' cols="100"  placeholder="Update  your company type in details."><?php echo $res['c_type']; ?></textarea>
<BR/><BR>

<label>Website :</label>
<input type="text" name="website" placeholder="Update your website" value='<?php echo $res['website']; ?>'><br><br>

<label>Language :</label><br>
<textarea name="language" rows='4' cols="100"  placeholder="Update your language e.g, English, malay etc.."><?php echo $res['language']; ?></textarea>
<BR/><BR>

 <div class="form-group">
                    <label for="photo">Photo</label>

                    <div>
                      <input type="file" name="photo" id="photo">
                    </div>
 </div>

<input type="submit" name="update" class="btn btn-default" value="Update">
</div>
</div>
</form>


</div>


		<!--content -->
			
						




</div>




</div>

</div>



 
<!-- Bootstrap Core JavaScript -->
<script src="components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
 $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


	<script type="text/javascript">
		$(document).ready(function(){
			$('.status').click(function() { $('.arrow').css("left", 0);});
			$('.photos').click(function() { $('.arrow').css("left", 146);});
		});
	</script>
	

</body>
</html>