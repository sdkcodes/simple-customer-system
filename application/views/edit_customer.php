<?php $this->load->view('head'); ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-2">	


				<form method="post">
					<?php echo validation_errors() ?>
					
					<label>Full Name:</label><br>
					<input type="text" name="name" placeholder="Full Name" value="<?php echo isset($customer->name) ? $customer->name: '' ?>" class="form-control"><br>

					<label>Email:</label><br>
					<input type="email" name="email" placeholder="Email@customer.com" value="<?php echo isset($customer->email) ? $customer->email : '' ?>" class="form-control"><br>

					<label>Phone:</label><br>
					<input type="number" name="phone" placeholder="2348012345678" value="<?php echo isset($customer->phone) ? $customer->phone : '' ?>" class="form-control"><br>

					<label>Street:</label><br>
					<input type="text" name="street" placeholder="Street Address" value="<?php echo isset($customer->street) ? $customer->street : '' ?>" class="form-control"><br>

					<label>City:</label><br>
					<input type="text" name="city" placeholder="City" value="<?php echo isset($customer->city) ? $customer->city : '' ?>" class="form-control"><br>

					<label>State:</label><br>
					<input type="text" name="state" placeholder="State" value="<?php echo isset($customer->state) ? $customer->state : '' ?>" class="form-control"><br>

					<label>Country:</label><br>
					<input type="text" name="country" placeholder="Country" value="<?php echo isset($customer->country) ? $customer->country : '' ?>" class="form-control"><br>

					<select name="type" class="form-control">
						<option value="">Select Customer Type</option>
						<option value="Diamond">Diamond</option>
						<option value="Gold">Gold</option>
						<option value="silver">Silver</option>
						<option value="Bronze">Bronze</option>
					</select>
					<br><br>
					<button type="submit" class="btn btn-warning">Add Customer</button>
				</form>
			</div>
		</div>
	</div>


</body>
</html>