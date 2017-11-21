<?php $this->load->view('Templates/Header'); ?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>Nama CS : </label>
		<input type="text" name="nama_cs" class="form-control" placeholder="Inputkan Nama" 
		required value="<?php echo $nama_cs; ?>">
	</div>
	<div class="form-group">
		<label>Area : </label>
		<input type="text" name="area" class="form-control" placeholder="Inputkan Area" 
		required value="<?php echo $area; ?>">
	</div>
	<div class="form-group">
		<label>Telp : </label>
		<input type="text" name="telp" class="form-control" placeholder="Inputkan No Telp" 
		required value="<?php echo $telp; ?>">
	</div>
	<div class="form-group">
		<label>Line : </label>
		<input type="text" name="line" class="form-control" placeholder="Inputkan Line" 
		required value="<?php echo $line; ?>">
	</div>
	<input type="hidden" name="id_cs" value="<?php echo $id_cs; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
<?php $this->load->view('Templates/Footer'); ?>