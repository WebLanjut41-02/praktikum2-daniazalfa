<?php

class tambah extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['penghuni'] = $this->m_data->tampil_data()->result();
		$this->load->view('tambahpenghuni',$data);
	}

	function tambahdata(){
		$this->load->view('tambahpenghuni');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');
		$noktp = $this->input->post('noktp');
 
		$data = array(
			'nama' => $nama,
			'unit' => $unit,
			'noktp' => $noktp
			);
		$this->m_data->input_data($data,'penghuni')
		redirect('tambah/index');
	}
 
}


?>
