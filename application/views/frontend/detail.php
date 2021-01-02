<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?= base_url('asset/frontend/img/ci1.jpg') ?>');background-size: cover;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="brand">
                    <h2 class="title">Detail Blog</h2>
                    <h6>Komponen / Detail Blog</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8">
                    <div class="judul text-center">
                        <h2><?= $blog['judul'];?></h2>
                    </div>
                    <div class="row justify-content-center mx-5">
                        <p class="mr-1" style="font-size: 15px;">Di tulis oleh :</p>
                        <p><?= $user['name']??'No Name' ?>, dipublikasikan pada <?= date('d-M-Y',$blog['created_at']);?> dalam kategori materi</p>
                    </div>
                    <div class="mt-5 text-center" style="width: 100%;">
                        <img src="<?= base_url('asset/backend/img/blogs/'.$blog['image']);?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="mt-5 text-justify mx-4">
                        <?= $blog['isi'];?>
                    </div>
                </div>

                <div class="col-md-4
                 mt-5">
                    <div class="list-group mt-5">
                        <h3 class="mt-3 text-center">New Post</h3>
                        <?php foreach($blogs as $blog):?>
                        <?php if($blog['is_active']==1):?>
                        <a href="<?= base_url('detail/'.$blog['slug'])?>" class="list-group-item list-group-item-action <?= (site_url(uri_string()) == base_url('detail/'.$blog['slug']))?'active':'';?>">
                            <?= $blog['judul'];?>
                        </a>
                        <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>