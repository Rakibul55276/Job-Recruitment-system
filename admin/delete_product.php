<?php 
 session_start();
 include("dbconfig.php");
if($_SESSION['username']=='')
  {
     header('location:reg.php');
  }

?>

<?php 

 	
 	


 if(isset($_GET['pid']))
 {  
 	$ps_id=$_GET['pid'];
 	
 	     
       $sql3=mysqli_query($con,"delete from product where id='$ps_id'");
        
       
      if($sql3)
      {
    	header("location:view_p.php");
      }

 }

?>