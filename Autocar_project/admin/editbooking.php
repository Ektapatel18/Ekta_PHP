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
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="bookingform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="book_id" value="<?php echo $fetch->book_id;?>" placeholder="Firstname" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Firstname" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Vehical ID</label>
              <input type="text" name="Vehi_id" value="<?php echo $fetch->Vehi_id;?>" placeholder="Email ID" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Booking Date</label>
              <input type="text" name="book_date" value="<?php echo $fetch->book_date;?>" placeholder="Mobile Number" >
            </div>
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Booking Time</label>
              <input type="text" name="booking_time" value="<?php echo $fetch->booking_time;?>" placeholder="Mobile Number" >
            </div>
             <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
