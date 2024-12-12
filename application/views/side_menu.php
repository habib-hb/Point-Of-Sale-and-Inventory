<div class="col-sm-2" id="side-menu">
	<div>
		<ul class="list-side-menu">
			<?php
				$location = $this->uri->segment(1); 
			?>
			<?php if ($this->session->userdata('account_type') === 'Admin' || $this->session->userdata('account_type') === 'Accountant'): ?>

	<a  style="color: black;" class=" <?php if ($location === 'dashboard') {echo 'active-text';}?>" href="<?php echo base_url("dashboard") ?>" style="text-decoration:none;">
    <li class="list-side-group-item   <?php if ($location === 'dashboard') {echo 'active-link';}?>">
        
            <span class="glyphicon glyphicon-dashboard"></span><br>Dashboard
       
    </li>
	</a>
<?php endif; ?>

		<?php if ($this->session->userdata('account_type') !== 'Accountant'): ?>		
		<a  style="color: black;" class="<?php if ($location === 'inventory') {echo 'active-text';}?>" href="<?php echo base_url("inventory") ?>" style="text-decoration:none;">
			<li class="list-side-group-item <?php if ($location === 'inventory' || $location === 'item') {echo 'active-link';}?> ">

				
				<span class="glyphicon glyphicon-folder-close"></span><br>Inventory
			</li>
			</a>
			<?php endif; ?>

			<?php if ($this->session->userdata('account_type') !== 'Accountant'): ?>
			<a  style="color: black;" class="<?php if ($location === 'new_item') {echo 'active-link';}?>" href="<?php echo base_url("new_item") ?>" style="text-decoration:none;">
			<li class="list-side-group-item <?php if ($location === 'new_item') {echo 'active-link';}?> ">
				<i class="fa fa-plus fa-big" aria-hidden="true"></i><br>Add Item
			</li>
			</a>
			<?php endif; ?>

			
			<a  style="color: black;" class="<?php if ($location === 'daily_sales_report') {echo 'active-link';}?>" href="<?php echo base_url("daily_sales_report") ?>" style="text-decoration:none;">
			<li class="list-side-group-item <?php if ($location === 'daily_sales_report' || $location === 'weekly_sales_report' || $location === 'monthly_sales_report' || $location === 'yearly_sales_report') {echo 'active-link';}?>">
				<span class="glyphicon glyphicon glyphicon-calendar"></span><br>Sales Report
			</li>
			</a>
			

			<?php if ($this->session->userdata('account_type') !== 'Accountant'): ?>
			<a  style="color: black;" class="<?php if ($location === 'categories') {echo 'active-link';}?>" href="<?php echo base_url("categories") ?>" style="text-decoration:none;">
			<li class="list-side-group-item <?php if ($location === 'categories') {echo 'active-link';}?> "><span class="glyphicon glyphicon glyphicon-tags"></span><br>Categories</li>
			</a>
			<?php endif; ?>	

			<?php 
			if ($this->session->userdata('account_type') == 'Admin') {
				?>

		<a  style="color: black;" class="<?php if ($location === 'accounts') {echo 'active-link';}?>" href="<?php echo base_url("accounts") ?>" style="text-decoration:none;">
			<li class="list-side-group-item <?php if ($location === 'accounts') {echo 'active-link';}?> ">
				<span class="glyphicon glyphicon glyphicon-user"></span><br>User Management
			</li>
			</a>
			<?php
			}
			 ?>

		<a  style="color: black;" href="<?php echo base_url("logout/out") ?>" style="text-decoration:none;">
			<li id="log-out" class="list-side-group-item <?php if ($location === 'lagout') {echo 'active-link';}?> "><span class="glyphicon glyphicon glyphicon-log-out"></span><br>Logout</li>
			</a>

		</ul>
	</div>
</div>
