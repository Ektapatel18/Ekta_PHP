<?php
include_once('header.php');
?>
 
 
 
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
  	    
        <form name="feedbackform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="feedback_id" value="<?php echo $fetch->feedback_id;?>" placeholder="Firstname" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Firstname" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Comment</label>
              <input type="text" name="comme" value="<?php echo $fetch->comme;?>" placeholder="Email ID" >
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
