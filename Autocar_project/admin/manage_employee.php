<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="table-responsive container mt-3">
				  <h2>Manage Employee</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Employee Id</th>
						<th>Name</th>
						<th>Addres</th>
						<th>contact_no</th>
						<th>Email_id</th>
						<th>user_name</th>
						<th>Edit</th>
						<th>Status</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_employee_arr as $c)
					{
					?>
					  <tr>
						<td><?php echo $c->emp_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->addres;?></td>
						<td><?php echo $c->contact_no;?></td>
						<td><?php echo $c->email_id;?></td>
						<td><?php echo $c->user_name;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="status?status_emp_id=<?php echo $c->emp_id;?>" class="btn btn-primary"><?php echo $c->status;?></a></td>
						<td><a href="delete?del_emp_id=<?php echo $c->emp_id;?>" class="btn btn-danger">Delete</a></td>
					  </tr>
					<?php
					}
					?>
					
					</tbody>
				  </table>
				</div>
				
]
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
