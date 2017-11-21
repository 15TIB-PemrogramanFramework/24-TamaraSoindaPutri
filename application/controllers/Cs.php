<?php 
/**
* 
*/
class Cs extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cs_model'); 
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		$data['cs'] = $this->Cs_model->ambil_data();
		$this->load->view('Cs/Cs_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Cs/tambah_aksi'),
			'nama_cs' 		=> set_value('nama_cs'),
			'area' 		=> set_value('area'),
			'telp' 				=> set_value('telp'),
			'line' 			=> set_value('line'),
			'id_cs' 		=> set_value('id_cs'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Cs/Cs_form',$data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_cs' 		=> $this->input->post('nama_cs'),
			'area' 		=> $this->input->post('area'),
			'telp' 				=> $this->input->post('telp'),
			'line' 			=> $this->input->post('line')
			);
		$this->Cs_model->tambah_data($data);
		redirect(site_url('Cs'));
	}

	function delete($id)
	{
		$this->Cs_model->hapus_data($id);
		redirect(site_url('Cs'));
	}

	function update($id)
	{
		$cs = $this->Cs_model->ambil_data_id($id);
		$data = array(
			'aksi' 			=> site_url('Cs/update_aksi'),
			'nama_cs' 	=> set_value('nama_cs',$cs->nama_cs),
			'area' 		=> set_value('area',$cs->area),
			'telp' 			=> set_value('telp',$cs->telp),
			'line' 		=> set_value('line',$cs->line),
			'id_cs' 	=> set_value('id_cs',$cs->id_cs),
			'button' 		=> 'Edit'
			);
		$this->load->view('Cs/Cs_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_cs' 	=> $this->input->post('nama_cs'),
			'area' 		=> $this->input->post('area'),
			'telp' 			=> $this->input->post('telp'),
			'line' 		=> $this->input->post('line')
			);	
		$id_cs = $this->input->post('id_cs');
		$this->Cs_model->edit_data($id_cs,$data);
		redirect(site_url('Cs'));
	}

}

 ?>