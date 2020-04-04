<?php 
    include("session.php");
?>

<?php

if(isset($_POST["update"])) {
	# code...

$skills=$_POST["skills"];
$fname=$_POST["fname"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$filename = $_FILES['photo']['name'];
//$tmp=$_FILES['photo']['tmp_name'];

//$type=$_FILES["photo"]["type"];
 //$path="user_images/".$filename;
 //$icon="warning";
	//$class="danger";
		
if(!empty($filename)){
		move_uploaded_file($_FILES['photo']['tmp_name'], '../user_images/'.$filename);
}
if(empty($filename))
{
	$sql = mysqli_query($con,"UPDATE seekers SET skills='".$skills."',fname='".$fname."',address='".$address."',contact='".$contact."' where username='".$_SESSION['username']."'") or die($con);
}
else
{
$sql = mysqli_query($con,"UPDATE seekers SET skills='".$skills."',fname='".$fname."',address='".$address."',contact='".$contact."',image='".$filename."' where username='".$_SESSION['username']."'") or die($con);
}
//$update = mysqli_fetch_assoc($sql);


}

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


<?php include('header1.php');?>


           <div class="panel panel-default">
           <div class="panel-heading">My Profile</div>

<?php

	$sql="SELECT * FROM `seekers` WHERE `username`='".$_SESSION['username']."'";
	
	$result = $con->query($sql);
	

			if ($result->num_rows>0)
				 {
			    

			    while($row = $result->fetch_assoc()) 
			    {
			   
			    
           echo "<div class='col-md-4 panel panel-default'>";
           	echo"<img src='../user_images/".$row['image']."' style='width:400;height:250px'class='img img-thumbnail'></div>";
           

           echo "<div class='col-md-8 panel panel-default' style='width:300;height:400px'><br/>";

           //echo "<label> Name </label> <br/>";
           echo "<label>Full Name: &nbsp;&nbsp; ".$row['fname']."</label><br/><br/>";

           echo "<label>userame: &nbsp;&nbsp;".$row['username']."</label><br/><br/>";
           //echo "<label> Email </label>	<br/>";

           echo "<label>Email: &nbsp;&nbsp; ".$row['email']."</label><br/><br/>";

            echo "<label>Address: &nbsp;&nbsp; ".$row['address']."</label><br/><br/>"; 

          echo "<label>Birth Date: &nbsp;&nbsp; ".$row['birthdate']."</label><br/><br/>"; 

           echo "<label>Contact Number: &nbsp;&nbsp; ".$row['contact']."</label><br/><br/>"; 
            echo "<label>Gender: &nbsp;&nbsp; ".$row['gender']."</label><br/><br/>"; 

             echo "<label>Skills: &nbsp;&nbsp; ".$row['skills']."</label><br/><br/>"; 

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
$sql=mysqli_query($con,"select * from seekers where username='".$_SESSION['username']."'");

$res=mysqli_fetch_array($sql);



?>		<form  method="POST" enctype="multipart/form-data">
		<div class="panel-heading">Technical Skills</div>
	</div><label></label>
	<textarea name="skills" rows='5' cols="100" placeholder="Update Your Skills...e.g.PHP,Java" ><?php echo $res['skills']; ?></textarea>
<BR/><BR>
<label>Full Name :</label>
<input type="text" name="fname" placeholder="Enter Your Experience" value='<?php echo $res['fname']; ?>'><br><br>

<label>Address :</label><br>
<textarea name="address" rows='4' cols="100"  placeholder="Update your address"><?php echo $res['address']; ?></textarea>
<BR/><BR>

<label>Contact Number :</label>
<input type="text" name="contact" placeholder="Update Contact Number" value='<?php echo $res['contact']; ?>'><br><br>


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
			
						
<?php include "footer.php"?>



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