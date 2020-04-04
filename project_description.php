<?php include('session.php') ?>


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





<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="../../favicon.ico">
 
 <!-- http://draganzlatkovski.com/code-projects/toggle-jquery-side-bar-menu-in-bootstrap-free-template/ -->
 
 <title>UNIMAS JOB RECRUITMENT SYSTEM</title>
 
 <!-- jQuery -->
 
 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="components/bootstrap/dist/js/jquery.js"></script>
 
  
 
 <!-- Bootstrap core CSS -->
 <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <!-- Custom styles for this template -->
 <link href="components/bootstrap/dist/css/simple-sidebar.css" rel="stylesheet">
 <link rel="stylesheet" href="components/bootstrap/dist/css/postataskbox.css" />
 
    <link rel="stylesheet" href="components/bootstrap/dist/css/projectdes.css" />

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

   

 

 
 
</head>

<body>
 
 
 


 <div class="container-fluid">
 
 
 
  <div id="navbar" class="navbar-collapse collapse">
  
  
  
  
 
 

 </div>
 </div>
 </form>
 </div>
 </div>
 </nav>
 
 
 

 <!-- /#sidebar-wrapper -->
 

 
 </div>
 
 <!-- /#page-content-wrapper -->
 </div>
 </div>
 <!-- /#wrapper -->

  <div id="page-content-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <div class="col-lg-4">
  
 <div class="col-lg-8">
    <?php
$title = $_GET['s_title'];
$p_id = $_GET['id'];

$sql1=mysqli_query($con,"select * from posts where post_id='$p_id'");
                    while($comnt1=mysqli_fetch_array($sql1)){
                           $uid=$comnt1["usr_id_p"];
                        }
                        $sql2=mysqli_query($con,"select * from employers where usr_id='$uid'");
                    while($comnt2=mysqli_fetch_array($sql2)){
                           $im=$comnt2["image"];
                        }
?>
      
<div class="container">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow">
            <div class="post-heading">
                <div class="pull-left image">
                    <img src="user_images/<?php echo $im; ?>" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b></b></a>
                    
                    </div>
                </div>
            </div> 
            <div class="post-description"> 
              
               <?php
                $title = $_GET['s_title'];
                $p_id = $_GET['id'];

            echo $title;

?>
             
   
          
                
            </div>
        	<form action="comment.php" method="post">

            <div class="post-footer">
                <div class="input-group"> 

                    <!--<textarea class="form-control" cols="100" rows="10" placeholder="Add a comment" type="text" name="comment"></textarea>-->

                    <input class="form-control"  type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">

                    <input class="form-control"  type="hidden" name="pid" value="<?php echo $p_id;?>">

                   	<div class="btn-group" role="group" style="margin-top:5px">

					<!--<button type="submit" name="submit_comment"  class="btn btn-primary btn-hover-green" >Post Your Comment</button>--->
          
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index_emp.php" class="mt-5 mb-3 text-muted" id="btmn">Back</a>
				</div>
                </div>
                </form>

                <style>
                    body 
                        {
                  background-image: url("paper.jpg");
                  background-repeat: no-repeat;
                  background-size: auto;
                  background-size: cover;
                    
                        }
                        .container
                        {
                            margin-right: 20%;
                            margin-left: 80%;
                        }
                </style>

                	<?php 
                      $p_id = $_GET['id'];
                      
                     $sql=mysqli_query($con,"select * from comments where post_id_c='$p_id'");
                    while($comnt=mysqli_fetch_array($sql)){
							//fetching all posts
							$time_ago = $comnt['comment_time'];


						echo '<ul class="comments-list">
                    <li class="comment">
                        <a class="pull-left" href="#">
                            <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                        </a>
                        <div class="comment-body">
                            <div class="comment-heading">
                               
                                <h5 class="time">'.timeAgo($time_ago).'</h5>
                            </div>
                            <p>'.$comnt['comment'].'</p>
                        </div>
                       
                    </li>
                
                </ul>
                
                ';	
					}	
				?>
                
            </div>
        </div>
    </div>
</div>
     
     
 </div>
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