<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->data = $this->data = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Home_model', 'Home');
        $this->csrf = [
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        ];
    }

    public function index()
    {
        $this->load->view('backend/layout/header');
        $this->load->view('backend/layout/sidebar');
        $this->load->view('backend/layout/navbar', ['user' => $this->data]);
        $this->load->view('backend/home/index');
        $this->load->view('backend/layout/footer');
    }

    public function profile()
    {

        $this->form_validation->set_rules('name', 'Name', 'required', [
            'required' => 'Nama harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/layout/header');
            $this->load->view('backend/layout/sidebar');
            $this->load->view('backend/layout/navbar', ['user' => $this->data]);
            $this->load->view('backend/home/profile', ['csrf' => $this->csrf]);
            $this->load->view('backend/layout/footer');
        } else {
            $this->Home->profile($this->data);
            $this->session->set_flashdata('message', '<div role="alert" class="alert alert-success">Profile telah diupdate</div>');
            return redirect('profile');
        }
    }
}
