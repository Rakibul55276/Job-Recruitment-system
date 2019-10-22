<?php 
include "conn.php";
include "log_index.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NEUON AI</title>
    <meta name="description" content="Neuon AI -- Company Website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/js/bootstrap-filestyle.min.js"> </script>
	<link  href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	

</head>

<body bgcolor="#E6E6FA">




<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
			
            <div class="navbar-header">


            </div>

            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav navbar-center">
                	<li>
                        <a id="a" class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li>
                        <a id="a" class="page-scroll" href="#one">Model S</a>
                    </li>
                    <li>
                        <a id="a" class="page-scroll" href="#two">Model X</a>
                    </li>
                    <li>
                        <a id="a" class="page-scroll" href="#three">Model 3</a>
                    </li>
                    <li>
                        <a id="a" class="page-scroll" href="#four">Roadster</a>
                    </li>
                    <li>
                        <a id="a" class="page-scroll" href="scrollaffect.php">Energy</a>
                    </li>
                </ul>
<style>
   #a
   { color: black;
        
     } /* CSS link color */
  </style>


                <ul class="nav navbar-nav navbar-right">
				
					<li>
                        <a id="a" href="career.php">career</a>
                    </li>
					
                    <li class="btt" id="modal1">
                        <img src="sin.png"onclick="document.getElementById('modal1').style.display='block'"></li>
> 
                        <script>
                    var all = document.getElementsByClassName('btt');
for (var i = 0; i < all.length; i++) {
  all[i].style.color = 'black';

}

var yourImg = document.getElementsByClassName('btt');
if(yourImg && yourImg.style) {
    yourImg.style.height = '60px';
    yourImg.style.width = '120px';
}
</script>

                    


           
          
					<li class="dropdown">
					
						<img src="bar1.png" id="baricon" onclick="myFunction()" class="dropbtn">
							<div id="myDropdown" class="dropdown-content">



								<a href="sign-up_seek.php"><b>Seeker</b></a>
								<a href="sign-up_emp.php"><b>Employer</b></a>
								
							</div>
					</li>
					
<script>

var yourImg = document.getElementById('baricon');
if(yourImg && yourImg.style) {
    yourImg.style.height = '60px';
    yourImg.style.width = '120px';
}
</script>

								
						


						<script>
						/* When the user clicks on the button, 
						toggle between hiding and showing the dropdown content */
						function myFunction() {
						  document.getElementById("myDropdown").classList.toggle("show");
						}

						// Close the dropdown if the user clicks outside of it
						window.onclick = function(event) {
						  if (!event.target.matches('.dropbtn')) {
							var dropdowns = document.getElementsByClassName("dropdown-content");
							var i;
							for (i = 0; i < dropdowns.length; i++) {
							  var openDropdown = dropdowns[i];
							  if (openDropdown.classList.contains('show')) {
								openDropdown.classList.remove('show');
							  }
							}
						  }
						}
						</script>
					
                </ul>
            </div>

    </nav>



</body>
</html>