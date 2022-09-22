<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Contact</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Contact</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Contact Id</th>
						<th>Name</th>
						<th>Email_id</th>
						<th>Contact_no</th>
						<th>Message</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
						foreach($manage_contact_arr as $c)
						{
					
					?>
					  <tr>
						<td><?php echo $c->cont_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->email_id;?></td>
						<td><?php echo $c->contact_no;?></td>
						<td><?php echo $c->message;?></td>
						<td><a href="editcontact?edit_cont_id=<?php echo $c->cont_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cont_id=<?php echo $c->cont_id;?>" class="btn btn-danger">Delete</a></td>
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
	<?ph
include_once('footer.php');
?>
