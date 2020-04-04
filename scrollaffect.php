<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
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
	<script src="main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
  
    <section class="no-padding" id="three">
	<div>
	<img class="image" src="images/about.jpg">
				<table>
				<tr class="table">
					<td>
						<p class="text1">UNIMAS</p>
						<p class="text2">About us</p>
						<p class="buttonpad"><button class="button" style="vertical-align:middle"><span>Get quote </span>
						<button class="button" style="vertical-align:middle"><span>Learn more</span></button>
					</td>
					<td  class="move">
						<p>Universiti Malaysia Sarawak is a Malaysian public university located</br> in Kota Samarahan, Sarawak. UNIMAS was officially incorporated on 24</br> December 1992. Recently, UNIMAS has been ranked among top 200th </br> in Asian University Rankings 2017 by QS World University Rankings.</p>
					</td>
				</tr>
				</table>
	</div>
    </section>
	
	

		
	
	<script>
		$(document).ready(function() {
			$('#lazyloadimg').delay(750).fadeIn(400);
		});
		
		// Create cross browser requestAnimationFrame method:
		window.requestAnimationFrame = window.requestAnimationFrame
		 || window.mozRequestAnimationFrame
		 || window.webkitRequestAnimationFrame
		 || window.msRequestAnimationFrame
		 || function(f){setTimeout(f, 1000/60)}
		 
		var lazyloadimg = document.getElementById('lazyloadimg')
		 
		function parallaxbubbles(){
		 var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically 
		 lazyloadimg.style.top = -scrolltop * .3 + 'px' // move bubble1 at 20% of scroll rate
		}
		 
		window.addEventListener('scroll', function(){ // on page scroll
		 requestAnimationFrame(parallaxbubbles) // call parallaxbubbles() on next available screen paint
		}, false)
		
	</script>
    </section>
	
	
	
    
				
	</body>
</html>