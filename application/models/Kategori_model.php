<?php

class Kategori_model extends CI_Model
{

    public function getAll()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function get($per_page, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('kategori', $keyword);
            $this->db->or_like('icon', $keyword);
        }
        return $this->db->get('kategori', $per_page, $start)->result_array();
    }

    public function insert()
    {
        $data = [
            'kategori' => $this->input->post('kategori'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active'),
            'created_at' => time()
        ];

        $this->db->insert('kategori', $data);
    }

    public function update()
    {
        $data = [
            'kategori' => $this->input->post('kategori'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active'),
            'created_at' => time()
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kategori', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('kategori', ['id' => $id]);
    }
}