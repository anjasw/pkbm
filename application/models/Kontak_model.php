<?php
class Kontak_model extends CI_Model{
    public function getKontak($id = false){
        if($id){
            $this->db->where('id_kontak',$id);
            $this->db->limit(1);
        }
        $this->db->order_by('id_kontak','DESC');
        return $this->db->get('kontak');
    }
    public function updateKontak($id,$data){
        $this->db->where('id_kontak',$id);
        return $this->db->update('kontak',$data);
    }
    public function insertKontak($data){
        return $this->db->insert('kontak',$data);
    }
    public function deleteKontak($id){
        $this->db->where('id_kontak',$id);
        return $this->db->delete('kontak');
    }
}