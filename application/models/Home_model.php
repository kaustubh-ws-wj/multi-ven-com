<?php

class Home_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function register_user($register_data)
    {   
        if($this->db->insert('users', $register_data))
        {   
            $user_id = $this->db->insert_id();
            return $user_id; 
        }
        else{
            return false;
        }
    }

    public function register_vendor($register_data)
    {   
        if($this->db->insert('vendor', $register_data))
        {   
            $vendor_id = $this->db->insert_id();
            return $vendor_id; 
        }
        else{
            return false;
        }
    }

    public function get_login_details($email,$password)
    {   
        $login_details = $this->db->get_where('users',array('email'=>$email,'password'=>$password))->row();        
        return $login_details;
    }
}
