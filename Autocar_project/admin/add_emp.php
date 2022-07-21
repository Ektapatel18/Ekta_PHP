<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Validation</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" placeholder="Firstname" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			 <div class="col-md-12 form-group1">
              <label class="control-label">Address</label>
			  <textarea class="form-control" placeholder="Address" required=""></textarea>
            </div>
            <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Contact Number</label>
			<input type="text" placeholder="contact no" required="">
			</div>
			 <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" required="">
            </div>
            
			<div class="clearfix"> </div>
		
			<div class="col-md-12 form-group1">
              <label class="control-label">User Name</label>
              <input type="text" placeholder="User Name" required="">
            </div>
			
			<div class="clearfix"> </div>
			
			<div class="vali-form">
			<div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" placeholder="Create a password" required="">
            </div>
			
			<div class="col-md-6 form-group1">
			 <label class="control-label">Repeated a password</label>
              <input type="password" placeholder="Repeated a password" required="">
            </div>
			</div>
             <div class="clearfix"> </div>
            
			<div class="vali-form">
             <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
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
