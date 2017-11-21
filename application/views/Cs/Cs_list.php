<?php $this->load->view('Templates/Header'); ?>

<center><h2>List Customer Service</h2></center>

<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Cs/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID CS</th>
				<th>Nama CS</th>
				<th>Area</th>
				<th>No Telp</th>
				<th>Line</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cs as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_cs; ?></td>
					<td><?php echo $value->nama_cs; ?></td>
					<td><?php echo $value->area; ?></td>
					<td><?php echo $value->telp; ?></td>
					<td><?php echo $value->line; ?></td>
					<td>
						<a href="<?php echo site_url('Cs/delete/'.$value->id_cs); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('Cs/update/'.$value->id_cs); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
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