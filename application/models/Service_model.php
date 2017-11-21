<?php 
/**
* 
*/
class Service_model extends CI_Model

{
	public $Ascen ='ASCEN';
	public $service		= 'service';
	public $id			= 'id_service';
	public $email  		= 'email';
	public $order		= 'ASC';

	public $tablecs ="cs";
	public $id_cs = "id_cs";


	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('service.id_service, customer.email, cs.id_cs, service.area_cust');
        $this->db->from('service');
        $this->db->join('customer', 'service.email = customer.email');
        $this->db->join('cs', 'service.id_cs = cs.id_cs');
		$query = $this->db->get();
		return $query->result();
	}

	function ambil_data1(){
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->service)->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->service,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->service)->row();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->service);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->service,$data);
	}
	function ambil_data_service($email){
		$this->db->where($this->email,$email);
		return $this->db->get($this->service)->result();
	}

	function selectcs(){

		$this->db->order_by($this->id_cs, $this->Ascen);
		return $this->db->get($this->tablecs)->result();
	}
	
	
}
 ?> m8