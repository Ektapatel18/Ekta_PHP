<?php
include_once('header.php');
?>
 
 <script>
	function validate()
	{
		var Pay_id=document.forms["paymentform"]["Pay_id"].value;
		if(Pay_id=="" || Pay_id==null)
		{
			alert("Please fill out Payment ID");
			return false;
		}
		var cust_id=document.forms["paymentform"]["cust_id"].value;
		if(cust_id=="" || cust_id==null)
		{
			alert("Please fill out customer ID");
			return false;
		}
		var book_id=document.forms["paymentform"]["book_id"].value;
		if(book_id=="" || book_id==null)
		{
			alert("Please fill out Booking ID");
			return false;
		}
		var pay_type=document.forms["paymentform"]["pay_type"].value;
		if(pay_type=="" || pay_type==null)
		{
			alert("Please fill out Payment type");
			return false;
		}
		
	}
 
 </script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Payment</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="paymentform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="Pay_id" value="<?php echo $fetch->Pay_id;?>" placeholder="Id" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="id" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Booking ID</label>
              <input type="text" name="book_id" value="<?php echo $fetch->book_id;?>" placeholder="Email ID" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Payment Type</label>
              <input type="text" name="pay_type" value="<?php echo $fetch->pay_type;?>" placeholder="Mobile Number" >
            </div>
			
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
