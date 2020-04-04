<?php 

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

<?php('header1.php');?>

           <div class="panel panel-default">
           <div class="panel-heading"><h1 class="text-left text-primary"> Profile</h1></div>
<?php 
             $myid=$_REQUEST['userid'];

?>

<?php

	$sql="SELECT * FROM `seekers` WHERE `usr_id`='".$myid."'";
	
	$result = $con->query($sql);
	

			if ($result->num_rows>0)
				 {
			    

			    while($row = $result->fetch_assoc()) 
			    {
			    	?>		   
			    
      <?php
           echo "<div class='col-md-4 panel panel-default'>";
           	echo"<img src='../user_images/".$row['image']."' style='width:250px;height:250px' class='img img-circle'></div>";
           

           echo "<div class='col-md-8 panel panel-default' style='width:300;height:250px''><br/>";

           echo "<label>Full Name </label> : ";

           echo "<label>".$row['fname']."</label><hr/>";


          echo "<label>Email </label> : ";

           echo "<label>".$row['email']."</label><hr/>";


           echo "<label> Address : </label>	";
		   
		    echo "<label>".$row['address']."</label><hr/>";

		    echo "<label>Contact: </label> : ";

           echo "<label>".$row['contact']."</label><hr/>";

		    echo "<label>Gender: </label> : ";

           echo "<label>".$row['gender']."</label><hr/>";


           echo "<label> Skills :  </label>	";

           echo "<label>".$row['skills']."</label><hr/>"; 

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
	 <div class="col-lg-12">
           <div class="panel panel-default">
           
		<form method="post"><br><br><br><br><br><br><br>
			<!--<button>
			<a href="index_seek.php"style = "text-decoration: none;" class="mt-5 mb-3 text-muted" id="btmn">Back</a>
		</button>-->
	
</div>
<hr/>


<BR/><BR>

<?php  }}    ?>


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