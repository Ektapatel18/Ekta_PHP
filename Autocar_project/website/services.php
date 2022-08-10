<?php
include_once('header.php');

?>

<body>
	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<div class="header">
				<div class="logo">
					<h1><a href="index"><img src="images/logo.jpg" alt=""/>Bike Rental<span>System</span></a></h1>
				</div>
			<div class="top_details">
				<ul>
					
					<?php
					if(isset($_SESSION['user_name']))
					{
					?>
					<button class="btn btn-light"><a href="logout">Logout</a></button>
					<button class="btn btn-light"><a href="myprofile">My profile</a></button>
					<?php
					}
					else
					{
					?>
					<button class="btn btn-light"><a href="login">Login</a></button>
					<button class="btn btn-light"><a href="signup">Signup</a></button>
					<?php
					}
					?>
					
					</ul>
					<div class="search">
						<form>
							<input type="text" value="" placeholder="Search...">
							<input type="submit" value="">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="about">About</a></li>
						<li class="active"><a href="services">Services</a></li>
						<!--<li><a href="blog">Blog</a></li>-->
						<li><a href="gallery">Gallery</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!---->
	<div class="services">
		<div class="container">
			<h2>Services</h2>
			<ol class="breadcrumb">
				<li><a href="index">Home</a></li>
				<li class="active">Services</li>
			</ol>
			<div class="section group sec_group">
				<div class="col-md-6 service_sec">
					<div class="listimg listimg_2_of_1">
						<img src="images/service-6.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						<h3>Live Support</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit
							amet, consectetur adipisicing elit, sed do eiusmod tempor labore.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 service_sec ">
					<div class="listimg listimg_2_of_1">
						<img src="images/service-2.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						<h3>Repair Services</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit
							amet, consectetur adipisicing elit, sed do eiusmod tempor labore.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="section group sec_group">
				<div class="col-md-6 service_sec">
					<div class="listimg listimg_2_of_1">
						<img src="images/service-3.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						<h3>Complete Care</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit
							amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 service_sec">
					<div class="listimg listimg_2_of_1">
						<img src="images/service-4.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						<h3>Spare Parts</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit
							amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="section group sec_group">
				<div class="col-md-6 service_sec">
					<div class="listimg listimg_2_of_1">
						<img src="images/service-5.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						<h3>Sales Services</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit
							amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 service_sec">
					<div class="listimg listimg_2_of_1">
						<img src="images/service-1.png" alt="" />
					</div>
					<div class="text list_2_of_1">
						<h3>Tyre Services</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit
							amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	
	<?php
	include_once('footer.php');
	
	?>