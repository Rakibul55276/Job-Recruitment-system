
<?php
 include("session.php");
  include('header1.php');
  //include('errors.php');
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
  //$connect = new mysqli('localhost', 'root', '' ,'resume');


 /* if ( $con->con_error)
  {
    die('connection failed');
  } */


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
      
  $sql = mysqli_query($con,"INSERT INTO resume (name, about, website, email, phone, location, profile, skill, work, award, language, interest, reference,image,username) VALUES('$name', '$about', '$website','$email',
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
           <!-- <link rel="stylesheet" href="./css/style.css">-->
           <div class="panel panel-default">
           
<?php// include('header1.php');?>

           </div>




     

<div class="row" style="clear:both">
<div class="col-lg-12">

<div class="col-lg-4">
  </div>


<div class="col-lg-8"style="margin-left: 2%;">
  <div class="panel panel-default">
<?php   
$sql=mysqli_query($con,"select * from seekers where username='".$_SESSION['username']."'");

$res=mysqli_fetch_array($sql);

?>    
<form action="" method="POST" action="" enctype="multipart/form-data">
        <h2> <div class="panel-heading"style="margin-left: 25%;">Resume Maker</div> </h2>

        <div class ="level-container">
        

          <div>&nbsp;&nbsp;&nbsp;
           <label>Full Name </label>
           &nbsp;&nbsp;&nbsp;
            <input type="text"class ="form-control input-sm" name = "name" placeholder="Type your Name" required></label>
          </div>
          <div>&nbsp;&nbsp;&nbsp;
            <label> Email ID</label>
            &nbsp;&nbsp;&nbsp;
              <input type = "text"class ="form-control input-sm" name="email" placeholder="Type your Email" required>
          </div>

        <div>&nbsp;&nbsp;&nbsp;
            <label>Phone </label>
            &nbsp;&nbsp;&nbsp;
              <input type = "text"class ="form-control input-sm" name="phone" placeholder="Enter your Phone or Mobile Number" required>
          </div>     
   
          <div>&nbsp;&nbsp;&nbsp;
           <label>Location</label>
           &nbsp;&nbsp;&nbsp;
            <input name = "location"class ="form-control input-sm" placeholder="Where are you from" required></textarea>
          </div>

          <div>&nbsp;&nbsp;&nbsp;
            <label>Website </label>
            &nbsp;&nbsp;&nbsp;
            <input type = "text"class ="form-control input-sm" name="website" placeholder="Type URL of your Website" required>
          </div>

          <div>&nbsp;&nbsp;&nbsp;
            <label>About </label>
           <textarea name = "about"class ="form-control input-sm"rows='5' cols="50" placeholder="Type something About you" required ></textarea></label>
          </div>

          <div>&nbsp;&nbsp;&nbsp;
            <label>Profile </label>
           <textarea name = "profile"class ="form-control input-sm"rows='5' cols="50" placeholder="Write something about your Profile" required></textarea>
          </div>
          
          <div>&nbsp;&nbsp;&nbsp;
            <label>Skills </label>
            <textarea name = "skill"class ="form-control input-sm"rows='5' cols="50" placeholder="What are the Skills you have" required></textarea>
          </div>

          <div>&nbsp;&nbsp;&nbsp;
            <label>Work </label>
            <textarea name = "work"class ="form-control input-sm" rows='5' cols="50"placeholder="Your history in Working field" required></textarea>
          </div>
          
          <div>&nbsp;&nbsp;&nbsp;
            <label>Award </label>
           <textarea name = "award" class ="form-control input-sm"rows='5' cols="50"placeholder="Have you achieved any Awards" required></textarea>
          </div>

          <div>&nbsp;&nbsp;&nbsp;
            <label>Language </label>
           <textarea name = "language"class ="form-control input-sm"rows='5' cols="50" placeholder="What are the Languages you know" required></textarea>
          </div>
          
          <div>&nbsp;&nbsp;&nbsp;
            <label>Interest </label>
            <textarea name = "interest"class ="form-control input-sm"rows='5' cols="50" placeholder=" about Interest" required></textarea>
          </div>
          
         <div>&nbsp;&nbsp;&nbsp;
          <label>References </label>
            <textarea name = "reference"class ="form-control input-sm" rows='5' cols="50"placeholder="Your Reference of Work" required></textarea>
          </div>
           <div class="form-group">
                    <label for="photo">Photo</label>

                    <div>
                      <input type="file" name="img" id="photo">
                    </div>
 </div>







          <div>
            <button type="submit" class="button-resume" name="postresume">SAVE RESUME INFORMATION</button>
          </div>
<div>
      <div>
       
         <a target="_blank" href="dark-theme.php" class="btn btn-default" name="submit" style ="text-decoration: none;position: center;background-color: solid;"></style><br>DARK THEME</a>
         
          <a target="_blank" href="light-theme.php" class="btn btn-default" name="submit" style ="text-decoration: none;position: center"></style><br>LIGHT THEME</a>
      </div>  
        
    </div>

</div>
</div>
</form>


</div>


    <!--content -->
      
            




</div>




</div>

</div>

<?php

include"footer.php";
?>

 
<!-- Bootstrap Core JavaScript -->
<script src="components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
 $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


  <script type="text/javascript">
    $(document).ready(function(){
      $('.status').click(function() { $('.arrow').css("left", 0);});
      $('.photos').click(function() { $('.arrow').css("left", 146);});
    });
  </script>
  

</body>
</html>