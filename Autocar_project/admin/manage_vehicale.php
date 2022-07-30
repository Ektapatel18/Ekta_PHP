<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Vehicale</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Vehicale</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Vehicale Id</th>
						<th>Cli_id</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Image</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
						foreach($manage_vehicale_arr as $v)
						
						{
					?>
					  <tr>
						<td><?php echo $v->vehi_id;?></td>
						<td><?php echo $v->cli_id;?></td>
						<td><?php echo $v->name;?></td>
						<td><?php echo $v->des;?></td>
						<td><?php echo $v->price;?></td>
						<td><?php echo $v->img;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
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
