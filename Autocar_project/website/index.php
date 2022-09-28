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
					<div class="search">
					
					<!--<form class="form-inline my-lg-0">
                        <input type="search" placeholder="Search location">
                        <button class="btn" type="submit">Search</button>
                     </form>-->
					
						<form>
							<input type="text" value="" placeholder="Search...">
							<input type="submit" value="">
						</form>
					</div>
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
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
					<?php	
					}
					?>
			<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3></h3>
							<p></p>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3></h3>
							<p></p>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3></h3>
							<p></p>
						</div>
					</li>
				</ul>
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
					<h4>Ut eget neque ac ipsum venenatis lobortis at et diam.</h4>
					<p>Curabitur porta nisl non dui lobortis, vel aliquet ex pretium. Vivamus ullamcorper odio at commodo egestas. Mauris lacinia
						nibh a enim dictum, sit amet scelerisque enim molestie. Morbi ac laoreet ante, quis fermentum urna. Etiam sit amet
						massa non nunc tincidunt mattis. Nunc non ex ultricies, tristique leo sed, vehicula mauris. Sed mollis tristique ligula,
						nec euismod dolor pharetra non.</p>
					<p>Etiam ante diam, congue sit amet elit placerat, faucibus faucibus ipsum. Vivamus vel laoreet nulla. Aenean id bibendum
						diam. Donec rutrum mi diam, sed tempus metus luctus a. Nullam vitae quam sed felis mattis facilisis. Nunc magna. Donec
						eleifend odio non neque semper eleifend. Mauris pharetra venenatis augue.</p>
					<a href="about" class="hvr-bounce-to-bottom">Read More</a>
				</div>
				<div class="col-md-6 welcome_pic">
					<h2>Suspendisse massa pellentesque</h2>
					<img src="images/wc.jpg" class="img-responsive" alt="" />
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
			<h3>Complete auto service</h3>
			<span></span>
			<div class="auto_sec_grids">
				<div class="col-md-8 auto_sec_left">
					<img src="images/pic2.jpg" class="img-responsive" alt="" />
					<h5><a href="#">Mauris a eros quis purus suscipit iaculis</a></h5>
					<p>Etiam ante diam, congue sit amet elit placerat, faucibus faucibus ipsum. Vivamus vel laoreet nulla. Aenean id bibendum
						diam. Donec rutrum mi diam, sed tempus metus luctus a. Nullam vitae quam sed felis mattis facilisis. Nunc magna ex,
						consequat et dapibus nec, volutpat sit amet enim. Ut a sagittis nulla. Duis pulvinar et dolor vitae vulputate. Donec
						eleifend odio non neque semper eleifend. Mauris pharetra venenatis augue.</p>
				</div>
				<div class="col-md-4 auto_sec_right">
					<p><a href="gallery">Donec maximus enim</a></p>
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
						<p>Curabitur pharetra sed magna at tincidunt. Maecenas auctor tincidunt ex. Aliquam a vestibulum Donec diam ipsum euismod.</p>
					</li>
					<li>
						<p>Fusce erat nibh, ornare et suscipit non, varius a sapien. Donec vel lectus vitae nibh sodales semper. Donec diam ipsum.</p>
					</li>
					<li>
						<p>Proin tincidunt sit amet velit quis dignissim. Donec et odio sed purus tristique vitae nibh imperdiet diam sed eget
							metus.</p>
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
						<a class="more hvr-bounce-to-bottom" href="gallery">Read More..</a>
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