<?php
include_once('header.php');

?>

<script>
	function validate()
	{
		var book_id=document.forms["bookingform"]["book_id"].value;
		if(book_id=="" || book_id==null)
		{
			alert("Please fill out Booking ID");
			return false;
		}
		var cust_id=document.forms["bookingform"]["cust_id"].value;
		if(cust_id=="" || cust_id==null)
		{
			alert("Please fill out customer ID");
			return false;
		}
		var Vehi_id=document.forms["bookingform"]["Vehi_id"].value;
		if(Vehi_id=="" || Vehi_id==null)
		{
			alert("Please fill out Vehical ID");
			return false;
		}
		var book_date=document.forms["bookingform"]["book_date"].value;
		if(book_date=="" || book_date==null)
		{
			alert("Please fill out Booking Date");
			return false;
		}
		var booking_time=document.forms["bookingform"]["booking_time"].value;
		if(booking_time=="" || booking_time==null)
		{
			alert("Please fill out Booking Time");
			return false;
		}
		
	}
 
 </script>
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
						<li ><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li class="active"><a href="booking">Booking</a></li>
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
		</div>
	</div>
	<!---->
	<div class="services">
		<div class="container">
			<h2>Booking</h2>
			<ol class="breadcrumb">
				<li><a href="index">Home</a></li>
				<li class="active">Booking</li>
			</ol>
			
			<form name="bookingform" action="" style="border-style: outset" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1"><br>
              <label class="control-label">ID</label>
              <input type="text" name="book_id" class="form-control" placeholder="Booking Id" >
            </div>
			
            <div class="col-md-12 form-group1"><br>
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" class="form-control" placeholder="Customer ID" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Vehical ID</label>
              <input type="text" name="Vehi_id" class="form-control" placeholder="Vehical ID" >
            </div>
			
			<div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Booking Date</label>
              <input type="text" name="book_date" class="form-control" placeholder="Booking Date" >
            </div>
			<div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Booking Time</label>
              <input type="text" name="booking_time" class="form-control" placeholder="Booking Time" >
            </div>
             <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group"><br>
              <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
		</div>
	</div>
	
	
	<?php
	include_once('footer.php');
	
	?>