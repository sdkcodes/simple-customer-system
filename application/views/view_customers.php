<?php $this->load->view('head') ?>
<body>
	<div class="container-fluid">
	
	<h3>View Your Customers</h3>
	<a href="<?php echo site_url() ?>" class="btn btn-default">Home</a>
	<a href="<?php echo site_url('admin/addcustomer') ?>" class="btn btn-default">Add Customer</a>
	<a href="<?php echo site_url('admin/viewcustomers') ?>" class="btn btn-default">View Customers</a>
	
<?php if (!empty($customers)): ?>
	<?php if (!is_null($this->session->flashdata('message'))): ?>
		
		<div class="alert alert-<?php echo $this->session->flashdata('alert-type') ?>">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<?php echo $this->session->flashdata('message') ?>
		</div>
	<?php endif; ?>
	<?php $counter = 1; ?>
		<div>
			<form action=<?php echo site_url('admin/search') ?> method="get" class="form-inline">
				<input type="text" name="query" class="form-control" placeholder="Search">
				<button type=submit>Go</button>
			</form>
		</div>
		<table class="table table-striped">
			<thead>
				<th>S/N</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>Street</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
				<th>Customer Type</th>
			</thead>
	<?php foreach ($customers as $customer): ?>
		
			<tbody>
				<tr>
					<td><?php echo $counter;?> </td>
					<td><?php echo $customer->name ?></td>
					<td><?php echo $customer->phone; ?></td>
					<td><?php echo $customer->email; ?></td>
					<td><?php echo $customer->street; ?></td>
					<td><?php echo $customer->city; ?></td>
					<td><?php echo $customer->state; ?></td>
					<td><?php echo $customer->country; ?></td>
					<td><?php echo $customer->customerType; ?></td>
					<td><a href='<?php echo site_url("admin/editcustomer/$customer->id") ?>'>Edit</a></td>
					<td><a href='<?php echo site_url("admin/deletecustomer/$customer->id") ?>'>Delete</a></td>
				</tr>
				
			</tbody>
		
		
		<?php $counter++ ; ?>
		<?php endforeach; ?>
		</table>
<?php else: ?>
	There are no customers yet 
<?php endif; ?>
</div>
<?php $this->load->view('footer') ?>