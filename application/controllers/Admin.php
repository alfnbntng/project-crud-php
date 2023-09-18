<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
    class Admin extends CI_Controller { 
        function __construct(){
            parent::__construct();
            $this->load->model('m_model');
            $this->load->helper('my_helper');
            if($this->session->userdata('logged_in')!=true){
                redirect(base_url().'auth');
            }
        }

    public function index(){
        $this->load->view('admin/index');
    }

    public function siswa()
    {
        $this->load->view('admin/siswa');
    }

    public function guru()
    {
        $this->load->view('admin/guru');
    }

    public function tambah_siswa()
    {
        $this->load->view('admin/tambah_siswa');
    }

    public function ubah_siswa()
    {
        $this->load->view('admin/ubah_siswa');
    }

    public function tambah_guru()
    {
        $this->load->view('admin/tambah_guru');
    }

    public function ubah_guru()
    {
        $this->load->view('admin/ubah_guru');
    }
}
?>