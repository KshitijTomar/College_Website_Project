
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Manchester | Join Us</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="bottom_header_left">
				<p>
					<span class="fa fa-map-marker" aria-hidden="true"></span>New Delhi, India
				</p>
			</div>
			<div class="bottom_header_right">
				</div> -->
				<div class="header-top-righ">
					<div class="dropdown">
						<?php
						if ( empty($_COOKIE["logged_in"])  or ( $_COOKIE["logged_in"]=="0") ){
						echo '<a href="login.php"><span class="fa fa-sign-out" aria-hidden="true"></span>Login</a>';
						} else{
						echo '<a class="nav-link js-scroll-trigger" href=""><span class="fa fa-user" aria-hidden="true" style="padding-right:7px;"></span>' . $_COOKIE["user_name"] .'</a>';
						echo '<div class="dropdown-content">';
						echo '<a href="signout_action.php" style="color:#000;">Sign out</a>';
						// echo '<a href="#" style="color:#000;">Link 2</a>';
						// echo '<a href="#" style="color:#000;">Link 3</a>';
						echo '</div>';
						}
						?>
          			</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<h1>
								<span class="fa fa-university" aria-hidden="true"></span>Manchester
								<label>University</label>
							</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li>
									<a href="index.php" class="effect-3">Home</a>
								</li>
								<li>
									<a href="about.php" class="effect-3">About Us</a>
								</li>
								<li>
									<a href="courses.php" class="effect-3">Courses</a>
								</li>
								<li class="active">
									<a href="join.php" class="effect-3">Join Us</a>
								</li>
								</li> -->
								<li>
									<a href="gallery.php" class="effect-3">Gallery</a>
								</li>
								<li>
									<a href="contact.php" class="effect-3">Contact Us</a>
								</li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div class="inner_page_agile">

	</div>
	<!--//banner -->
	<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Join Us</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>A</span>dmission
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="register-form">
				<form action="admission_action.php" method="post">
					<div class="fields-grid">
						<div class="styled-input">
							<input type="text" placeholder="Your Name" name="Your_name" required="">
						</div>
						<div class="styled-input">
							<input id="datepicker" placeholder="Birth Date" name="bday" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							    required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<select class="category2" required="">
								<option value="">Gender</option>
								<option value="">Female</option>
								<option value="">Male</option>
								<option value="">Other</option>
							</select>
						</div>
						<div class="styled-input">
							<input type="email" placeholder="Your E-mail" name="Email" required="">
						</div>
						<div class="styled-input">
							<input type="text" placeholder="Phone Number" name="Phone" required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<select class="category2" required="">
								<option value="">Select Course</option>
								<option value="">Web Designing</option>
								<option value="">Web Technology </option>
								<option value="">PC Systems </option>
								<option value="">IT Foundations </option>
								<option value="">HR Management </option>
								<option value="">Modeling </option>
								<option value="">Basic Marketing</option>
							</select>
							<span></span>
						</div>
						<div class="styled-input">
							<div class="agileits_w3layouts_grid">
								<select class="category2" name="category1" required="">
									<option value="">Select Course Time</option>
									<option value="">Hours: 8am - 10am</option>
									<option value="">Hours: 10am - 12pm</option>
									<option value="">Hours: 12pm - 4pm</option>
									<option value="">Hours: 4pm - 7pm</option>
									<option value="">Hours: 7pm - 9pm</option>
								</select>
							</div>
						</div>
						<div class="styled-input">
							<label class="header">Your Address</label>
							<div class="">
								<input type="text" name="address" placeholder="Address" title="Please enter your Address" required="">
							</div>
							<div class="">
								<input type="text" name="Line" placeholder="Line" title="Please enter your Line" required="">
							</div>
							<div class="">
								<input type="text" name="City" placeholder="City" title="Please enter your City" required="">
							</div>
							<div class="">
								<input type="text" name="Zip_Code" placeholder="Zip Code" title="Please enter your Zip code" required="">
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="mkl_footer">
		<div class="sub-footer">
			<div class="container">
				<div class="mkls_footer_grid">
					<div class="col-xs-4 mkls_footer_grid_left">
						<h4>Location:</h4>
						<p>12345, Location,
							<br> New Delhi, India</p>
					</div>
					<div class="col-xs-4 mkls_footer_grid_left">
						<h4>Mail Us:</h4>
						<p>
							<span>Phone : </span>+91 987 654 3210</p>
						<p>
							<span>Email : </span>
							<a href="mailto:mail@mail.com">mail@mail.com</a>
						</p>
					</div>
					<div class="col-xs-4 mkls_footer_grid_left">
						<h4>Opening Hours:</h4>
						<p>Working days : 8am-10pm</p>
						<p>Sunday
							<span>(closed)</span>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="botttom-nav-allah">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="courses.php">Courses</a>
						</li>
						<li>
							<a href="join.php">Join Us</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<!-- footer-button-info -->
				<div class="footer-middle-thanks">
					<h2>Manchester University Welcomes You</h2>
				</div>
				<!-- footer-button-info -->
			</div>
		</div>
		<div class="footer-copy-right">
			<div class="container">
				<div class="allah-copy">
					<p>© 2018 Manchester University. All rights reserved
					</p>
				</div>
				<div class="footercopy-social">
					<ul>
						<li>
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-rss"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-vk"></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>