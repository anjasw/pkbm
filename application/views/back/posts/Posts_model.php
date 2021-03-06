<?php
class Posts_model extends CI_Model{
    public function getPosts($id = false){
        if($id){
            $this->db->where('id_posts',$id);
            $this->db->limit(1);
        }
        $this->db->order_by('id_posts','DESC');
        return $this->db->get('posts');
    }
    public function updatePosts($id,$data){
        $this->db->where('id_posts',$id);
        return $this->db->update('posts',$data);
    }
    public function insertPosts($data){
        return $this->db->insert('posts',$data);
    }
    public function deletePosts($id){
        $this->db->where('id_posts',$id);
        return $this->db->delete('posts');
    }
}