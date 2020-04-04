  
<?php 
 include("session.php");

?>
  <?php   
  // variable declaration
  $username= "";
  $name= "";
  $about= "";
  $website= "";
  $email= "";
  $phone= "";
  $location= "";
  $profile= "";
    $skill= "";
    $work= "";
  $award= "";
  $language= "";
  $interest= "";
  $reference= "";
  $pic = "";
  $_SESSION['success'] = "";
  $errors = array(); 

  // connect to database
  $connect = new mysqli('localhost', 'root', '' ,'resume');


  if ( $connect->connect_error)
  {
    die('connection failed');
  } 


if (isset($_POST['postresume']))
  {
    // receive all input values from the form

  $name= $_POST ['name'];
  $about= $_POST ['about'];
  $website= $_POST ['website'];
  $email= $_POST ['email'];
  $phone= $_POST ['phone'];
  $location= $_POST ['location'];
  $profile= $_POST ['profile'];
  $skill= $_POST ['skill'];
  $work= $_POST ['work'];
  $award= $_POST ['award'];
  $language= $_POST ['language'];
  $interest= $_POST ['interest'];
  $reference= $_POST ['reference'];
  $username =$_SESSION['username'];
  //$pic=$_FILES['img'];
  
  //$pic=$_GET['img'];


   $pic=$_FILES['img']['name'];
   $tmp=$_FILES['img']['tmp_name'];
  $type=$_FILES["img"]["type"];
   
    if($type=="application/pdf" || $type=="application/x-zip-compressed") 
  {
    $error[] = "this type of file does not supported !";  
    }
  
  $path='../user_images/'.$pic;
  $icon='warning';
  $class='danger';
      
  $sql = mysqli_query($connect,"INSERT INTO resume (name, about, website, email, phone, location, profile, skill, work, award, language, interest, reference,image,username) VALUES('$name', '$about', '$website','$email',
   '$phone', '$location','$profile', '$skill', '$work', '$award', '$language', '$interest', '$reference', '$pic','$username')");
  //$query = mysql_query($con,$sql)


     
  if($sql)
    {  
            move_uploaded_file($tmp,$path);
            $error[] = "Registration successfully for login click on sign button";
            $icon="success";
            $class="success";  
    }
  
    else echo "wrong Sql Statement";


}


?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Resume Maker">
    <meta name="author" content="Mehedi">
    <title>Resume Maker | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/a.js"></script>  
  </head>

  <body>    
 
    <header> 

      <div id="branding">
        <img src="./img/logo.png">  
      </div>

      <nav>
        <ul>
          
          <li><a class="button-header"style="text-decoration: none; height: 15px;" href="logout1.php?logout='1'">Logout</a></li>

          <li><button class= "button-header" onclick = "document.location.href='index_seek.php'"> Home </button> </li>
          <li><h4> Welcome    <?php echo $_SESSION['username']; ?></h4></li>          
        </ul>
      </nav>

    </header>
      
            
    <div class="container-dark-resume-info">

       <div >
          <?php include('errors.php'); ?>
        </div> 

      
       
<form action="" method="POST" action="" enctype="multipart/form-data">
        <h2> Create Your Resume </h2>

        <div class ="level-container">
        

          <div>
           <label>Name<input type="text" name = "name" placeholder="Type your Name" required></label>
          </div>
          <div>
            <label> Email ID<input type = "text" name="email" placeholder="Type your Email" required></label>
          </div>
        
          <div>
            <label>Phone <input type = "text" name="phone" placeholder="Enter your Phone or Mobile Number" required></label>
          </div>     
   
          <div>
           <label>Location <input name = "location" placeholder="Where are you from" required></textarea>
          </div>

          <div>
            <label>Website <input type = "text" name="website" placeholder="Type URL of your Website" required></label>
          </div>

          <div>
           <label>About<textarea name = "about" placeholder="Type something About you" required ></textarea></label>
          </div>

          <div>
           <label>Profile<textarea name = "profile" placeholder="Write something about your Profile" required></textarea>
          </div>
          
          <div>
            <label>Skills<textarea name = "skill" placeholder="What are the Skills you have" required></textarea>
          </div>

          <div>
            <label>Work<textarea name = "work" placeholder="Your history in Working field" required></textarea>
          </div>
          
          <div>
           <label>Awards<textarea name = "award" placeholder="Have you achieved any Awards" required></textarea>
          </div>

          <div>
           <label>Languages<textarea name = "language" placeholder="What are the Languages you know" required></textarea>
          </div>
          
          <div>
            <label>Interest<textarea name = "interest" placeholder=" about Interest" required></textarea>
          </div>
          
          <div>
            <label>References<textarea name = "reference" placeholder="Your Reference of Work" required></textarea>
          </div>
          <div>
              
              <input type="file"  name="img"/>
          </div> 
          <div>
            <button type="submit" class="button-resume" name="postresume">SAVE RESUME INFORMATION</button>
          </div>

        </div>
       

        



      </form>

    </div>

    <div class="container-dark-resume-theme">
      <div>
         <a target="_blank" href="dark-theme.php" class="button-resume-dark" name="submit" style ="text-decoration: none;position: center"></style><br>DARK THEME</a>
      </div>  
      
      <div>
         <a target="_blank" href="light-theme.php" class="button-resume-light" name="submit" style ="text-decoration: none;position: center"></style><br>LIGHT THEME</a>
      </div>  
    </div>


  </body>

   <footer>
      <p>UNIMAS JOB RECRUITMENT SYSTEM, Copyright &copy; 2019</p>
    </footer>


</html>
