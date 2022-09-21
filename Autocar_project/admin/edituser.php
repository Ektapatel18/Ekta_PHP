<?php
include_once('header.php');
?>
 
<script>

function validate()
{
	var name=document.forms["userform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out Firstname");
		return false;
	}
	var alpha=/^[A-Za-z]+$/;
	if(!alpha.test(name))
	{
		alert("Please Fill out Alpha characters");
		return false();
	}

	var addres=document.forms["userform"]["addres"].value;
	if(addres=="" || addres==null)
	{
		alert("Please fill out Address");
		return false;
	}
	
	var contact_no=document.forms["userform"]["contact_no"].value;
	if(contact_no=="" || contact_no==null)
	{
		alert("Please fill out Contact Number");
		return false;
	}
	var phone=/^[0-9]{10,11}$/;
	if(!phone.test(contact_no))
	{
		alert("Please fill proper phone number");
		return false;
	}
	
	var email_id=document.forms["userform"]["email_id"].value;
	if(email_id=="" || email_id==null)
	{
		alert("Please fill out Email");
		return false;
	}
	var mail=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
	if(!mail.test(email_id))
	{
		alert("Please fill out Proper Email Id");
		return false;
	}
	
	var user_name=document.forms["userform"]["user_name"].value;
	if(user_name=="" || user_name==null)
	{
		alert("Please fill out User Name");
		return false;
	}
	
	var pass=document.forms["userform"]["pass"].value;
	if(pass=="" || pass==null)
	{
		alert("Please fill out User Password");
		return false;
	}
	
}

</script>


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
  	    
        <form name="userform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Firstname">
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Firstname">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			 <div class="col-md-12 form-group1">
              <label class="control-label">Address</label>
			  <textarea class="form-control" name="addres" placeholder="Address" ><?php echo $fetch->addres;?></textarea>
            </div>
			
            <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Contact Number</label>
			<input type="text" name="contact_no" value="<?php echo $fetch->contact_no;?>" placeholder="contact no">
			</div>
			 <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" name="email_id" value="<?php echo $fetch->email_id;?>" placeholder="Email" >
            </div>
            
			<div class="clearfix"> </div>
		
			<div class="col-md-12 form-group1">
              <label class="control-label">User Name</label>
              <input type="text" name="user_name" value="<?php echo $fetch->user_name;?>" placeholder="User Name" >
            </div>
			
			<div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" name="pass" value="<?php echo $fetch->pass;?>" placeholder="Create a password" >
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Adharcard No</label>
              <input type="text" name="adharcard_no" value="<?php echo $fetch->adharcard_no;?>" placeholder="Adharcard No" >
            </div>
			
             <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Driving Licence</label>
              <input type="text" name="driving_licence" value="<?php echo $fetch->driving_licence;?>" placeholder="Driving Licence" >
            </div>
			
             <div class="clearfix"> </div>
            
			<div class="vali-form">
             <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
              <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
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
