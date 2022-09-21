<?php
include_once('header.php');
?>
 
 <script>
	function validate()
	{
		var name=document.forms["clientform"]["name"].value;
		if(name=="" || name==null)
		{
			alert("Please fill out Firstname");
			return false;
		}
		var addres=document.forms["clientform"]["addres"].value;
		if(addres=="" || addres==null)
		{
			alert("Please fill out Address");
			return false;
		}
		var contact_no=document.forms["clientform"]["contact_no"].value;
		if(contact_no=="" || contact_no==null)
		{
			alert("Please fill out contact Number");
			return false;
		}
		var email_id=document.forms["clientform"]["email_id"].value;
		if(email_id=="" || email_id==null)
		{
			alert("Please fill out contact Email");
			return false;
		}
		var user_name=document.forms["clientform"]["user_name"].value;
		if(user_name=="" || user_name==null)
		{
			alert("Please fill out contact User Name");
			return false;
		}
		var pass=document.forms["clientform"]["pass"].value;
		if(pass=="" || pass==null)
		{
			alert("Please fill out contact User Password");
			return false;
		}
		var Adharcard_no=document.forms["clientform"]["Adharcard_no"].value;
		if(Adharcard_no=="" || Adharcard_no==null)
		{
			alert("Please fill out contact User Adharcard");
			return false;
		}
		var driving_licence=document.forms["clientform"]["driving_licence"].value;
		if(driving_licence=="" || driving_licence==null)
		{
			alert("Please fill out contact User Driving Licence");
			return false;
		}
		var PUC=document.forms["clientform"]["PUC"].value;
		if(PUC=="" || PUC==null)
		{
			alert("Please fill out contact User PUC");
			return false;
		}
		var Insurance_policy=document.forms["clientform"]["Insurance_policy"].value;
		if(Insurance_policy=="" || Insurance_policy==null)
		{
			alert("Please fill out contact User Insurance ");
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
  	    
        <form name="clientform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="cli_id" value="<?php echo $fetch->cli_id;?>" placeholder="Firstname" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Firstname" >
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Address</label>
              <textarea class="form-control" name="addres"  placeholder="Address" ><?php echo $fetch->addres;?></textarea>
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Contact No</label>
              <input type="text" name="contact_no" value="<?php echo $fetch->contact_no;?>" placeholder="Mobile Number" >
            </div>
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email ID</label>
              <input type="text" name="email_id" value="<?php echo $fetch->email_id;?>" placeholder="Email ID" >
            </div>
             <div class="clearfix"> </div>
			 
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">User Name</label>
              <input type="text" name="user_name" value="<?php echo $fetch->user_name;?>" placeholder="User Name" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" name="pass" value="<?php echo $fetch->pass?>" placeholder="Create a password" >
            </div>
             
             <div class="clearfix"> </div>
          
             
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Adharcard No</label>
              <input type="text" name="Adharcard_no" value="<?php echo $fetch->Adharcard_no;?>" placeholder="Adharcard No" >
            </div>
			
             <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Driving Licence</label>
              <input type="text" name="driving_licence" value="<?php echo $fetch->driving_licence;?>" placeholder="Driving Licence" >
            </div>
			
			<div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">PUC</label>
              <input type="text" name="PUC" value="<?php echo $fetch->PUC;?>" placeholder="PUC" >
            </div>
			
			<div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Insurance Policy</label>
              <input type="text" name="Insurance_policy" value="<?php echo $fetch->Insurance_policy;?>" placeholder="Insurance Policy" >
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
