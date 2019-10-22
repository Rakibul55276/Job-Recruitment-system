<?php

  session_start();
  
?>

<?php

{
            if(empty($_POST['username'])||empty($_POST['Password'])||empty($_POST['usertype']))

            {
 ?>         
            <script>
                    alert('Please fill all the fields!!')
                        window.location='index.php?menu=login'
            </script>
  
<?php  
            }


if($_POST['usertype']=='seeker')

    {

        $con = mysqli_connect('localhost', 'root', '', 'update'); 

                if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
                                            }   
//mysql_select_db("jobscope",$link) or die("Cant select db");

        if(!$con)
            {
                echo'Check Server to Reconnect';
            }
                if(!mysqli_select_db($con,'update'))
            
            {
                echo'Can not Select Refered Database';
            }
   
    else{

        $q = "SELECT * FROM seekers WHERE username = '".$_POST['username']."' ";
    
            $res = mysqli_query($con,$q) or die("wrong query");
    
    
    
            $row = mysqli_fetch_assoc($res);
    
        }

                
         if(!empty($row))
        {
        

                if($_POST['Password']==$row['password'])
                    {
            
            //login
                        $_SESSION = array();
            
            
                         //$_SESSION['E_gender']=$row['ee_gender'];
                        $_SESSION['email']= $row['email'];
                        //$_SESSION['name']=$row['name'];    
                        $_SESSION['username']=$row['username'];
                        $_SESSION['fname']=$row['fname'];
                        $_SESSION['id']=$row['usr_id'];
                        $_SESSION['usertype']='seeker';
                        $_SESSION['status']=1;
                        $_SESSION['seeker']=1;
            
                        header("location:./b_seeker/index_seek.php");
        }
        else
                 {
 ?>         
            <script>
                    alert('please Enter the correct Password!!')
                        window.location='index.php?menu=login'
            </script>
  
<?php  
                }
    
    }


    else
            {
 ?>         
            <script>
                    alert('User does not exist!!')
                        window.location='index.php?menu=login'
            </script>
  
<?php  
                }
  
 


}
?>











<?php 
{  

    if($_POST['usertype']=='employer')

            {

                $con = mysqli_connect('localhost', 'root', '', 'update');    
                //mysql_select_db("jobscope",$link) or die("Cant select db");

                        if(!$con)
                                {
                                    echo'Check Server to Reconnect';
                                }


                        if(!mysqli_select_db($con,'update'))
                                
                                {
                                    echo'Can not Select Refered Database';
                                }
   
                        else
    
                            $qs = "SELECT * FROM employers WHERE username = '".$_POST['username']."' ";
    
                            $res = mysqli_query($con,$qs) or die("wrong query");
    
                             $row = mysqli_fetch_assoc($res);
    
    
                if(!empty($row))
                    
                    {
                    if($_POST['Password']==$row['password'])
                    {
            
                //login
                            $_SESSION = array();
                            //$_SESSION['E_gender']=$row['ee_gender'];
                            $_SESSION['email']= $row['email'];
                            $_SESSION['username']=$row['username'];
                            $_SESSION['company']=$row['company'];
                            $_SESSION['id']=$row['usr_id'];
                            $_SESSION['usertype']='employer';
                            $_SESSION['status']=1;
                            $_SESSION['employer']=1;
            
                        header("location:index_emp.php");
                    }
                else
                    {
 ?>         
            <script>
                    alert('Please Enter correct password!!')
                        window.location='index.php?menu=login'
            </script>
  
<?php  
                    }
            }
    else
                {
 ?>         
            <script>
                    alert('User does not exist!!')
                        window.location='index.php?menu=login'
            </script>
  
<?php  
                }      
}


}

}
 ?>

