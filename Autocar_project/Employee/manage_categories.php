<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Categories</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Categories</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Categories Id</th>
						<th>Cate Name</th>
						<th>Cate Desc</th>
						<th>Cate Imge</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
						foreach($manage_categories_arr as $c)
						{
					?>
					  <tr>
						<td><?php echo $c->cat_id;?></td>
						<td><?php echo $c->cate_name;?></td>
						<td><?php echo $c->cate_desc;?></td>
						<td><img src="img/<?php echo $c->cate_img;?>" width="80px" height="80px"/></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cat_id=<?php echo $c->cat_id;?>" class="btn btn-danger">Delete</a></td>
					  </tr>
						<?php
						}
						?>

					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
