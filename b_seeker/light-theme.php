<?php 
include('session.php');
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
 
    <!--<header> 

      <div id="branding">
        <img src="./img/logo.png">  
      </div>

      <nav>
        <ul>
          <li><a href="php_resumepost.php?logout='1'">Logout</a></li>
          <li><h4> Welcome    <?php //echo $_SESSION['username']; ?></h4></li>
          <li><button class= "button-header" onclick = "document.location.href='php_resumepost.php'"> Home </button>          
        </ul>
      </nav>

    </header>-->
      
      <?php

         

         $username = $_SESSION['username'];

      

         $sql = "SELECT * FROM `resume` WHERE username= '$username'";

         $query = mysqli_query($con, $sql) or die(mysqli_error());

                    

        while($row = mysqli_fetch_assoc($query)) :?>
      
        <div id="resume-name">

            <div class="imgs">
            <?php
            
            echo"<img src='../user_images/".$row['image']."'style='width:120px;height:97px;'</div>";
            ?>
            </div>
          <h2> <?php echo $row['name'];?></h3>
        </div>
      
        <div class="container-light-resume">
      
          <form method="post" action="php_resumepost.php">                      
            <div class ="resume-container">
              
<style>
 .imgs
 { 
position: center;
 border-radius: 50%;  
   
}

</style>              
              <hr> 
              <h2>Contact</h3>      
              <h3>Email ID <span><?php echo $row['email'];?></span></h3>
              <h3>Phone <span><?php echo $row['phone'];?></span></h3>
              <h3>Location <span><?php echo $row['location'];?></h3>
              <h3>Website <span><?php echo $row['website'];?></span></h3><br>

              
              <hr>
              <h2>About Myself</h3>
              <h3>About <span><?php echo $row['about'];?></span></h3>
              <h3>Profile <span><?php echo $row['profile'];?></span></h3><br>

              
              <hr>
              <h3>Skills and Experiences</h3>
              <h3>Skills <span> <?php echo $row['skill'];?></span></h3>
              <h3>Work <span><?php echo $row['work'];?></span></h3><br>

              
              <hr>
              <h2>Language and Accomplishment</h3>
              <h3>Awards <span><?php echo $row['award'];?></span></h3>
              <h3>Languages <span><?php echo $row['language'];?></span></h3>

            
              <hr>
              <h2>Interest and Hobbies</h3>
              <h3>Interest <span><?php echo $row['interest'];?> </span></h3> 

              
              <hr>
              <h2>References</h2>
              <h3>References <span><?php echo $row['reference'];?> </span></h3>
             
            </div>
          </form>
        </div>
         <!-- <div style="margin-bottom: 50px; margin-top: -20px"> -->
          <div class="download_btn">
              <a target="_blank" href="resume_pdf.php?id=<?= $row['id']?>" class="download_link" style=" ">Download Resume</a>
            </div>
      <?php endwhile;?> 

    </div>

  </body>



</html>
