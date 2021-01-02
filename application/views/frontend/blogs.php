<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?= base_url('asset/frontend/img/ci1.jpg') ?>');background-position-y: -12rem;background-size: cover;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="brand">
                    <h2 class="title">All Blog</h2>
                    <h6>Komponen / Blog</h6>
                    <form action="<?= base_url('blog') ?>" method="POST" class="mt-5">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <div class="input-group">
                            <input type="text" id="myInput" name="cari" value="<?= $this->input->post('cari') ?>" class="form-control text-white" autofocus autocomplete="off" placeholder="Search" aria-describedby="button-addon2" />
                            <button class="btn btn-white btn-raised btn-fab btn-round" type="submit" id="button-addon2">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
            <!--  buttons -->
            <div class="title text-center">
                <h2 class="title">All Blogs</h2>
                <hr class="w-25" />
            </div>
            <div class="row justify-content-center">
                <?php if (empty($blogs)) : ?>
                    <div class="col-md-4">
                        <div class="alert alert-danger text-center" role="alert">
                            Data yang anda cari tidak ditemukan
                        </div>
                    </div>
                <?php else : ?>
                    <div class="col-md-6" id="myTable">
                        <ul class="nav nav-pills nav-pills-icons " role="tablist">
                            <?php foreach ($blogs as $blog) : ?>
                                <?php if ($blog['is_active'] == 1) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#blog<?= $blog['slug'] ?>" role="tab" data-toggle="tab">
                                            <i class="material-icons">
                                                <img src="<?= base_url('asset/backend/img/blogs/' . $blog['image']) ?>" alt="" style="width: 100px;" />
                                            </i>
                                            <h6><?= $blog['title']; ?></h6>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                        <div class="text-center mt-5">
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="tab-content text-justify mt-auto mb-auto">
                            <?php foreach ($blogs as $blog) : ?>
                                <div class="tab-pane" id="blog<?= $blog['slug'] ?>">
                                    <h3><?= $blog['judul']; ?></h3>
                                    <p class="embed-responsive-item">
                                        <?= word_limiter($blog['isi'], 50); ?>
                                    </p>
                                    <a href="<?= base_url('detail/' . $blog['slug']); ?>" class="btn btn-primary btn-sm ">Read more.</a>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>