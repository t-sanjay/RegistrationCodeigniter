<?php

class Authmodel extends CI_Model{

    public function create($formArray = array()){
        $this->db->insert('users', $formArray);
    }
    public function checkUser($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('users')->row_array();
    }
    /* user authorisation */
    function authorize(){
        $user = $this->session->userdata('user');
        if(!empty($user)){
            return true;
        }else{
            return false;
        }
    }
}

?>