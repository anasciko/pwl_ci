<?php

class Ahad extends CI_Controller
{
	function index()
	{
		$data = array('judul' => 'Welcome');
		$this->load->view('tabel_v', $data);
	}
}

#usahakan file php di controler dan model huruf kapital
#scrip tidak boleh di beri tutup akhir php