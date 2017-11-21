<?php 
/**
* 
*/
class Beli_model extends CI_Model
{
	public $beli		= 'pembelian';
	public $id			= 'id_beli';
	public $email  		= 'email';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('pembelian.id_beli, customer.email, barang.id_barang, pembelian.pilihan_warna, pembelian.jumlah_beli');
        $this->db->from('pembelian');
        $this->db->join('customer', 'pembelian.email = customer.email');
        $this->db->join('barang', 'pembelian.id_barang = barang.id_barang');
		$query = $this->db->get();
		return $query->result();
	}

	function ambil_data_user()
	{
		$this->db->select('barang.nama_barang, pembelian.jumlah_beli');
        $this->db->from('pembelian');
        $this->db->join('customer', 'pembelian.email = customer.email');
        $this->db->join('barang', 'pembelian.id_barang = barang.id_barang');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->beli,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->beli)->row();
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->beli);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->beli,$data);
	}
	function ambil_data_beli($email){
		$this->db->where($this->email,$email);
		return $this->db->get($this->beli)->result();
	}
	
}
 ?>