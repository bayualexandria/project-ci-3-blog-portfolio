<?php

class Content extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->data = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->csrf = [
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        ];
        $this->load->model('Kategori_model', 'Kategori');
        $this->load->model('Blogs_model', 'Blogs');
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
        $config['base_url'] = "http://localhost/new/index.php/admin/Content/blogs/";
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // Initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);

        $this->load->view('backend/layout/header');
        $this->load->view('backend/layout/sidebar');
        $this->load->view('backend/layout/navbar', ['user' => $this->data]);
        $this->load->view('backend/content/blogs/index', [
            'blogs' => $this->Blogs->get(
                $config['per_page'],
                $data['start'],
                $data['cari']
            ),
            'csrf' => $this->csrf,
            'start' => $data['start']
        ]);
        $this->load->view('backend/layout/footer');
    }

    public function createblogs()
    {
        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Title harus diisi'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[blogs.judul]', [
            'required' => 'Judul harus diisi',
            'is_unique' => 'Judul yang anda masukan sudah terdaftar'
        ]);
        $this->form_validation->set_rules('isi', 'Isi', 'required', [
            'required' => 'Isi harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/layout/header');
            $this->load->view('backend/layout/sidebar');
            $this->load->view('backend/layout/navbar', ['user' => $this->data]);
            $this->load->view('backend/content/blogs/create', [
                'csrf' => $this->csrf,
                'kategori' => $this->Kategori->getAll()
            ]);
            $this->load->view('backend/layout/footer');
        } else {
            $this->Blogs->insert();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data blog dengan judul ' . $this->input->post('judul') . ' telah ditambahkan</div>');
            return redirect('blogs');
        }
    }

    public function updateblogs($slug)
    {
        $this->form_validation->set_rules('title', 'Title', 'required', [
            'required' => 'Title harus diisi'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul harus diisi',
        ]);
        $this->form_validation->set_rules('isi', 'Isi', 'required', [
            'required' => 'Isi harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/layout/header');
            $this->load->view('backend/layout/sidebar');
            $this->load->view('backend/layout/navbar', ['user' => $this->data]);
            $this->load->view('backend/content/blogs/update', [
                'csrf' => $this->csrf,
                'kategori' => $this->Kategori->getAll(),
                'blog' => $this->db->get_where('blogs', ['slug' => $slug])->row_array()
            ]);
            $this->load->view('backend/layout/footer');
        } else {
            $this->Blogs->update($slug);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data blog dengan judul ' . $this->input->post('judul') . ' telah diupdate</div>');
            return redirect('blogs');
        }
    }

    public function deleteblogs($id)
    {
        $this->Blogs->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data blog dengan judul ' . $this->input->post('judul') . ' telah dihapus</div>');
        return redirect('blogs');
    }

    public function materi()
    {

        $this->form_validation->set_rules('kategori', 'Kategori', 'required|is_unique[kategori.icon]', [
            'required' => 'Kategori harus diisi',
            'is_unique' => 'Kategoriyang anda masukan telah ada'
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'required|is_unique[kategori.icon]', [
            'required' => 'Icon harus diisi',
            'is_unique' => 'Icon yang anda masukan telah ada'
        ]);

        if ($this->form_validation->run() == false) {
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
            $this->db->like('kategori', $data['cari']);
            $this->db->or_like('icon', $data['cari']);
            $this->db->from('kategori');
            $config['base_url'] = "http://localhost/new/index.php/admin/Content/materi/";
            $config['total_rows'] = $this->db->count_all_results();
            $data['total_rows'] = $config['total_rows'];
            $config['per_page'] = 5;
            // Initialize
            $this->pagination->initialize($config);

            $data['start'] = $this->uri->segment(4);


            $this->load->view('backend/layout/header');
            $this->load->view('backend/layout/sidebar');
            $this->load->view('backend/layout/navbar', ['user' => $this->data]);
            $this->load->view('backend/content/materi/index', [
                'csrf' => $this->csrf,
                'materi' => $this->Kategori->get(
                    $config['per_page'],
                    $data['start'],
                    $data['cari']
                ),
                'start' => $data['start']
            ]);
            $this->load->view('backend/layout/footer');
        } else {
            $this->Kategori->insert();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert>Data materi telah ditambahkan</div>');
            return redirect('materi');
        }
    }

    public function updatemateri()
    {

        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori harus diisi',
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'required', [
            'required' => 'Icon harus diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/layout/header');
            $this->load->view('backend/layout/sidebar');
            $this->load->view('backend/layout/navbar', ['user' => $this->data]);
            $this->load->view('backend/content/materi/index', ['csrf' => $this->csrf, 'materi' => $this->Kategori->get()]);
            $this->load->view('backend/layout/footer');
        } else {

            $this->Kategori->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data materi dengan kategori ' . $this->input->post('kategori') . ' telah diubah</div>');
            return redirect('materi');
        }
    }

    public function deletemateri($id)
    {
        $this->Kategori->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data materi dengan kategori ' . $this->input->post('kategori') . ' telah dihapus</div>');
        return redirect('materi');
    }
}