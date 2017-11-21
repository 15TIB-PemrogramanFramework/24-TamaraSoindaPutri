<?php 
/**
* 
*/
class Service extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Service_model');
		$this->load->model('Customer_model');
		$this->load->model('Cs_model');
	}

	function index()
	{
		$data['service'] = $this->Service_model->ambil_data1();
		$this->load->view('Service/Service_list',$data);
	}

	function tambah($id_cs)
	{
		$username = $this->session->userdata('username');
		$cs = $this->Cs_model->ambil_data_id($id_cs);
		$customer = $this->Customer_model->ambil_data_user($username);
		$data = array(
			'aksi' 				=> site_url('Service/tambah_aksi'),
			'id_service' 			=> set_value('id_service'),
			'email' 		=> set_value('email',$customer->email),
			'id_cs'		 	=> set_value('id_cs',$cs->id_cs),
			'service'		=> $this ->Service_model -> selectcs(),
			'area_cust' 			=> set_value('area_cust'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Service/Service_form',$data);
	}
	function tambah_aksi()
	{

		$data = array(
			'id_service' 	=> $this->input->post('id_service'),
			'email' 		=> $this->input->post('email'),
			'id_cs' 		=> $this->input->post('id_cs'),
			'area_cust'		=> $this->input->post('area_cust')
			);
		$this->Service_model->tambah_data($data);
		
		$id = $this->input->post('id_cs');
		

		 $this->session->set_flashdata("service", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect('Home/shopCust');
	}


	function delete($id)
	{
		$this->Service_model->hapus_data($id);
		$this->session->set_flashdata("service", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('Home');
	}

	function update($id)
	{
		$service = $this->Service_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Service/update_aksi'),
			'status' 			=> set_value('status',$service->area_cust),
			'id_service' 			=> set_value('id_service',$service->id_service),
			'button' 			=> 'Update'
			);
		$this->load->view('Service/Service_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'status' 		=> $this->input->post('status')
			);	
		$id_service = $this->input->post('id_service');
		$this->Service_model->edit_data($id_service,$data);
		$this->session->set_flashdata("service", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('Home');
	}

}

 ?>