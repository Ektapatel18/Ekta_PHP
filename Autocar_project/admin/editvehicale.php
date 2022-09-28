<?php
include_once('header.php');
?>
 
 <script>
	function validate()
	{
		var vehi_id=document.forms["vehicaleform"]["vehi_id"].value;
		if(vehi_id=="" || vehi_id==null)
		{
			alert("Please fill out Vehical ID");
			return false;
		}
		var cli_id=document.forms["vehicaleform"]["cli_id"].value;
		if(cli_id=="" || cli_id==null)
		{
			alert("Please fill out Client ID");
			return false;
		}
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
  	    
        <form name="vehicaleform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="vehi_id" value="<?php echo $fetch->vehi_id;?>" placeholder="Id" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Client ID</label>
              <input type="text" name="cli_id" value="<?php echo $fetch->cli_id;?>" placeholder="id" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Email ID" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Description</label>
              <input type="text" name="des" value="<?php echo $fetch->des;?>" placeholder="Mobile Number" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Mileage</label>
              <input type="text" name="mileage" value="<?php echo $fetch->mileage;?>" placeholder="Mileage" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Price</label>
              <input type="text" name="price" value="<?php echo $fetch->price;?>" placeholder="Price" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Image</label>
              <input type="file" name="img" value="<?php echo $fetch->img;?>" placeholder="Image" >
			  <img src="../website/img/vehi_img/<?php echo $fetch->img;?>" height="80" width="80">
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
