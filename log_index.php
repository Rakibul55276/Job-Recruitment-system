<?php include('conn.php') ?>





<!DOCTYPE html>
<html>

<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}


/* Full-width input fields */
input[type=text], input[type=password] {
     
     width: 520px;
  padding: 8px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
  	text-align: left;
color: black;
}

.btt
{
	
    color: silver;
    padding: 14px 20px;  
    	
}
.sub
{
width: 100px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 30px;
  box-sizing: border-box;
  color: silver;
  background-color: green;
}

/* Set a style for all buttons */

button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 100px;
	height:100px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}


/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>

<body background="../background1.png">




<div id="modal1" class="modal">
  
  <form method="post" class="modal-content animate" action="process_login.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal1').style.display='none'" class="close" title="Close">&times;</span>


      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Sign In</h1>
    </div>

   <div class="sign">
        <tr>
          <td>
            <input type="text" name="username"placeholder = "Enter your Username">
          </td>
        </tr>

        <tr>
          <td>
           <input type="password" name="Password"placeholder = "Enter your Password">
          </td>
        </tr>
    </div>
      <br>    

<tr>
      <td class="opt">
        Select user Type:<select name="usertype">
          <option value="seeker">Seeker</option>
          <option value="employer">Employer</option>
          <option value="admin">Admin</option>

        </select> 
      </td>
    </tr>
         <br>
      <button type="submit" class="sub">Login</button>
      <a href="#" style="text-decoration:left; margin-left:252px; margin-top:26px;">Forgot Password ?</a>
      <br>
      
		



<style>
	select{
    margin:40px;
    background: rgba(0,0,0,0.3);
    color:#fff;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
</style>
           
      
    </div>
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal1');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
