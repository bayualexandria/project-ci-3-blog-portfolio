
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

              <?php foreach($kategori as $k):?>
                <div class="col-md-2">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="<?= base_url('materi/'.$k['kategori'])?>" class="btn btn-fab btn-round btn-white">
                                <i class="<?= $k['icon'];?>"></i>
                            </a>
                            <h4><?= $k['kategori'];?></h4>
                        </div>
                    </div>
                </div>
             <?php endforeach;?>

            </div>
        </div>
    </div>
</div>