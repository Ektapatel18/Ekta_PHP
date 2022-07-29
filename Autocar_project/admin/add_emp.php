<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="" method="post" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" name="name" placeholder="Firstname" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			 <div class="col-md-12 form-group1">
              <label class="control-label">Address</label>
			  <textarea class="form-control" name="addres" placeholder="Address" required=""></textarea>
            </div>
            <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Contact Number</label>
			<input type="text" name="contact_no" placeholder="contact no" required="">
			</div>
			 <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" name="email_id" placeholder="Email" required="">
            </div>
            
			<div class="clearfix"> </div>
		
			<div class="col-md-12 form-group1">
              <label class="control-label">User Name</label>
              <input type="text" name="user_name" placeholder="User Name" required="">
            </div>
			
			<div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" name="pass" placeholder="Create a password" required="">
            </div>
			
             <div class="clearfix"> </div>
            
			<div class="vali-form">
             <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
