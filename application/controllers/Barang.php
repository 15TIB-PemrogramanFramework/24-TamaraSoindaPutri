<?php 
/**
* 
*/
class Barang extends CI_Controller
{

	//model : Barang_model
	//controller : Barang
	//view : Barang form, Baranglist
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model'); 
		$this->load->helper(array('url'));
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		$data['barang'] = $this->Barang_model->ambil_data();
		$this->load->view('Barang/Barang_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 			=> site_url('Barang/tambah_aksi'),
			'nama_barang' 	=> set_value('nama_barang'),
			'warna' 		=> set_value('warna'),
			'stok' 			=> set_value('stok'),
			'harga' 		=> set_value('harga'),
			'id_barang' 	=> set_value('id_barang'),
			'button' 		=> 'Insert'
			);
		$this->load->view('Barang/Barang_form',$data);
	}

	function tambah_aksi()
	{

		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/images/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar'			=>$gbr['file_name'],
                'nama_barang' 			=> $this->input->post('nama_barang'),
				'warna' 		=> $this->input->post('warna'),
				'stok' 		=> $this->input->post('stok'),
				'harga'	 		=> $this->input->post('harga')
				                  
                );
                $this->Barang_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('Barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Barang_form'); //jika gagal maka akan ditampilkan form upload
            }
        }
	}

	function delete($id)
	{
		$this->Barang_model->hapus_data($id);
		redirect(site_url('Barang'));
	}

	function update($id)
	{
		$barang = $this->Barang_model->ambil_data_id($id);
		$data = array(
			'aksi' 			=> site_url('Barang/update_aksi'),
			'nama_barang' 	=> set_value('nama_barang',$barang->nama_barang),
			'warna' 		=> set_value('warna',$barang->warna),
			'stok' 			=> set_value('stok',$barang->stok),
			'harga' 		=> set_value('harga',$barang->harga),
			'id_barang' 	=> set_value('id_Barang',$barang->id_barang),
			'button' 		=> 'Update'
			);
		$this->load->view('Barang/Barang_form',$data);		
	}

	function update_aksi()
	{
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/images/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
              
				'gambar'			=>$gbr['file_name'],
                'nama_barang' 			=> $this->input->post('nama_barang'),
				'warna' 		=> $this->input->post('warna'),
				'stok' 		=> $this->input->post('stok'),
				'harga'	 		=> $this->input->post('harga')
				                  
                );
                $id_barang=$this->input->post('id_barang');
                $this->Barang_model->edit_data($id_barang,$data); //akses model untuk menyimpan ke database


                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update data berhasil !!</div></div>");
                redirect('Barang'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('Barang_form','refresh'); //jika gagal maka akan ditampilkan form upload
            }
        }
		
	}

}

 ?>