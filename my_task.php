<?php 
    include("dbconfig.php");
?>
<?php 
  session_start(); 

    if(!isset($_SESSION['username']) || trim($_SESSION['username']) == ''){
    header('location: index.php');
    exit();
  }

  $sql = "SELECT * FROM employers WHERE usr_id = '".$_SESSION['username']."'";
  $query = $con->query($sql)or die($con->error);
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
            <!--left-content-->
						<?php 
						$uid=$_SESSION["id"];
                            $sql=mysqli_query($con,"select * from posts where usr_id_p='$uid' order by posts.status_time desc");
                            $sql2=mysqli_query($con,"select * from employers where usr_id='$uid'");
                            while($row3=mysqli_fetch_array($sql2))
                            {
                              $im=$row3['image']; 
                            }
                             while($row=mysqli_fetch_array($sql))
                               {
     	                           $id=$row["post_id"];
     	                           $time=$row["status_time"];
     	                           $post_id =$row['status'];

						echo '<div class="post-show" style="width:90%;border-radius:5px;margin-top:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><img src="user_images/'.$im.'"></img></div>
												<div class="id-name">
													<ul>
													
														<li><small>'.timeAgo($time).'</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="project_description.php?id='.$post_id.'&s_title=' . $row['status'] . '">
							  '.$row['status_title'].'</a>
							  
							                <p>'.$row["status"].'</p>

											 <br/><br/>';
										$sql1=mysqli_query($con,"select * from comments where post_id_c='$id'");
										while($row1=mysqli_fetch_array($sql1))
										{	 
											$cid=$row1["comment_id"];
											$cid1=$row1["post_id_c"];
                                            $ct=$row1["comment_time"];
                                            $c=$row1["comment"];
                                            $uid=$row1["user_id_c"];
                                            $sql2=mysqli_query($con,"select * from seekers where usr_id='$uid'");
                                            while($row2=mysqli_fetch_array($sql2))
										     {
                                                 $n=$row2["username"];
                                                 $img=$row2["image"];
										     }

echo '<div style="margin-left:50px"><img style="height:20px; width="20px" src="user_images/'.$img.'"></img>&nbsp; &nbsp;'.$c.'</div>
		<div style="margin-left:50px"><div class="id-name">
													<ul>
														<small>'.timeAgo($ct).'</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"> '.$n.'</font>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													</ul>
											</div>
										</div>';
									   }
					echo '<a href="delete_post.php?pid='.$id.'" class="btn btn-default">Delete</a>';
							echo '</div>

									</div>
								</div></div> ';	
     	                           
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