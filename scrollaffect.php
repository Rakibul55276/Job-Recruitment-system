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
	<img class="image" src="images/wall2.jpg">
				<table>
				<tr class="table">
					<td>
						<p class="text1">Powerpack</p>
						<p class="text2">Massive Energy Storage</p>
						<p class="buttonpad"><button class="button" style="vertical-align:middle"><span>COMMERCIAL </span>
						<button class="button" style="vertical-align:middle"><span>UTILITYSS</span></button>
					</td>
					<td  class="move">
						<p>A giant battery designed to change the way we power the world </br>—with clean energy, at an enormous scale.</p>
					</td>
				</tr>
				</table>
	</div>
    </section>
	
	
  <section class="no-padding" id="four">
	<div class="lazybackground">
		<div id="lazyloadimg">
			<img src="images/car.png" data-src="car.png" />
		</div>
	</div>
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
	
	
	<section class="no-padding" id="three">
	<div>
	<img class="image" src="images/wall2.jpg">
				<table>
				<tr class="table">
					<td>
						<p class="text1">Powerpack</p>
						<p class="text2">Massive Energy Storage</p>
						<p class="buttonpad"><button class="button" style="vertical-align:middle"><span>COMMERCIAL </span>
						<button class="button" style="vertical-align:middle"><span>UTILITYSS</span></button>
					</td>
					<td  class="move">
						<p>A giant battery designed to change the way we power the world </br>—with clean energy, at an enormous scale.</p>
					</td>
				</tr>
				</table>
	</div>
    </section>
	
    <section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./images/e1.jpg">
                        <img src="./images/e1.jpg" class="img-responsive" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
								<div>
									<h5 class="gallery-box-content"><b>Hillary Johnson</b></br></br> Software Developer</br></br></br></br></br></br>Software Engineer Job Duties: Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions. </br></br></br>
																   Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</h5>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./images/e2.jpg">
                        <img src="./images/e2.jpg" class="img-responsive" alt="Image 2">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
								<div>
									<h5 class="gallery-box-content"><b>Hillary Johnson</b></br></br> Software Developer</br></br></br></br></br></br>Software Engineer Job Duties: Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions. </br></br></br>
																   Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</h5>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./images/e3.jpg">
                        <img src="./images/e3.jpg" class="img-responsive" alt="Image 3">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
								<div>
									<h5 class="gallery-box-content"><b>Hillary Johnson</b></br></br> Software Developer</br></br></br></br></br></br>Software Engineer Job Duties: Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions. </br></br></br>
																   Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</h5>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./images/e4.jpg">
                        <img src="./images/e4.jpg" class="img-responsive" alt="Image 4">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                
								<div>
									<h5 class="gallery-box-content"><b>Hillary Johnson</b></br></br> Software Developer</br></br></br></br></br></br>Software Engineer Job Duties: Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions. </br></br></br>
																   Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./images/e5.jpg">
                        <img src="./images/e5.jpg" class="img-responsive" alt="Image 5">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
								<div>
									<h5 class="gallery-box-content"><b>Hillary Johnson</b></br></br> Software Developer</br></br></br></br></br></br>Software Engineer Job Duties: Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions. </br></br></br>
																   Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</h5>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./images/e6.jpg">
                        <img src="./images/e6.jpg" class="img-responsive" alt="Image 6">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
								<div>
									<h5 class="gallery-box-content"><b>Hillary Johnson</b></br></br> Software Developer</br></br></br></br></br></br>Software Engineer Job Duties: Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions. </br></br></br>
																   Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.</h5>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
	</body>
</html>