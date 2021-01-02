<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?= base_url('asset/frontend/img/ci1.jpg') ?>');background-position-y: -12rem;background-size: cover;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="brand">
                    <h2 class="title">Materi</h2>
                    <h6>Komponen / Materi</h6>
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
                <h2 class="title">Materi</h2>
                <hr class="w-25" />
            </div>
            <div class="row justify-content-center">
                <?php foreach($blogs as $b):?>
                <?php if($b['is_active']==1):?>
                <div class="col-md-4">
                    <a href="<?= base_url('detail/'.$b['slug']);?>">
                        <div class="card">
                            <img src="<?= base_url('asset/backend/img/blogs/'.$b['image']);?>" alt="" class="card-img-top" style="height: 200px;background-size: cover;" />
                            <div class="card-body">
                                <h5 class="card-title"><?= $b['judul'];?></h5>
                            </div>
                            <div class="card-footer">
                                <p><?= elapsed_time($b['created_at']);?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>
            <div class="row justify-content-center mt-5">
                Pagination
            </div>
        </div>
    </div>
</div>