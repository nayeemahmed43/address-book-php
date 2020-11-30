<?php
class User_model extends CI_model {
    function create($formArray)
    {
        $this->db->insert('users',$formArray);  //insert into users(name,address)
    }
    function all(){
        return $users = $this->db->get('users')->result_array(); //SELECT * from users
    }
    function getUser($userId){
        $this->db->where('user_id',$userId);
        return $user = $this->db->get('users')->row_array(); //SELECT * from users where user_id = ?
    }
    function updateUser($userId,$formArray){
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray); //update users
    }
    function deleteUser($userId){
        $this->db->where('user_id',$userId);
        $this->db->delete('users');
    }
}
?>