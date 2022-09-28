<?php
include_once ('header.php');
?>
<script>
	function validate()
	{
		
		var name=document.forms["vehicaleform"]["name"].value;
		if(name=="" || name==null)
		{
			alert("Please fill out Name");
			return false;
		}
		var des=document.forms["vehicaleform"]["des"].value;
		if(des=="" || des==null)
		{
			alert("Please fill out Description");
			return false;
		}
		var mileage=document.forms["vehicaleform"]["mileage"].value;
		if(mileage=="" || mileage==null)
		{
			alert("Please fill out mileage");
			return false;
		}
		var price=document.forms["vehicaleform"]["price"].value;
		if(price=="" || price==null)
		{
			alert("Please fill out Price");
			return false;
		}
		var img=document.forms["vehicaleform"]["img"].value;
		if(img=="" || img==null)
		{
			alert("Please fill out Image");
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
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">Categories</a></li>
						<li><a href="booking">Booking</a></li>
						<li><a href="vehicales">Available Vehicales</a></li>
						<li class="active"><a href="vehicaleform">Vehicales Form</a></li>						
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
	<div class="gallery">
		<div class="container">
			<div class="gallery-top gal_heading">
				<h2>Vehicales Form</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">Vehicales</li>
				</ol>
			</div>
			<div class="gallery-bottom">
			
		<form name="vehicaleform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			
            <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Car Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name" >
            </div>
			
			<div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Description</label>
              <input type="text" class="form-control" name="des" placeholder="Description" >
            </div>
			
			<div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Mileage</label>
              <input type="text" class="form-control" name="mileage" placeholder="Mileage" >
            </div>
			
			<div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Price</label>
              <input type="text" class="form-control" name="price" placeholder="Price" >
            </div>
			
			<div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Image</label>
              <input type="file" class="form-control" name="img" placeholder="Image" >
			  
            </div>
			
            <div class="col-md-12 form-group"><br>
              <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
			<div class="clearfix"> </div>
				
			</div>
		</div>
	</div>
	<br><br>
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
