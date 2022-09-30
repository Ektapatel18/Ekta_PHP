<?php
include_once ('header.php');
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
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li><a href="booking">Booking</a></li>
						<li class="active"><a href="vehicales">Available Vehicales</a></li>
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
						<li class="active"><a href="vehicales">Available Vehicales</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
					<?php	
					}
					?>
		</div>
	</div>
	<!---->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top gal_heading">
				<h2>Available Vehicales</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">Vehicales</li>
				</ol>
			</div>
			<div class="gallery-bottom">
				<ul id="og-grid" class="og-grid">
					
					<?php
					foreach($fetcharr as $data)
					{
						?>
						
					<li>
						<a href="single" data-largesrc="img/vehi_img/<?php echo $data->img;?>"  data-title="<?php echo $data->name;?>" data-description="<?php echo $data->des;?> <br> Mileage : <?php echo $data->mileage;?> <br> Price : <?php echo $data->price;?><br> <button>Booking</button>">
						<img class="img-responsive" src="img/vehi_img/<?php echo $data->img;?>" alt="img01"/>
						
						</a>
					</li>
					<?php
					}
					?>
					
					
					<div class="clearfix"> </div>
				</ul>
			</div>
		</div>
	</div>
	
	<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/jquery.min.js"></script>
	<!----end-gallery---->
	<script src="js/grid.js"></script>
	<script>
		$(function () {
			Grid.init();
		});
	</script>
	<script src="js/bootstrap.js"></script>

	<?php
	include_once('footer.php');
	?>
