<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Booking</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Booking Id</th>
						<th>Cust_id</th>
						<th>Vehicale_id</th>
						<th>Booking_date</th>
						<th>Booking_time</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php 
						foreach($manage_booking_arr as $b)
						{
					
					?>
					  <tr>
						<td><?php echo $b->book_id;?></td>
						<td><?php echo $b->cust_id;?></td>
						<td><?php echo $b->Vehi_id;?></td>
						<td><?php echo $b->book_date;?></td>
						<td><?php echo $b->booking_time;?></td>
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
