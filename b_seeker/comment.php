<?php 
    include("dbconfig.php");
    session_start();
?>
<?php 
  
	
    if($_SESSION["username"]=="")
    {
        header("location:index_seek.php");

    }
    


?>
<?php
 if(isset($_POST["uid"]))
 {
   $com=$_POST["comment"];
   $comenterid=$_POST["comme_id"];





                 
//postusr==commentuser
   //$u_id=$_POST["uid"];
   if(empty($com)){

    echo "Please write your comment";
   }
else
{
   $p_id=$_POST["pid"];
   $uid=$_SESSION["id"];
   $sql2=mysqli_query($con,"select usr_id_p from posts where post_id='$p_id'");

   while($row=mysqli_fetch_array($sql2))
   {
      $user=$row["usr_id_p"];
       
   }
   
    $sql= mysqli_query($con,"insert into comments(post_id_c,user_id_c,comment,comment_time) values('$p_id','$uid','$com',now())");
    
   //$sql=mysqli_query($con,"insert into comments(post_id_c,user_id_c,comment,comment_time) values('$p_id','$uid','$com',now())");
    if($sql)
    {
      header("location:index_seek.php");

    }
  }
 }   
 

?>