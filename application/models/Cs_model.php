<?php 
/**
* 
*/
class Cs_model extends CI_Model
{
	public $cs			= 'cs';
	public $id			= 'id_cs';
	public $order		= 'ASC';
	

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->cs)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->cs,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->cs);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->cs,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->cs)->row();
	}

	
}
 ?>