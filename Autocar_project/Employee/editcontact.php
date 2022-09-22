<?php
include_once('header.php');
?>
 
 <script>
	function validate()
	{
		var name=document.forms["contactform"]["name"].value;
		if(name=="" || name==null)
		{
			alert("Please fill out Firstname");
			return false;
		}
		var contact_no=document.forms["contactform"]["contact_no"].value;
		if(contact_no=="" || contact_no==null)
		{
			alert("Please fill out contact Number");
			return false;
		}
		var email_id=document.forms["contactform"]["email_id"].value;
		if(email_id=="" || email_id==null)
		{
			alert("Please fill out contact Email");
			return false;
		}
		var message=document.forms["contactform"]["message"].value;
		if(message=="" || message==null)
		{
			alert("Please fill out message");
			return false;
		}
		
	}
 
 </script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Client</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="contactform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="cont_id" value="<?php echo $fetch->cont_id;?>" placeholder="Firstname" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Firstname" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email ID</label>
              <input type="text" name="email_id" value="<?php echo $fetch->email_id;?>" placeholder="Email ID" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Contact No</label>
              <input type="text" name="contact_no" value="<?php echo $fetch->contact_no;?>" placeholder="Mobile Number" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Message</label>
              <textarea class="form-control" name="message" placeholder="Message" ><?php echo $fetch->message;?></textarea>
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
