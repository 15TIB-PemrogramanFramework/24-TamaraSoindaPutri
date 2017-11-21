<?php $this->load->view('Templates/Header'); ?>
<br>
<br>
<center><h2>List Service</h2></center>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Service</th>
				<th>Email</th>
				<th>ID CS</th>
				<th>Area Customer</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($service as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_service; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->id_cs; ?></td>
					<td><?php echo $value->area_cust; ?></td>
				</tr>
				<?php } ?>
			</tbody>
	</table>
</div>
<?php $this->load->view('Templates/Footer'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>