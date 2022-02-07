<?php
class Jalur_model extends CI_Model{
    public function getJalur($id = false,$tipe = false,$warna = false){
        if($id){
            $this->db->where('id_jenjang',$id);
            $this->db->limit(1);
        }
        if($tipe){
            $this->db->where('tipe_jenjang',$tipe);
        }
        if($warna){
            $this->db->where('bg_color IS NOT NULL');
            $this->db->where('font_color IS NOT NULL');
        }
        $this->db->order_by('id_jenjang','DESC');
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