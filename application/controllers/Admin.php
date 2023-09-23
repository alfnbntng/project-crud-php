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
        $data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
        $data['guru'] = $this->m_model->get_data('guru')->num_rows();
        $this->load->view('admin/index', $data);
    }

    public function siswa()
    {
        $data['siswa'] = $this->m_model->get_data('siswa')->result();
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        $this->load->view('admin/siswa',$data);
    }
  
    public function tambah_siswa()
    {
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        $this->load->view('admin/tambah_siswa',$data);
    }

    public function action_tambah_siswa()
    {
        $config['upload_path'] = './uploads/siswa/'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $config['max_size'] = 2048; 
        $config['file_name'] = 'siswa_' . time(); 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_siswa')) {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            $data = [
                'nama_siswa' => $this->input->post('nama'),
                'nisn' => $this->input->post('nisn'),
                'alamat' => $this->input->post('alamat'),
                'id_kelas' => $this->input->post('id_kelas'),
                'gender' => $this->input->post('gender'),
                'foto_siswa' => $file_name, 
            ];

            $this->m_model->tambah_data('siswa', $data);
            redirect(base_url('admin/siswa'));
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/tambah_siswa', $error);
        }
    }



    public function ubah_siswa($id)
	{
		$data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
		$data['kelas'] = $this->m_model->get_by_id('kelas', 'id', $id)->result();
		$this->load->view('admin/ubah_siswa', $data);
	}
    
	public function action_ubah_siswa()
	{
        $data = array (
            'nama_siswa' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'alamat' => $this->input->post('alamat'),
            'id_kelas' => $this->input->post('id_kelas'),
            'gender' => $this->input->post('gender'),
        );
		$eksekusi=$this->m_model->ubah_data
		('siswa', $data, array('id_siswa'=>$this->input->post('id_siswa')));
		if($eksekusi)
		{
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('admin/siswa'));
		} 
		else
		{
            $this->session->set_flashdata('error', 'gagal..');
			redirect(base_url('admin/ubah_siswa/'.$this->input->post('id_siswa')));
		}
	}
    
    public function hapus_siswa($id)
    {
        $this->m_model->delete('siswa', 'id_siswa', $id);
        redirect(base_url('admin/siswa'));
    }

    public function guru()
    {
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $this->load->view('admin/guru',$data);
    }

    public function tambah_guru()
    {
        $this->load->view('admin/tambah_guru');
    }

    public function action_tambah_guru()
    {
        $config['upload_path'] = './uploads/guru/'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $config['max_size'] = 2048; 
        $config['file_name'] = 'guru_' . time(); 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_guru')) {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            $data = [
                'nama_guru' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'alamat' => $this->input->post('alamat'),
                'mapel' => $this->input->post('mapel'),
                'jabatan' => $this->input->post('jabatan'),
                'gender' => $this->input->post('gender'),
                'foto_guru' => $file_name,
            ];

            $this->m_model->tambah_data('guru', $data);
            redirect(base_url('admin/guru'));
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/tambah_guru', $error);
        }
    }

    public function ubah_guru($id)
	{
		$data['guru'] = $this->m_model->get_by_id('guru', 'id_guru', $id)->result();
		$this->load->view('admin/ubah_guru', $data);
	}

	public function action_ubah_guru()
	{
		$data = array (
            'nama_guru' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'alamat' => $this->input->post('alamat'),
            'mapel' => $this->input->post('mapel'),
            'jabatan' => $this->input->post('jabatan'),
            'gender' => $this->input->post('gender'),
            'foto_guru' => $this->input->post('foto_guru'),
	);
		$eksekusi=$this->m_model->ubah_data
		('guru', $data, array('id_guru'=>$this->input->post('id_guru')));
		if($eksekusi)
		{
			$this->session->set_flashdata('sukses', 'berhasil');
			redirect(base_url('admin/guru'));
		} 
		else
		{
			$this->session->set_flashdata('error', 'gagal..');
			redirect(base_url('admin/ubah_guru/'.$this->input->post('id_guru')));
		}
	}

    public function hapus_guru($id)
    {
        $this->m_model->delete('guru', 'id_guru', $id);
        redirect(base_url('admin/guru'));
    }
    
    public function kelas_x()
    {
        $data['siswa_kelas_x'] = $this->m_model->get_siswa_kelas('X');
        $this->load->view('admin/kelas_x', $data);
    }

    public function kelas_xi()
    {
        $data['siswa_kelas_xi'] = $this->m_model->get_siswa_kelas('XI');
        $this->load->view('admin/kelas_xi', $data);
    }

    public function kelas_xii()
    {
        $data['siswa_kelas_xii'] = $this->m_model->get_siswa_kelas('XII');
        $this->load->view('admin/kelas_xii', $data);
    }
    
    
    public function daftar_siswa() 
    {
        $data['kelas'] = $this->m_model->get_data('kelas')->result();
        
        foreach ($data['kelas'] as $kelas) {
            $id_kelas = $kelas->id;
            $data['siswa'][$id_kelas] = $this->m_model->get_siswa_by_kelas($id_kelas);
        }
        
        $this->load->view('siswa_view', $data);
    }

    public function detail_siswa($id_siswa)
    {
        $data['siswa'] = $this->m_model->get_siswaById('siswa', $id_siswa)->result();
        $data['kelas'] = $this->m_model->get_by_id('kelas', 'id', $id_siswa)->result();
        $this->load->view('admin/detail_siswa',$data);
    }

    public function detail_guru($id_guru)
    {
        $data['guru'] = $this->m_model->get_guruById('guru', $id_guru)->result();
        $this->load->view('admin/detail_guru',$data);
    }

    public function guru_mapel()
    {
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $this->load->view('admin/guru_mapel',$data);
    }
    
}
?>