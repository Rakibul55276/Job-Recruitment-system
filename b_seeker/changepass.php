<?php 
    include("dbconfig.php");
    
?>
 <script>
  	 function myfun(){


      var a = document.getElementById('exampleInputPassword2').value;
   

      if (a=="") {

            document.getElementById("Message").innerHTML = "please fill password";
            return false;
      }

if(a.length<6)
{
      document.getElementById("Message").innerHTML = "Must be 6 character";
            return false;
}
}
  </script>

<?php
  session_start(); 

    if(!isset($_SESSION['username']) || trim($_SESSION['username']) == ''){
    header('location: index.php');
    exit();
  }



  $sql = "SELECT * FROM seekers WHERE usr_id = '".$_SESSION['username']."'";
  $query = $con->query($sql)or die($con->error);


 
 ?>
  <?php
  extract($_POST);
 if(isset($updpass))
 {
 	


 $em=$_SESSION["username"];
 $pass=md5($op);
 
	$que=mysqli_query($con,"select * from seekers where username='$em' and password='$op'");
	$row= mysqli_num_rows($que);


	 if($row)
	 {
		if($np==$cp)
		{
		$npass=md5($np);
		mysqli_query($con,"update seekers set password='$np' where username='$em'");

	



		
		$err="<font color='green'>Password Update Successfully !</font>";
		}
		else
		{
		$err="<font color='red'>New Password and Confirm not matched</font>";
		}
	 }
	 else
	 {
	  $err="<font color='red'>Old Password doesn't match</font>";
	 }
 
 }
 ?>

<?php include('header1.php');?>

            <!--left-content-->
			<div class="center">
				<div class="posts">
					<div class="create-posts">
						<div class="col-sm-10 well">
 
 <form onsubmit="return myfun()" method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	 
 
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" class="form-control" value="<?php echo @$op; ?>" name="op" id="exampleInputPassword1" placeholder="Old Password" required>
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" value="<?php echo @$np; ?>" class="form-control" name="np" id="exampleInputPassword2" placeholder="New Password" required>
    <span id="Message"></span>
  </div>
  
   <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" value="<?php echo @$cp; ?>" class="form-control" name="cp" id="exampleInputPassword2" placeholder="Confirm Password" required>
    <span id="Message"></span>
  </div>
  
 
<br/>
<div class="form-group">
    <button name="updpass" class="btn  btn-success" type="submit">Update Password</button>
    <span id="Message"></span>
</div>
	</form>	
		</div>

 	     </div>
     <div>
</div>

</div>

		<!--content -->
			
						




</div>

</div>

</div>


<?php include "footer.php"?>


 
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