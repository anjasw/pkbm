<?php
class Pendaftar_model extends CI_Model{
    public function getPendaftar($id = false){
        if($id){
            $this->db->where('id_pendaftar',$id);
            $this->db->limit(1);
        }
        $this->db->order_by('id_pendaftar','DESC');
        return $this->db->get('pendaftar');
    }
    public function updatePendaftar($id,$data){
        $this->db->where('id_pendaftar',$id);
        return $this->db->update('pendaftar',$data);
    }
    public function insertPendaftar($data){
        return $this->db->insert('pendaftar',$data);
    }
    public function deletePendaftar($id){
        $this->db->where('id_pendaftar',$id);
        return $this->db->delete('pendaftar');
    }
}