<?php $this->load->view('head'); ?>
<style>
	.jumbotron{
		background-color:pink;
	}
</style>
<body>
<div class="jumbotron"><h2>Welcome To Our Information System Software</h2></div>
<h3>Manage your customers data with ease</h3>
<?php if (!is_null($this->session->flashdata('message'))): ?>
	
	<div class="alert alert-<?php echo $this->session->flashdata('alert-type') ?>">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<?php echo $this->session->flashdata('message') ?>
	</div>
<?php endif; ?>
<a href="<?php echo site_url('admin/addcustomer') ?>" class="btn btn-primary">Add New Customer</a>
<a href="<?php echo site_url('admin/viewcustomers') ?>" class="btn btn-primary">View Customers</a> 


