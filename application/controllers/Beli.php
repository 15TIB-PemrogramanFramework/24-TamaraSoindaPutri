<?php 
/**
* 
*/
class Beli extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Beli_model');
		$this->load->model('Customer_model');
		$this->load->model('Barang_model');
	}

	function index()
	{
		$data['beli'] = $this->Beli_model->ambil_data();
		$this->load->view('Beli/Beli_list',$data);
	}

	function tambah($id_barang)
	{
		$username = $this->session->userdata('username');
		$barang = $this->Barang_model->ambil_data_id($id_barang);
		$customer = $this->Customer_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('Beli/tambah_aksi'),
			'id_beli' 			=> set_value('id_beli'),
			'email' 		=> set_value('email',$customer->email),
			'id_barang'		 	=> set_value('id_barang',$barang->id_barang),
			'pilihan_warna' 			=> set_value('pilihan_warna'),
			'jumlah_beli' 			=> set_value('jumlah_beli'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Beli/Beli_form',$data);
	}
	function tambah_aksi()
	{

		$data = array(
			'id_beli' 			=> $this->input->post('id_beli'),
			'email' 		=> $this->input->post('email'),
			'id_barang' 		=> $this->input->post('id_barang'),
			'pilihan_warna'			=> $this->input->post('pilihan_warna'),
			'jumlah_beli' 			=> set_value('jumlah_beli')
			);
		$this->Beli_model->tambah_data($data);
		
		$id = $this->input->post('id_barang');
		$this->Barang_model->update_jumlah($this->input->post('jumlah_beli'), $id);

		 $this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('Home/ShopCust');
	}


	function delete($id)
	{
		$this->Beli_model->hapus_data($id);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('Home');
	}

	function update($id)
	{
		$beli = $this->Beli_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Beli/update_aksi'),
			'status' 			=> set_value('status',$beli->pilihan_warna),
			'id_beli' 			=> set_value('id_beli',$beli->id_beli),
			'button' 			=> 'Update'
			);
		$this->load->view('Beli/Beli_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'status' 		=> $this->input->post('status')
			);	
		$id_beli = $this->input->post('id_beli');
		$this->Beli_model->edit_data($id_beli,$data);
		$this->session->set_flashdata("beli", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('Home');
	}

}

 ?>