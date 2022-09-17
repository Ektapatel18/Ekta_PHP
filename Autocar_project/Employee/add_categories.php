<?php
include_once('header.php');
?>
 
 <script>
 function validate()
 {
	 var cate_name=document.forms["cateform"]["cate_name"].value;
	 if(cate_name=="" || cate_name==null)
	 {
		 alert("Please fill out Name");
		 return false;
	 }
	 var cate_desc=document.forms["cateform"]["cate_desc"].value;
	 if(cate_desc=="" || cate_desc==null)
	 {
		 alert("Please fill out Description");
		 return false;
	 }
	var cate_img=document.forms["cateform"]["cate_img"].value;
	if(cate_img=="" || cate_img==null)
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
				<span>Add Categories</span>
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
              <label class="control-label">Categories Name</label>
              <input type="text" name="cate_name" placeholder="name" >
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Categories Desc</label>
              <textarea class="form-control" name="cate_desc" placeholder="cate_desc" ></textarea><br>
            </div>
			
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Categories Image</label>
              <input type="file" name="cate_img" ><br>
            </div>
			<div class="clearfix"> </div>
			
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
