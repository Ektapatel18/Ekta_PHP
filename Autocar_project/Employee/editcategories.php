<?php
include_once('header.php');
?>
 
 <script>
	function validate()
	{
		var cate_id=document.forms["cateform"]["cate_id"].value;
		if(cate_id=="" || cate_id==null)
		{
			alert("Please fill out Categories ID");
			return false;
		}
		var cate_name=document.forms["cateform"]["cate_name"].value;
		if(cate_name=="" || cate_name==null)
		{
			alert("Please fill out Categories Name");
			return false;
		}
		var cate_desc=document.forms["cateform"]["cate_desc"].value;
		if(cate_desc=="" || cate_desc==null)
		{
			alert("Please fill out cate_desc");
			return false;
		}
		var cate_img=document.forms["cateform"]["cate_img"].value;
		if(cate_img=="" || cate_img==null)
		{
			alert("Please fill out cate_img");
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
  	    
        <form name="cateform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">ID</label>
              <input type="text" name="cat_id" value="<?php echo $fetch->cat_id;?>" placeholder="Id" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Cate Name</label>
              <input type="text" name="cate_name" value="<?php echo $fetch->cate_name;?>" placeholder="id" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Description</label>
              <input type="text" name="cate_desc" value="<?php echo $fetch->cate_desc;?>" placeholder="Email ID" >
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Image</label>
              <input type="file" name="cate_img" value="<?php echo $fetch->cate_img;?>" placeholder="Mobile Number" >
			  <img src="img/cate_img/<?php echo $fetch->cate_img;?>" height="80" width="80">
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
