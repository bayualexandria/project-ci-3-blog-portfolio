<?php

class Blogs_model extends CI_Model
{

    public function getAll($per_page=null, $start=null, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('title', $keyword);
            $this->db->or_like('judul', $keyword);
            $this->db->or_like('isi', $keyword);
        }

        $this->db->order_by('created_at', 'DESC');
        $this->db->limit(6);
        return $this->db->get('blogs',$per_page,$start)->result_array();
    }

    public function getMateri($id,$per_page,$start)
    {
         $this->db->order_by('created_at', 'DESC');
        $this->db->where('id_kategori',$id);
        $this->db->where('is_active',1);
        return $this->db->get('blogs',$per_page,$start)->result_array();
    }

    public function get($per_page, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('title', $keyword);
            $this->db->or_like('judul', $keyword);
            $this->db->or_like('isi', $keyword);
        }
        return $this->db->get('blogs', $per_page, $start)->result_array();
    }

    public function insert()
    {

        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['upload_path'] = './asset/backend/img/blogs/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 5000;
            $config['file_name'] = base64_encode(random_bytes(32));

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            } else {
                $this->upload->display_errors();
            }
        }

        $data = [
            'title' => $this->input->post('title'),
            'judul' => $this->input->post('judul'),
            'slug' => url_title($this->input->post('judul'), '-', true),
            'isi' => $this->input->post('isi'),
            'image' => $image,
            'id_kategori' => $this->input->post('id_kategori'),
            'is_active' => $this->input->post('is_active'),
            'created_at' => time()
        ];

        $this->db->insert('blogs', $data);
    }

    public function update($slug)
    {
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['upload_path'] = './asset/backend/img/blogs/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 5000;
            $config['file_name'] = base64_encode(random_bytes(32));

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $this->db->get_where('blogs', ['slug' => $slug])->row_array();
                if ($old_image['image']) {
                    unlink(FCPATH . 'asset/backend/img/blogs/' . $old_image['image']);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                $this->upload->display_errors();
            }
        }

        $data = [
            'title' => $this->input->post('title'),
            'judul' => $this->input->post('judul'),
            'slug' => url_title($this->input->post('judul'), '-', true),
            'isi' => $this->input->post('isi'),
            'id_kategori' => $this->input->post('id_kategori'),
            'is_active' => $this->input->post('is_active'),
        ];

        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('blogs', $data);
    }

    public function delete($id)
    {
        $image = $this->db->get_where('blogs', ['id' => $id])->row_array();
        unlink(FCPATH . 'asset/backend/img/blogs/' . $image['image']);

        return $this->db->delete('blogs', ['id' => $id]);
    }
}