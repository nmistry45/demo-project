<?php
	session_start();
	if(!isset($_SESSION["username"])){
		header("location:EH_login1.html");
		
	}
?>

<html>
<head>
	<title>Information Technology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="IT.css">
		<link rel="stylesheet" type="text/css" href="main3.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<script>
		function showResult(str) {
		  if (str.length==0) {
		    document.getElementById("livesearch").innerHTML="";
		    document.getElementById("livesearch").style.border="0px";
		    return;
		  }
		  if (window.XMLHttpRequest) {
		    // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp=new XMLHttpRequest();
		  } else {  // code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange=function() {
		    if (this.readyState==4 && this.status==200) {
		      document.getElementById("livesearch").innerHTML=this.responseText;
		      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
		    }
		  }
		  xmlhttp.open("GET","livesearch.php?q="+str,true);
		  xmlhttp.send();
        }
    </script>
</head>
<body>
	<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="logo1.png" alt="">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="EH_MAIN.html">home</a></li>
						<li class="main_nav_item">
							<div class="dropdown">
								<button class="dropbtn">streams
									<i class="fa fa-caret-down"></i>
								</button>
								<div class="dropdown-content">
									<a href="IT.html">Information Technology</a>
									<a href="#">Computer Science</a>
									<a href="#">Electronics</a>
								</div>
							</div>
						</li>
						<li class="main_nav_item"><a href="#">about us</a></li>
						<li class="main_nav_item"><a href="contact.html">contact us</a></li>
						<?php if(!isset($_SESSION["username"])){?><li class="main_nav_item"><a href="EH_login1.html">Login</a></li>
						<?php }else{?><li class="main_nav_item"><a href="logout.php">Logout</a></li>
						<?php }?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+91 9819 6043 36</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="EH_MAIN.html">Home</a></li>
					<li class="menu_item menu_mm">
						<div class="dropdown2">
								<button class="dropbtn2">Streams
									<!-- <i class="fa fa-caret-down"></i> -->
								</button>
								<div class="dropdown-content2">
									<a href="IT.html">Information Technology</a>
									<a href="#">Computer Science</a>
									<a href="#">Electronics</a>
								</div>
						</div>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact Us</a></li>
					<?php if(!isset($_SESSION["username"])){?><li class="main_nav_item"><a href="EH_login1.html">Login</a></li>
					<?php }else{?><li class="main_nav_item"><a href="logout.php">Logout</a></li>
					<?php }?>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

			</div>

		</div>

	</div>

	<!-- Search -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
						<br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<label>Year:</label>
			  		<select id="year">
					</select>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<label>Semester:</label>
					<select id="semester">
					</select>	
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<label>Search:</label>
					<input type="text" size="40" onkeyup="showResult(this.value)">
					<div id="livesearch"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="logo1.png" alt="">
							</div>
						</div>

						<p class="footer_about_text">Engineering Hacks focuses on each and every engineering students dreams and goals and helps them achieve those with giving them easy and useful ways to learn and grasp contents easily.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="courses.html">Courses</a></li>
								<li class="footer_list_item"><a href="news.html">News</a></li>
								<li class="footer_list_item"><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Shah & Anchor Kutchhi Engineering College, Chembur, Mumbai - 400 088
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									022 2558 0854
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>nishit.mistry@sakec.ac.in
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#">Nishit Mistry, Virti Parekh & Parv Maru</a></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

<script src="jquery-2.2.4.min.js"></script>
<script src="year.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>