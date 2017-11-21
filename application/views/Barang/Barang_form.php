<?php $this->load->view('Templates/Header'); ?>
<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<label>Nama barang: </label>
		<input type="text" name="nama_barang" class="form-control" placeholder="Inputkan Nama" 
		required value="<?php echo $nama_barang; ?>">
	</div>
	<div class="form-group">
		<label>warna: </label>
		<input type="text" name="warna" class="form-control" placeholder="Inputkan Warna" 
		required value="<?php echo $warna; ?>">
	</div>
	<div class="form-group">
		<label>Stok: </label>
		<input type="text" name="stok" class="form-control" placeholder="Inputkan Stok" 
		required value="<?php echo $stok; ?>">
	</div>
	<div class="form-group">
		<label>Harga : </label>
		<input type="text" name="harga" class="form-control" placeholder="Inputkan Harga" 
		required value="<?php echo $harga; ?>">
	</div>
	<div class="form-group">
		<label>Gambar: </label>
		<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar">
	</div>
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>

<?php $this->load->view('Templates/Footer'); ?>