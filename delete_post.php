<?php 
 include('session.php');
 ?>

<?php 

 	
 	


 if(isset($_GET['pid']))
 {  
 	$ps_id=$_GET['pid'];
 	
 	    //$sql1=mysqli_query($con,"delete from comments where post_id_c='$ps_id'"); 
        $sql3=mysqli_query($con,"delete from defaults where post_id='$ps_id'");
        
       
      if($sql3)
      {
      	 echo '<script language="javascript">';
  		echo 'alert(Your post has been deleted!!)';  //not showing an alert box.
  		echo '</script>';
    	header("location:dis_mytask.php");
      }

 }

?>