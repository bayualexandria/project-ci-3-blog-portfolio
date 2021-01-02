<?php

class Home_model extends CI_Model
{
    public function profile($data)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');

        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['upload_path'] = './asset/backend/img/profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 5000;
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('image')) {
                $old_image = $data['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'asset/backend/img/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                $this->upload->display_errors();
            }
        }

        $this->db->set('name', $name);
        $this->db->where('email', $email);
        $this->db->update('users');
    }
}