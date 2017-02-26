<?php $this->load->view('head'); ?>
<style>
	.jumbotron{
		background-color:pink;
	}
</style>
<body>
<div class="jumbotron"><h2>Welcome To Our Information System Software</h2></div>

	<a href="<?php echo site_url() ?>" class="btn btn-default">Home</a>
	<a href="<?php echo site_url('admin/addcustomer') ?>" class="btn btn-default">Add Customer</a>
	<a href="<?php echo site_url('admin/viewcustomers') ?>" class="btn btn-default">View Customers</a>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-2">
				<form method="post">
					<h3>Add A New Customer</h3>
					<?php echo validation_errors() ?>
					<label>Full Name:</label><br>
					<input type="text" name="name" placeholder="Full Name" class="form-control"><br>

					<label>Email:</label><br>
					<input type="email" name="email" placeholder="Email@customer.com" class="form-control"><br>

					<label>Phone:</label><br>
					<input type="number" name="phone" placeholder="2348012345678" class="form-control"><br>

					<label>Street:</label><br>
					<input type="text" name="street" placeholder="Street Address" class="form-control"><br>

					<label>City:</label><br>
					<input type="text" name="city" placeholder="City" class="form-control"><br>

					<label>State:</label><br>
					<input type="text" name="state" placeholder="State" class="form-control"><br>

					<label>Country:</label><br>
					<input type="text" name="country" placeholder="Country" class="form-control"><br>

					<select name="type" class="form-control">
						<option value="">Select Customer Type</option>
						<option value="Diamond">Diamond</option>
						<option value="Gold">Gold</option>
						<option value="silver">Silver</option>
						<option value="Bronze">Bronze</option>
					</select>
					<br><br>
					<button type="submit" class="btn btn-success">Add Customer</button>
				</form>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>