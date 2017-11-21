<?php $this->load->view('Templates/Header'); ?>

<center><h2>List Supplier</h2></center>

<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Supplier/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID supplier</th>
				<th>Nama supplier</th>
				<th>Alamat Supplier</th>
				<th>Kota</th>
				<th>No Hp</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($supplier as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_supplier; ?></td>
					<td><?php echo $value->nama_toko; ?></td>
					<td><?php echo $value->alamat_toko; ?></td>
					<td><?php echo $value->kota; ?></td>
					<td><?php echo $value->no_hp; ?></td>
					<td>
						<a href="<?php echo site_url('Supplier/delete/'.$value->id_supplier); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('Supplier/update/'.$value->id_supplier); ?>"
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