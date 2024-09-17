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
					<div class="content">
						<div class="content-box">

						<br><h3>
							Welcome to Graeme's Music.</h3><br>
							
							<p>Graeme is in his 60’s and has an eclectic music (use of diverse styles) selection which he has recently digitized to MP3 format from his vinyl (LP, long playing records), reel to reel tapes, tape cassettes and CD’s. 
						</p><br>
							
							<p>On this website you can view all of Graemes music he enjoys listening to!</p>
							
							<br>
							
							
							
							</div>
					</div>
							<div class="content">
						<div class="content-box">
							
							
						
						<h2>Admin</h2>
							
							
							<div class="row">
							  <div class="column">
								<img src="images/Show.png" alt="show users" style="width:100%">
								  <a class="nav-link nav-link-fade-up" href = "02_show_user.php">Show Users</a>
							  </div>
							  <div class="column">
								<img src="images/add.png" alt="add users" style="width:100%">
								  <a class="nav-link nav-link-fade-up" href = "04_add_user.php">Add User</a>
							  </div>
							  <div class="column">
								<img src="images/update.png" alt="update users" style="width:100%">
								  <a class="nav-link nav-link-fade-up" href = "03_update_pass.php">Update Pass</a>
							  </div>
								<div class="column">
								<img src="images/delete.png" alt="delete users" style="width:100%">
									<a class="nav-link nav-link-fade-up" href = "06_delete_user.php">Delete User</a>
							  </div>
							</div>
									
						</div>
					</div>

			
					<!-- my footer with my copyright-->

					<div class="footer">
						<h4>© 2024 Designed & developed by Trinisha Patel</h4>
					</div>		

			</body>
	
	
			
	<script>
		function openNav() {
		  document.getElementById("Menu").style.width = "100%";
		}

		function closeNav() {
		  document.getElementById("Menu").style.width = "0%";
		}
	</script>
		
</html>