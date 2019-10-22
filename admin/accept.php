<?php
    include('functions.php');
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


    $id = $_GET['id'];
    $query = "select * from `requests` where `post_id` = '$id'; ";
    if(count(fetchAll($query)) > 0)

        {
        foreach(fetchAll($query) as $row){
            $title = $row['status_title'];
            $details = $row['status'];
            $uid=$row['usr_id_p'];
        $query = "INSERT INTO `posts` (`post_id`,`usr_id_p`, `status_title`,`status`,status_image, status_time) VALUES (NULL,'$uid', '$title','$details','',now());)";


        }
        $q = "DELETE FROM `requests` WHERE `post_id` = '$id';";
                

                if(performQuery($query))
                    {
                  
                        	
                        	if(performQuery($q))
                        	{
                        
                        echo '<script>
                        alert("Your post has been Accepted");
                        window.location="home_admin.php"
                        </script>';
                        ;
                        		
                        	}


                    }

                else
                    {
                        echo '<script>
                        alert("Unknown error occured. Please try again.");
                        window.location="home_admin.php"
                        </script>';

                    }
    }else{
        				echo '<script>
                        alert("Error occured.");
                        window.location="home_admin.php"
                        </script>';

    }
    
?>
