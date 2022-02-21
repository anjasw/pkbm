<?php
class Jalur_model extends CI_Model{
    public function getJalur($id = false){
        if($id){
            $this->db->where('id_jenjang',$id);
            $this->db->limit(1);
        }
        return $this->db->get('jalur_jenjang');
    }
    public function updateJalur($id,$data){
        $this->db->where('id_jenjang',$id);
        return $this->db->update('jalur_jenjang',$data);
    }
    public function insertJalur($data){
        return $this->db->insert('jalur_jenjang',$data);
    }
    public function deleteJalur($id){
        $this->db->where('id_jenjang',$id);
        return $this->db->delete('jalur_jenjang');
    }
}