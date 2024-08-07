<?php
	ob_start();
	session_start();
	$error = NULL;
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		require "GraemesMusic_mysqli.php";
		if (isset($_POST["username"])) {
			$myusername = mysqli_real_escape_string($conn, $_POST['username']);
			$mypassword = mysqli_real_escape_string($conn, $_POST['password']);
			$query = "SELECT Username FROM Users WHERE Username = '$myusername' and Password = '$mypassword'";

			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$count = mysqli_num_rows($result);

			if($count == 1) {
				$_SESSION['login_user'] = $myusername;
				header("location: 01_login.php");
			} else {
				$error = "ERROR! Your Login Name or Password is invalid";
			}
		}
	}
	ob_end_flush();
?>

<!--DOCTPYE html-->

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
					<div class="content">
						<div class="content-box">

						<!-- Holds the main page content -->
							<div class="section3"><!--Holds the main page content -->
								<h3><form method = "post" id="01_login">
									<label for = 'login'>Username:</label>
									<input type = "text" name = "username" placeholder="Enter user name"/><br />
									<label for = 'login'>Password:</label>
									<input type = "text" name = "password" placeholder="Enter password"/><br />
									<input type = "submit" value = "Submit"/><br />
								</form></h3>
								<h3 class = "grey"><?php echo $error; ?></h3>
							</div>					
						</div>
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
