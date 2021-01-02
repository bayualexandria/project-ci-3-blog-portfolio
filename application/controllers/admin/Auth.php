<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->csrf = [
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        ];
        $this->load->model('Auth_model', 'Auth');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'Email harus diisi',
            'valid_email' => 'Yang anda masukan bukan email'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/layout/header');
            $this->load->view('backend/auth/login', ['csrf' => $this->csrf]);
            $this->load->view('backend/layout/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->db->get_where('users', ['email' => $this->input->post('email')])->row_array();
        $password = $this->input->post('password');

        if ($email) {
            if ($email['is_active'] == 1) {
                if (password_verify($password, $email['password'])) {
                    $data = [
                        'email' => $email['email'],
                        'is_active' => $email['is_active']
                    ];

                    $this->session->set_userdata($data);
                    return redirect('home');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukan salah! </div>');
                    return redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda belum diaktifasi! </div>');
                return redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email yang anda masukan belum terdaftar pada sistem kami! </div>');
            return redirect('auth');
        }
    }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }
        $this->form_validation->set_rules('name', 'Full name', 'required', [
            'required' => 'Nama harus diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', [
            'required' => 'Email harus diisi',
            'valid_email' => 'Yang anda masukan bukan email',
            'is_unique' => 'Email sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[cpassword]', [
            'required' => 'Password harus diisi',
            'min_length' => 'Password harus 6 karakter',
            'matches' => 'Konfirmasi Password tidak sama'
        ]);
        $this->form_validation->set_rules('cpassword', 'Password', 'required|min_length[6]|matches[password]', [
            'required' => 'Konfirmasi Password harus diisi',
            'min_length' => 'Password harus 6 karakter',
            'matches' => 'Password tidak sama'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/layout/header');
            $this->load->view('backend/auth/register', ['csrf' => $this->csrf]);
            $this->load->view('backend/layout/footer');
        } else {
            $this->Auth->register();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda berhasil daftar! </div>');
            return redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_active');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar! </div>');
        return redirect('auth');
    }
}
