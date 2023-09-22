<?php
class M_model extends CI_Model{
    function get_data($table){
        return $this->db->get($table);
    }

    function getwhere($table,$data){
        return $this->db->get_where($table,$data);
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function delete($table, $field,$id){
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data= $this->db->where($id_column, $id)->get($tabel);
        return ($data);
    }

    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }

    function get_siswa_by_kelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->get('siswa')->result();
    }

    public function get_siswa_kelas($tingkat_kelas) {
        // Query database untuk mengambil siswa berdasarkan tingkat_kelas
        $this->db->select('siswa.*'); // Pilih semua kolom dari tabel siswa
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id');
        $this->db->where('kelas.tingkat_kelas', $tingkat_kelas);
    
        return $this->db->get()->result();
    }
    
    
}
?>