<?php $this->load->view('Templates/Header'); ?>

<center><h2>List Penjualan</h2></center>

<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Beli</th>
				<th>Email</th>
				<th>ID Barang</th>
				<th>Piihan Warna</th>
				<th>Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($beli as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_beli; ?></td>
					<td><?php echo $value->email; ?></td>
					<td><?php echo $value->id_barang; ?></td>
					<td><?php echo $value->pilihan_warna; ?></td>
					<td><?php echo $value->jumlah_beli; ?></td>
					
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