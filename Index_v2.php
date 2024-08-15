<?php
        session_start();
        if(!isset($_SESSION['login_user'])){
                header("location:01_login.php");
				}
		else{
			$User = $_SESSION['login_user'];
        }
?>  
<!--DOCTYPE html-->

<html lang="en">
	<head>
		<title>Graemes Music</title>
		<link rel="icon" href="images/icon.png">
		<meta charset= "utf-8">
		<meta name="Keywords" content="Music, Graeme, Groovy"/>
		<meta name="author" content="Trinisha"/>
		<meta name="description" content="Graemes Music"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!--import the web page's style sheet-->
		<link rel="stylesheet" href="css/Style.css"/>
		<link rel="stylesheet" href="css/nav.css"/>
		<link rel="stylesheet" href="css/fonts.css"/>
	</head>
		<body>	
			
				<!-- BANNER -->
				<div class="banner-image">
					<?php
							//Pulls the links from the nav.php page and places them in the navigation div
							require '07_nav.php'; //'require' is 100% needed for the site to run 
					?>
				</div>
				
				<!-- CLASS FOR CONTENT -->
					<div>
			
			
					</div>

			
					<!-- my footer with my copyright-->

					<div class="footer">
						<h4>© 2024 Designed & developed by Trinisha Patel</h4>
					</div>		

			</body>
	
	<script>
		let slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  let i;
		  let slides = document.getElementsByClassName("mySlides");
		  let dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}
	</script>
			
	<script>
		function openNav() {
		  document.getElementById("Menu").style.width = "100%";
		}

		function closeNav() {
		  document.getElementById("Menu").style.width = "0%";
		}
	</script>
		
</html>