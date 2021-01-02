<?php

class Auth_model extends CI_Model 
{
    public function register()
    {
        $data=[
            'name'=>htmlspecialchars($this->input->post('name')),
            'email'=>htmlspecialchars($this->input->post('email')),
            'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'image'=>'default.png',
            'is_active'=>1,
            'created_at'=>time()
        ];

        $this->db->insert('users',$data);
    }
}