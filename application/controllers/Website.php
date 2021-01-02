<?php

class Website extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blogs_model', 'Blogs');
        $this->load->model('Kategori_model', 'Kategori');
        $this->user = $this->db->get_where('users', ['id' => 1])->row_array();
        $this->csrf = [
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        ];
    }

    public function index()
    {
        $this->load->view('frontend/layout/header', [
            'title' => 'Halaman Utama',
            'css' => 'index-page'
        ]);
        $this->load->view('frontend/index', ['blogs' => $this->Blogs->getAll(), 'user' => $this->user]);
        $this->load->view('frontend/layout/footer');
    }

    public function profile()
    {
        $this->load->view('frontend/layout/header', [
            'title' => 'Halaman Profile',
            'css' => 'profile-page'
        ]);
        $this->load->view('frontend/profile', ['user' => $this->user]);
        $this->load->view('frontend/layout/footer');
    }

    public function blogs()
    {
        // ambil data cari
        if ($this->input->method('POST')) {
            $data['cari'] = $this->input->post('cari');
            $this->session->set_userdata('cari', $data['cari']);
        } else {
            $data['cari'] = $this->session->userdata('cari');
        }


        // Pagination
        $this->load->library('pagination');
        // Config
        $this->db->like('title', $data['cari']);
        $this->db->or_like('judul', $data['cari']);
        $this->db->or_like('isi', $data['cari']);
        $this->db->from('blogs');
        $config['base_url'] = "http://localhost/new/index.php/Website/blogs/";
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // Initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $this->load->view('frontend/layout/header', [
            'title' => 'Halaman Blogs',
            'css' => 'profile-page'
        ]);
        $this->load->view('frontend/blogs', ['blogs' => $this->Blogs->getAll($config['per_page'], $data['start'], $data['cari']),'csrf'=>$this->csrf]);
        $this->load->view('frontend/layout/footer');
    }

    public function materi($kategori)
    {
        $materi = $this->db->get_where('kategori', ['kategori' => $kategori])->row_array();
        $this->load->view('frontend/layout/header', [
            'title' => 'Halaman Materi',
            'css' => 'profile-page'
        ]);
        $this->load->view('frontend/materi', ['blogs' => $this->Blogs->getMateri($materi['id'])]);
        $this->load->view('frontend/layout/footer');
    }

    public function kategorimateri()
    {
        $this->load->view('frontend/layout/header', [
            'title' => 'Halaman Kategori Materi',
            'css' => 'profile-page'
        ]);
        $this->load->view('frontend/kategori', [
            'kategori' => $this->Kategori->getAll()
        ]);
        $this->load->view('frontend/layout/footer');
    }

    public function detail($slug)
    {
        $blog = $this->db->get_where('blogs', ['slug' => $slug])->row_array();

        $this->load->view('frontend/layout/header', [
            'title' => 'Halaman Detail',
            'css' => 'profile-page'
        ]);
        $this->load->view('frontend/detail', [
            'blog' => $blog,
            'user' => $this->user,
            'blogs' => $this->Blogs->getAll()
        ]);
        $this->load->view('frontend/layout/footer');
    }

    public function about()
    {
        $this->load->view('frontend/about');
    }
}