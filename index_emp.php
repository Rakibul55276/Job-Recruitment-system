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
function timeAgo($time_ago)
		{

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
			if($seconds <= 60)

			{
			    return "just now";
			}
			//Minutes
			

			else if($minutes <=60)
			{
			    if($minutes==1)

			    {
			        return "one minute ago";
			    }

			    else
			    {
			        return "$minutes minutes ago";
			    }
			}
			//Hours
			else if($hours <=24)

			{
			    if($hours==1)
			    {
			        return "an hour ago";
			    }

			    else

			    {
			        return "$hours hrs ago";
			    }
			}
			//Days
			else if($days <= 7)

			{
			    if($days==1)
			    {
			        return "yesterday";
			    }

			    else

			    {
			        return "$days days ago";
			    }
			}
			//Weeks
			else if($weeks <= 4.3)

			{
			    if($weeks==1)

			    {
			        return "a week ago";
			    }else

			    {
			        return "$weeks weeks ago";
			    }
			}
			//Months
			else if($months <=12)

			{
			    if($months==1)

			    {
			        return "a month ago";
			    }else

			    {
			        return "$months months ago";
			    }
			}
			//Years
			else

			{
			    if($years==1)

			    {
			        return "one year ago";
			    }else

			    {
			        return "$years years ago";
			    }
			}
		} 
?>






   <?php  include("header1.php"); ?>

    


 

 <?php 
						$num_rec_per_page=10;
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                          $start_from = ($page-1) * $num_rec_per_page; 
                            $sql=mysqli_query($con,"select * from posts join employers where posts.usr_id_p=employers.usr_id order by posts.status_time desc limit  $start_from, $num_rec_per_page");
                             while($row=mysqli_fetch_array($sql))
                               {
     	                           $id=$row["post_id"];
     	                           $time=$row["status_time"];

						echo '<div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="otheruser.php?userid='.$row['usr_id'].'"><img src="user_images/'.$row['image'].'"></a></img></div>
												<div class="id-name">
													<ul>
													<b><a href="otheruser.php?userid='.$row['usr_id'].'">	'.$row['username'].'</a> </b>
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

											 <br/><br/>';
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
                                                 echo '<div style="margin-left:50px">
										<a href="otheruser.php?userid='.$uid.'"><img style="height:20px; width="20px" src="user_images/'.$img.'"></img></a>
										&nbsp; &nbsp;'.$c.'
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>'.timeAgo($ct).'</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="otheruser.php?userid='.$uid.'"> '.$n.'</a></font>
													</ul>
											</div>
										</div>
										
										';
										     }
										
									   }
							echo '</div>

								</div>
								</div></div><br/> ';	
     	                           
                               }
     
                     
$sql = "select * from posts join employers where posts.usr_id_p=employers.usr_id order by posts.status_time desc"; 
$rs_result = mysqli_query($con,$sql); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page);
echo '<div class="col-lg-8" style="text-align:center; font-size:20px">'; 

echo "<a href='index_emp.php?page=1'>".'|< Prev '."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='index_emp.php?page=".$i."'>" .$i. "</a> "; 
}; 
echo "<a href='index_emp.php?page=$total_pages'>".' Next >|'."</a> "; // Goto last page
echo '</div>'; 

?>
                            

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