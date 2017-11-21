<?php 
/**
* 
*/
class Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->helper('url');
	}
//halaman customer
	function index()
	{
		//print_r($this->Customer_model->ambil_data());
		$data['customer'] = $this->Customer_model->ambil_data();
		$this->load->view('Customer/Customer_list',$data);
	}

	function dataCust(){
	$data['customer'] = $this->Customer_model->ambil_data_user();
	$this->load->view('Customer/akunInfo',$data);
	}


	function daftar_aksi()
	{
		$data = array(
			'email' 				=> $this->input->post('email'),
			'pass_cust'		 		=> $this->input->post('pass_cust'),
			'nama_depan' 			=> $this->input->post('nama_depan'),
			'nama_belakang' 		=> $this->input->post('nama_belakang'),
			'no_hp' 				=> $this->input->post('no_hp')
			);
		$this->Customer_model->tambah_data($data);
		redirect('Login');
	}


	/* ADMIN */

	function delete($id)
	{
		$this->Customer_model->hapus_data($id);
		redirect(site_url('Home'));//member/datamember
	}
	function data_customer() //ambil data (menampilkan data customer ke admin)
	{
		//print_r($this->Customer_model->ambil_data());
		$data['customer'] = $this->Customer_model->ambil_data();
		$this->load->view('Admin/Customer_list',$data);
	}
	function update($id)
	{
		$customer = $this->Customer_model->ambil_data_email($id);
		$data = array(
			'aksi' 				=> site_url('Customer/update_aksi'),
			'email' 			=> set_value('email',$customer->email),
			'pass_cust' 		=> set_value('pass_cust',$customer->pass_cust),
			'nama_depan'		=> set_value('nama_depan',$customer->nama_depan),
			'nama_belakang' 	=> set_value('nama_belakang',$customer->nama_belakang),
			'no_hp' 			=> set_value('no_hp',$customer->no_hp),
			'button' 			=> 'Update'
			);
		$this->load->view('Customer/Customer_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'email' 			=> $this->input->post('email'),
			'pass_cust'		 	=> $this->input->post('pass_cust'),
			'nama_depan' 		=> $this->input->post('nama_depan'),
			'nama_belakang' 	=> $this->input->post('nama_belakang'),
			'no_hp' 			=> $this->input->post('no_hp')
			);	
		$email = $this->input->post('email');
		$this->Customer_model->edit_data($email,$data);
		redirect('Customer/Customer_info');
	}

}

?>