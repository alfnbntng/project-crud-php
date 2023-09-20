<?php
function kelas_dan_jurusan($id)
{
    $ci =& get_instance();
    $ci ->load->database();
    $result = $ci->db->where('id',$id)->get('kelas');
        foreach($result->result() as $c){
            $stmt = $c->kelas.' '.$c->jurusan;
            return $stmt;
    }
}
?>