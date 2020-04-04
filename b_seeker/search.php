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
<?php 
  if(isset($_POST["submit"]))
  {  
  	 $status_tit=$_POST["status_title"];
     $sta=$_POST["status"];
     $uid=$_SESSION["id"];
     $sql=mysqli_query($con,"insert into posts(usr_id_p,status_title,status,status_image,status_time) 
     	values('$uid','$status_tit','$sta','',now());");
     if($sql)
     {
     	echo '<script>alert("post inserted successfully..");</script>';
     }
  }


?>

<?php include('header1.php');?>
        <!--left-content-->
			<div class="center">
				<div class="posts">
					<div class="create-posts">
						<?php 
						   $sear=$_POST["search"];
                            $sql=mysqli_query($con,"select * from posts  where status_title like '%$sear%'");
                            
                            if(mysqli_num_rows($sql))
                            {	

                                while($row=mysqli_fetch_array($sql))
                               {
     	                           $id=$row["post_id"];
     	                           $up=$row["usr_id_p"];
     	                           //$uname=$row["username"];
     	                           
     	                           $time=$row["status_time"];
     	                           $sql5=mysqli_query($con,"select * from employers  where usr_id='$up'");
                             while($row5=mysqli_fetch_array($sql5))
                               {
                                  $uname=$row5['username'];
                                  $ud=$row5['usr_id'];
                                  $imp=$row5['image'];

                               }

						echo '<div class="post-show">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
										<div class="id-img-box">
										<img src="../user_images/'.$imp.'"></img></div>
												
												<div class="id-name">
													<ul>
													<b><a target="_blank" href="otheruser.php?userid='.$ud.'">	'.$uname.'</a> </b>
														<li><small>'.timeAgo($time).'</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="project_description.php?id='.$id.'&s_title=' . $row['status'] . '">
							  '.$row['status_title'].'</a>
							  
							                 <p>'.$row['status'].'</p>

											 <br/><br/>
											  <a  target="_blank" href="send_attach.php"class="btn btn-default" name="submit" style ="text-decoration: none;position: center;color:Green;"></style>Apply
											  </a>

											  <a href="project_description.php?id='.$id.'&s_title=' . $row['status'] . '" class="btn btn-default">Post Your Comment
											  </a>';
										$sql1=mysqli_query($con,"select * from comments where post_id_c='$id'");

										while($row1=mysqli_fetch_array($sql1))
										{	 
                                            $ct=$row1["comment_time"];
                                            $c=$row1["comment"];
                                            $uid=$row1["user_id_c"];
                                            $sql2=mysqli_query($con,"select * from seekers where usr_id='$uid'");
                                            while($row2=mysqli_fetch_array($sql2))
										     {
                                                 $n=$row2["username"];
                                                 $img=$row2["image"];
										     }
										     echo '<div style="margin-left:50px">
							
							<img src="../user_images/'.$img.'" style="height:20px; width="20px" ></img>
										&nbsp; &nbsp;'.$c.'
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>'.timeAgo($ct).'</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"> '.$n.'</font>

														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														
													</ul>

											</div>
										</div>';
									   }
							echo '</div>

									</div>
								</div><br> ';	
     	                           
                               }
                            }
                            else
                            {
                            	$messa='<h1 style="color:red">No Post Found...</h1>';
                            	
								
                            }
                             
     
     
                              ?>

 	     </div>
 	           
     <div>

</div>
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