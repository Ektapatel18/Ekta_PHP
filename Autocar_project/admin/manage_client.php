<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Client</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	
			<div class="blank-page" style="overflow:auto">
				<div class="container mt-3">			
				  <h2>Manage Client</h2>
				
				<div>
				  <table class="table">
					<thead>
					  <tr>
						<th>Client Id</th>
						<th>Name</th>
						<th>Address</th>
						<th>Contact_no</th>
						<th>Email_id</th>
						<th>User_name</th>
						<th>Adharcard_no</th>
						<th>Driving_licence</th>
						<th>PUC</th>
						<th>Insurance_policy</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					     foreach($manage_client_arr as $c)
						{
					?>
					  <tr>
						<td><?php echo $c->cli_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->addres;?></td>
						<td><?php echo $c->contact_no;?></td>
						<td><?php echo $c->email_id;?></td>
						<td><?php echo $c->user_name;?></td>
						<td><?php echo $c->Adharcard_no;?></td>
						<td><?php echo $c->driving_licence;?></td>
						<td><?php echo $c->PUC;?></td>
						<td><?php echo $c->Insurance_policy;?></td>
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
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
