<?php 
/**
* 
*/
class Customer_model extends CI_Model
{
	public $customer	= 'customer';
	public $email		= 'email';
	public $order		= 'ASC';
	

	function __construct()
	{
		parent::__construct();
	}

	function cek_login_cust($username,$password)
	{
		$this->db->where('email',$username);
		$this->db->where('pass_cust',$password);
		return $this->db->get($this->customer)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->email,$this->order);
		return $this->db->get($this->customer)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->customer,$data);
	}

	function hapus_data($email)
	{
		$this->db->where($this->email,$email);
		return $this->db->delete($this->customer);
	}

	function edit_data($email,$data)
	{
		$this->db->where($this->email,$email);
		return $this->db->update($this->customer,$data);
	}

	function ambil_data_email($email)
	{
		$this->db->where($this->email,$email);
		return $this->db->get($this->customer)->row();
	}

	function ambil_data_user($username)
	{
		$this->db->where('email',$username);
		return $this->db->get($this->customer)->row();
	}

	
}
 ?>