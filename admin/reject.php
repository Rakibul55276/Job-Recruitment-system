<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`post_id` = '$id';";
        if(performQuery($query)){
        	echo '<script>
                    alert("Post has been Deleted.");
                    window.location="home_admin.php"
                  </script>';
            
        }
        else
        {
            
            echo '<script>
                    alert("Unknown error occured. Please try again.");
                    window.location="home_admin.php"
                  </script>';

        }

?>
