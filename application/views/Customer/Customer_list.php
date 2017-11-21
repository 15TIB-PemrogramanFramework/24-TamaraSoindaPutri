<?php $this->load->view('Templates/Header'); ?>
<br>
<br>
<center><h2>List Customer</h2></center>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Email</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>No HP</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($customer as $key => $value) { ?>
				<tr>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->nama_depan; ?></td>
					<td><?php echo $value->nama_belakang; ?></td>
					<td><?php echo $value->no_hp; ?></td>
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