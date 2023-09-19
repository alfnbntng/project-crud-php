<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$data['admin'] = $this->m_model->get_data('admin')->result();
		$data['siswa'] = $this->m_model->get_data('siswa')->result();
		$data['guru'] = $this->m_model->get_data('guru')->result();
		$this->load->view('home', $data);
	}
	
}