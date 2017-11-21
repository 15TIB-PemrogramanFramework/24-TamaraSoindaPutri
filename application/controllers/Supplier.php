<?php 
/**
* 
*/
class Supplier extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_model'); 
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		$data['supplier'] = $this->Supplier_model->ambil_data();
		$this->load->view('Supplier/Supplier_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Supplier/tambah_aksi'),
			'nama_toko' 		=> set_value('nama_toko'),
			'alamat_toko' 		=> set_value('alamat_toko'),
			'kota' 				=> set_value('kota'),
			'no_hp' 			=> set_value('no_hp'),
			'id_supplier' 		=> set_value('id_supplier'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Supplier/Supplier_form',$data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_toko' 		=> $this->input->post('nama_toko'),
			'alamat_toko' 		=> $this->input->post('alamat_toko'),
			'kota' 				=> $this->input->post('kota'),
			'no_hp' 			=> $this->input->post('no_hp')
			);
		$this->Supplier_model->tambah_data($data);
		redirect(site_url('Supplier'));
	}

	function delete($id)
	{
		$this->Supplier_model->hapus_data($id);
		redirect(site_url('Supplier'));
	}

	function update($id)
	{
		$supplier = $this->Supplier_model->ambil_data_id($id);
		$data = array(
			'aksi' 			=> site_url('Supplier/update_aksi'),
			'nama_toko' 	=> set_value('nama_toko',$supplier->nama_toko),
			'alamat_toko' 		=> set_value('alamat_toko',$supplier->alamat_toko),
			'kota' 			=> set_value('kota',$supplier->kota),
			'no_hp' 		=> set_value('no_hp',$supplier->no_hp),
			'id_supplier' 	=> set_value('id_supplier',$supplier->id_supplier),
			'button' 		=> 'Edit'
			);
		$this->load->view('Supplier/Supplier_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_toko' 	=> $this->input->post('nama_toko'),
			'alamat_toko' 		=> $this->input->post('alamat_toko'),
			'kota' 			=> $this->input->post('kota'),
			'no_hp' 		=> $this->input->post('no_hp')
			);	
		$id_supplier = $this->input->post('id_supplier');
		$this->Supplier_model->edit_data($id_supplier,$data);
		redirect(site_url('Supplier'));
	}

}

 ?>