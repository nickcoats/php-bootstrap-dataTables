<?php
$pagetitle = "SMSgrupp Demo";

// include the class that does all of the DB functionality for the app
include_once('MyClass.php');

// call the object
$smsgrupp = new Example();

// include header
include('inc/header.php');
?>
		<section class="section_title">
			<h3 class="span10">SMSgrupp Demo - PHP with jQuery dataTables</h3>
		</section>
		
		<section class="section_add">
			<!-- Button trigger modal -->
			<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			  Add New Entry
			</button>
		</section>
		
		<!-- Modal that shows when Add New Entry button is clicked -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      	<div class="modal-header">
		      	  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		      	  <h4 class="modal-title" id="myModalLabel">Add New Table Entry</h4>
		      	</div>
		      	<div class="modal-body">
		      	
		      	<!-- This form displays in the modal and allows users to add a new entry -->
		        <form role="form" action="add-entry.php" method="post">
					<div class="form-group">
					  	<label for="name">Name</label>
					  	<input type="text" class="form-control" name="name" placeholder="Enter Name">
					</div>
					<div class="form-group">
					  	<label for="location">Location</label>
					  	<input type="text" class="form-control" name="location" placeholder="Enter Location">
					</div>
					<div class="form-group">
					  	<label for="age">Age</label>
					  	<input type="text" class="form-control" name="age" placeholder="Enter Age">
					</div>
					<div class="form-group">
						<label for="occupation">Occupation</label>
						<input type="text" class="form-control" name="occupation" placeholder="Enter Occupation">
					</div>
					<div class="form-group">
						<label for="account_status">Account Status</label>
						<select class="form-control" name="account_status">
							<option value="0">Active</option>
							<option value="1">Inactive</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				<form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<!-- display dataTable -->
		<section class="table_size">
		<table id="example" class="table table-striped table-bordered" cellspacing="0">
		  	<thead>
		  	  <tr>
		  	  	<th>ID</th>
		  	  	<th>Name</th>
		  	  	<th>Location</th>
		  	  	<th>Age</th>
		  	  	<th>Occupation</th>
		  	  </tr>
		  	</thead>
		  	<tbody>
		  		<!-- fetch dataTable data by calling the fetch_active_table_data() method
		  		      and loop through the data/create the rows -->
		  	    <?php foreach($smsgrupp->fetch_active_table_data() as $row) { ?> 
		  	  	<tr>
		  	  		<td><?php echo $row['id']; ?></td>
		  	  		<td><?php echo $row['name']; ?></td>
		  	  		<td><?php echo $row['location']; ?></td>
		  	  		<td><?php echo $row['age']; ?></td>
		  	  		<td><?php echo $row['occupation']; ?></td>
		  	  	</tr>
		  	    <?php } ?>
		  	    <!-- end foreach -->   
		  	</tbody>
		  </table>
		</section>
		
<!-- include footer -->		
<?php include('inc/footer.php'); ?>		