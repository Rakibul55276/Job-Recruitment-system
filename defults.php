<?php
if(isset($_GET['pid']))
 {  
    $ps_id=$_GET['pid'];

 $query = "select * from `posts` where `post_id` = '$id'; ";

        $res =mysqli_query($con,$query);

        while($row=mysqli_fetch_array($res)) 
        {
        

            $title = $row['status_title'];
            $details = $row['status'];
            $uid=$row['usr_id_p'];
            $query = "INSERT INTO `defaults` (`post_id`,`usr_id_p`, `status_title`,`status`) VALUES (NULL,'$uid', '$title','$details','',now());)";

            $sql5 =mysqli_query($con,$query);

            if ($sql5) 
                    {

                         header("index_emp.php");   
                    }
    }
      
        
  }     

?>