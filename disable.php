<?php 
 include('session.php');
 ?>

<?php 

    
    


 if(isset($_GET['pid']))
 {  
    $ps_id=$_GET['pid'];
    
        $sql1=mysqli_query($con,"delete from comments where post_id_c='$ps_id'"); 
        $sql3=mysqli_query($con,"delete from posts where post_id='$ps_id'");
        
       
      if($sql3)
      {
      	echo '<script>alert("Your post has been disabled..");

        </script>';
    	header("my_task.php");
        
      }
      

 }

?>