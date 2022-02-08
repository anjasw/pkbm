<?php
class Pengaturan_model extends CI_Model{
    public function getPengaturan($id = false){
        if($id){
            $this->db->where('id_config',$id);
        }
        $this->db->limit(1);
        $this->db->order_by('id_config','DESC');
        return $this->db->get('config_page');
    }
    public function updatePengaturan($data){
        return $this->db->update('config_page',$data);
    }
    public function insertPengaturan($data){
        return $this->db->insert('config_page',$data);
    }
    public function deletePengaturan($id){
        $this->db->where('id_config',$id);
        return $this->db->delete('config_page');
    }
}