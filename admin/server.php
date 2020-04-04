<?php
session_start();

// initializing variables
$username = ["username"];
$password = ["password"];
$_SESSION['success'] = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'update');

if ($db->connect_error){
        die('connection failed');
    } 

else
{
// LOGIN USER
if (isset($_POST['loginuser'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);//md5
    $query = "SELECT * FROM admin WHERE username='$username' AND pass='$password'";
    $results = mysqli_query($db, $query) or die("wrong query");
    


    $row = mysqli_fetch_assoc($results);
    
    
    if(!empty($row))
    {
        if($_POST['password']==$row['pass'])
        {
            
            //login
            $_SESSION = array();
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['pass'];
            //$_SESSION['usertype']='admin';
            $_SESSION['status']=1;
            $_SESSION['admin']=1;
            
            
            
            header("location:position_modal.php");
        }
        else
        {
            echo "Wrong Password";
        }
    }
    else
    {
        echo "No Such User";
    }

}


}
}
?>