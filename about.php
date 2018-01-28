
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Manchester | About Us </title>
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
								<li class="active">
									<a href="about.php" class="effect-3">About Us</a>
								</li>
								<li>
									<a href="courses.php" class="effect-3">Courses</a>
								</li>
								<li>
									<a href="join.php" class="effect-3">Join Us</a>
								</li>
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
	<!-- short -->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- about -->
	<div class="about-sec" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>A</span>bout
					<span>U</span>s
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="about-sub">
				<div class="col-md-6 about_bottom_left">
					<h4>Welcome to
						<span>Manchester University</span>
					</h4>
					<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit, Nulla viverra pharetra sem eget.</p>
					<p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
						pulvinar neque pharetra ac.Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla
						viverra pharetra sem.</p>
					<a class="button-style" href="join.php">Join Now</a>
				</div>
				<!-- Stats-->
				<div class="col-md-6 about2-info">
					<img src="images/graduate.png" alt="" />
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- Achievements -->
	<div class="aitsresumethree">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>A</span>chievements
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="load_more">
				<ul id="myList">
					<li class="aitsaitsresumewthreeli-1">
						<div class="l_g">
							<div class="l_g_r g_r">
								<div class="work">
									<div class="work-info">
										<div class="col-xs-6 work-grid work-left">
											<h4>2000-2017</h4>
										</div>
										<div class="col-xs-6 work-grid work-right">
											<h5>Ranked Top 1st</h5>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
												eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="work-info">
										<div class="col-xs-6 work-grid work-right work-right2">
											<h4>2011 - 2012</h4>
										</div>
										<div class="col-xs-6 work-grid work-left work-left2">
											<h5>Queen's Anniversary Prize</h5>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
												eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="work-info">
										<div class="col-xs-6 work-grid work-left">
											<h4>2004 - 2017</h4>
										</div>
										<div class="col-xs-6 work-grid work-right">
											<h5 class="comp">Excellent University Guide</h5>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
												eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //Achievements -->
	<!-- about-team -->
	<div class="team">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>F</span>aculties
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="team-row-agileinfo">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t1.jpg" class="img-responsive" alt="" />
						<div class="effectd-caption">
							<h4>Vaura Tegsner</h4>
							<p>Principal</p>
							<div class="social-lsicon">
								<a href="#" class="social-button twitter">
									<span class="fa fa-twitter"></span>
								</a>
								<a href="#" class="social-button facebook">
									<span class="fa fa-facebook"></span>
								</a>
								<a href="#" class="social-button google">
									<span class="fa fa-google-plus"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t2.jpg" class="img-responsive" alt="" />
						<div class="effectd-caption">
							<h4>Jark Kohnson</h4>
							<p>Senior Teacher</p>
							<div class="social-lsicon">
								<a href="#" class="social-button twitter">
									<span class="fa fa-twitter"></span>
								</a>
								<a href="#" class="social-button facebook">
									<span class="fa fa-facebook"></span>
								</a>
								<a href="#" class="social-button google">
									<span class="fa fa-google-plus"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t3.jpg" class="img-responsive" alt="" />
						<div class="effectd-caption">
							<h4>Chunk Erson</h4>
							<p>Vice Principal</p>
							<div class="social-lsicon">
								<a href="#" class="social-button twitter">
									<span class="fa fa-twitter"></span>
								</a>
								<a href="#" class="social-button facebook">
									<span class="fa fa-facebook"></span>
								</a>
								<a href="#" class="social-button google">
									<span class="fa fa-google-plus"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t4.jpg" class="img-responsive" alt="" />
						<div class="effectd-caption">
							<h4>Goes Mehak</h4>
							<p>Teacher Science</p>
							<div class="social-lsicon">
								<a href="#" class="social-button twitter">
									<span class="fa fa-twitter"></span>
								</a>
								<a href="#" class="social-button facebook">
									<span class="fa fa-facebook"></span>
								</a>
								<a href="#" class="social-button google">
									<span class="fa fa-google-plus"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->
	
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
					<p>© 2018 Manchester University. All rights reserved <!--|  Design by
						<a href="http://kshitijtomar.github.io">Kshitij Tomar</a> -->
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
	<!-- stats numscroller-js-file -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //stats numscroller-js-file -->
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