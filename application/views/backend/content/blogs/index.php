<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Blogs</h1>
        <div class="pl-3">
            <a href="<?= base_url('create.blogs'); ?>" class="btn btn-circle btn-success btn-sm">
                <span class="fa fa-plus"></span>
            </a>
            <form action="<?= base_url('blogs') ?>" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                <div class="input-group">
                    <input type="text" name="cari" value="<?= $this->input->post('cari'); ?>" autofocus class="form-control bg-light border-0 small" placeholder="Masukan pencarian..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <?php foreach ($blogs as $blog) : ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $blog['title']; ?></h5>
                            <?php $id = $blog['id_kategori'];
                            $this->db->select('icon,kategori');
                            $this->db->from('kategori');
                            $this->db->join('blogs', '' . $id . ' = kategori.id');
                            $query = $this->db->get()->row_array(); ?>
                        <?php if (!empty($query['icon'])&&!empty($query['kategori'])) : ?>
                            <p class="card-muted"><i class="<?= $query['icon']; ?>"></i> <?= $query['kategori']; ?></p>
                        <?php endif; ?>

                        <p class="card-text"><?= word_limiter($blog['isi'], 25); ?></p>
                        <a href="" target="_blank" class="btn btn-primary btn-sm">Read more..</a>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?= base_url('edit.blogs/' . $blog['slug']); ?>" class="btn btn-circle btn-primary btn-sm">
                            <span class="fa fa-pencil-alt"></span>
                        </a>
                        <a href="" class="btn btn-circle btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $blog['id'] ?>">
                            <span class="fa fa-trash"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="delete<?= $blog['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Hapus data blog</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('delete.blogs/' . $blog['id']) ?>" method="post">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <input type="hidden" name="judul" value="<?= $blog['judul']; ?>">

                            <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus data dengan judul <?= $blog['judul']; ?> ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-danger btn-sm">Ya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="row justify-content-center mt-5">
    <?= $this->pagination->create_links(); ?>

</div>

</div>

</div>
<a class="scroll-to-top rounded bg-primary" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</div>