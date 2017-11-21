<?php $this->load->view('Templates/Header'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>Nama Supplier : </label>
		<input type="text" name="nama_toko" class="form-control" placeholder="Inputkan Nama" 
		required value="<?php echo $nama_toko; ?>">
	</div>
	<div class="form-group">
		<label>Alamat Supplier : </label>
		<input type="text" name="alamat_toko" class="form-control" placeholder="Inputkan Alamat" 
		required value="<?php echo $alamat_toko; ?>">
	</div>
	<div class="form-group">
		<label>Kota : </label>
		<input type="text" name="kota" class="form-control" placeholder="Inputkan Kota" 
		required value="<?php echo $kota; ?>">
	</div>
	<div class="form-group">
		<label>No HP : </label>
		<input type="text" name="no_hp" class="form-control" placeholder="Inputkan No Hp" 
		required value="<?php echo $no_hp; ?>">
	</div>
	<input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('Templates/Footer'); ?>