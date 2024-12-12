<div class="col-sm-10" id="main">
	<div id="content">
	<?php
	$total = 0;
	?>
	<?php echo form_fieldset('<h2 class="text-dark">Sales Report</h2>'); ?>
		<nav>
			<ul id="sales-nav">
				
				<a  style="text-decoration: none;" href="<?php echo base_url('daily_sales_report') ?>">
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				Today's Sales</li>
				</a>

				<a  style="text-decoration: none;" href="<?php echo base_url('weekly_sales_report') ?>">
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				This Week</li>
				</a>

				<a style="text-decoration: none;" href="<?php echo base_url('monthly_sales_report') ?>">
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				Monthly Sales</li>
				</a>

				<a style="text-decoration: none;" href="<?php echo base_url('yearly_sales_report') ?>">
				<li>
				<i class="fa fa-calendar" aria-hidden="true"></i>
				Annual Sales</li>
				</a>

			</ul>
		</nav>
		<br><br>
		<?php echo form_fieldset("<h2 class='text-dark'>$title</h2>"); ?>
		<table class="table table-condensed table-striped table-bordered" id="item_tbl">
<tr>
	<th>Date</th>
	<th>Item</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Discount</th>
	<th>Sub Total</th>
</tr>
	<?php foreach ($reports as $report) :?>
		<tr>
			<td><?php echo $report->date ?></td>
			<td><?php echo $report->item_name ?></td>
			<td><?php echo $report->item_price ?></td>
			<td><?php echo $report->quantity ?></td>
			<td><?php echo $report->discount ?></td>
			<td><?php echo $report->sub_total ?></td>
		</tr>
		<?php 

		$total = $total + $report->sub_total;
		
		?>
	<?php endforeach ?>
</table>
<p style="border-top: 0.5px silver solid; padding-top: 5px;">
<label class="lead">Total Sales: 
<?php
	if($total > 0) {
		echo '$'.$total;
	}
?>	
</label>
</p>
	</div>
</div>
