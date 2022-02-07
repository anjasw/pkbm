<?php
class Slider_model extends CI_Model{
    public function getSlider($id = false){
        if($id){
            $this->db->where('id_slider',$id);
            $this->db->limit(1);
        }
        $this->db->order_by('id_slider','DESC');
        return $this->db->get('slider');
    }
    public function updateSlider($id,$data){
        $this->db->where('id_slider',$id);
        return $this->db->update('slider',$data);
    }
    public function insertSlider($data){
        return $this->db->insert('slider',$data);
    }
    public function deleteSlider($id){
        $this->db->where('id_slider',$id);
        return $this->db->delete('slider');
    }
}