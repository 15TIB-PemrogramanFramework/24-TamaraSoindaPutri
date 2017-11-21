<?php $this->load->view('Templates/Header'); ?>

<center><h2>List Barang</h2></center>

<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Barang/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Barang</th>
				<th>Nama Barang</th>
				<th>Warna</th>
				<th>Stok</th>
				<th>Harga</th>
				<th style="width:200px">Gambar</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($barang as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_barang; ?></td>
					<td><?php echo $value->nama_barang; ?></td>
					<td><?php echo $value->warna; ?></td>
					<td><?php echo $value->stok; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/images/uploads/<?php echo $value->gambar; ?>"></td>
					<td>
						<a href="<?php echo site_url('Barang/delete/'.$value->id_barang); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('Barang/update/'.$value->id_barang); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
	</table>
</div>
<?php $this->load->view('Templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>