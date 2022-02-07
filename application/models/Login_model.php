<?php
class Login_model extends CI_Model{
    public function getAdmin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));
        return $this->db->get('admin');
    }
}