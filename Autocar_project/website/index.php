<?php
include_once ('header.php');
?>


<body>
	<!-- banner -->
	<div class="banner">
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
					
				</div>
				<div class="clearfix"></div>
			</div>
			
			<?php
					if(isset($_SESSION['user_name']))
					{
					?>
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
						<li class="active"><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li><a href="booking">Booking</a></li>
						<li><a href="vehicales">Available Vehicales</a></li>
						<li><a href="vehicaleform">Vehicales Form</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
					}
					else
					{
						?>
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
						<li class="active"><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li><a href="vehicales">Available Vehicales</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
					<?php	
					}
					?>
			<div id="top" class="callbacks_container">
			
			<form action="" method="post" enctype="multipart/form-data">
			<div class="col-md-4">
			<label style="color:#f66c53">Pickup Location</label>
			<input type="text" class="form-control">
			</div>
			<div class="col-md-4">
			<label style="color:#f66c53">Drop Location</label>
			<input type="text" class="form-control">
			</div>
			<div class="col-md-4">
			<label style="color:#f66c53">Pickup Date & Time</label>
			<input type="datetime-local" class="form-control">
			</div>
			<div class="col-md-4"><br>
			<label style="color:#f66c53">Drop Date & Time</label>
			<input type="datetime-local" class="form-control">
			</div>
			
		
			<div class="col-md-4"><br>
			<input type="button" style="background-color:#f66c53;color:black;margin-top:30px;" value="Search" class="btn btn-basic">
			</div>
			</form>
				
			</div>
		</div>
	</div>
	<!---->
	<div class="welcome">
		<div class="container">
			<div class="welcome_sec">
				<div class="col-md-6 welcome_info">
					<h3>Welcome</h3>
					<span></span>
					<h4>Monthly Bike Rentals in Ahmedabad.</h4>
					<p>Looking to avail scooters on monthly rent in Ahmedabad? Due to the ongoing critical situation, it is advised that public transport be avoided.
						But what will you do in the coming weeks when you need to head out for an appointment or go on an errand run? Bike Rentals System is offering sanitized bikes and helmets in Ahmedabad for long-term rentals. We care about your health and safety,
						which means you can even opt for home delivery and pick-up of the bike.</p>
					<p>Bike Rentals System is available in Ahmedabad near you - Vishalpur (Nehru Bridge Centre). We are also located in Surat in Gujarat state and 40+ different locations in India.
						You can avail TVS NTorq, Aprilia SR 150, Honda Dio, Honda Activa on monthly rent in Ahmedabad.</p>
					<a href="about" class="hvr-bounce-to-bottom">Read More</a>
				</div>
				<div class="col-md-6 welcome_pic">
					<h2>Suspendisse massa pellentesque</h2>
					<img src="images/news.jpg" class="img-responsive" alt="" />
					<h3>Vestibulum efficitur lacus nulla porttitor lorem luctus.</h3>
					<p>Duis vitae auctor purus. Aenean feugiat nunc mauris, id porttitor turpis rhoncus sit amet. Lorem ipsum dolor sit amet,
						consectetur adipiscing elit. Aenean finibus felis ac risus lacinia, non venenatis erat vestibulum.</p>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->
	<div class="auto_sec">
		<div class="container">
			<h3>Avail Bike Activa In Rent</h3>
			<span></span>
			<div class="auto_sec_grids">
				<div class="col-md-8 auto_sec_left">
					<!--<img src="images/pic2.jpg" width="800px" height="200px" class="img-responsive" alt="" />-->
					<h5><a href="">Looking for a Bike on Rent in Ahmedabad for a Month?</a></h5>
					<p>Wherever you would like to commute in Ahmedabad, Bike Rentals System has your back. 
					We offer long-term bike rentals in Ahmedabad at super affordable rates and with no additional charges or deposit.
					Go for the best mode of transport with your trusted mobility partner, where we ensure the health and safety of you and your bike!
					</p><p><br>
					We're the bike rental service that you can depend on. We've serviced over 2.5 lakh customers in India. So when looking for a bike on rent in Ahmedabad for a month, visit our store in Vishalpur or visit our website. 
					We're always just a call away! Contact us for more information on monthly bike rentals in Ahmedabad.
					</p>
				</div>
				<div class="col-md-4 auto_sec_right">
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->


	<div class="slider btm_sld">
		<div class="container">
			<div class="callbacks2_container">
				<ul class="rslides" id="slider2">
					<li>
						<p></p>
					</li>
					<li>
						<p></p>
					</li>
					<li>
						<p></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!---->

	<!---->
	<div class="feature_sec">
		<div class="container">
			<div class="feature_head">
				<h3>Available Vehicales</h3>
				<span></span>
			</div>
			<ul id="flexiselDemo3">
			
			<?php
			
			foreach($fetcharr as $data)
			{
				?>
				<li>
					<div class="biseller-column">
						<a href="#"><img src="../employee/img/cate_img/<?php echo $data->cate_img;?>" height="200px" width="200px" alt=""/></a>
						<h4><?php echo $data->cate_name;?></h4>
						<h5><?php echo $data->cate_desc;?></h5>
						<a class="more hvr-bounce-to-bottom" href="vehicales">Read More..</a>
					</div>
				</li>
				
			<?php
			
			}
			
			?>
			</ul>
			<div class="clearfix"></div>

		</div>
	</div>
	
	
	<?php
	include_once('footer.php');
	
	?>