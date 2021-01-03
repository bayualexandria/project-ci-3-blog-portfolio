<div class="page-header header-filter dark-filter" data-parallax="true" style="background-image: url('<?= base_url('asset/frontend/img/profile_!.jpg') ?>');background-size: cover; background-position: center;"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <?php if(!empty($user['image'])):?>
                            <img src="<?= base_url('asset/backend/img/profile/'.$user['image']);?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            <?php else:?>
                            <img src="<?= base_url('asset/backend/img/profile/default.png');?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            <?php endif;?>
                        </div>
                        <div class="name">
                            <h3 class="title"><?= $user['name']??'No Name';?></h3>
                            <h6>Web Programming & Computer Networking</h6>
                            <a href="https://api.whatsapp.com/send?phone=6281316146399" target="_blank" class="btn btn-just-icon btn-link">
                                <i class="fab fa-whatsapp text-success"></i>
                            </a>
                            <a href="https://www.instagram.com/bayualexandria13/" target="_blank" class="btn btn-just-icon btn-link">
                                <i class="fab fa-instagram text-danger"></i>
                            </a>
                            <a href="https://github.com/bayualexandria" target="_blank" class="btn btn-just-icon btn-link">
                                <i class="fab fa-github text-dark"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <p>Jadilah orang yang bermanfaat dan dibutuhkan orang lain sesuai kemampuanmu dengan hati yang ikhlas untuk membantu. Bila orang lain merendahkamu dari sisi keburukanmu jadikanlah itu sebagai motivasi untuk bisa menjadi lebih baik. </p>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#dream" role="tab" data-toggle="tab">
                                    <i class="material-icons">camera</i> Dream
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                    <i class="material-icons">dvr</i> Script
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                    <i class="material-icons">favorite</i> Favorite
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="dream">
                    <div class="row">
                        <div class="col-md-3 ml-auto">
                            <img src="<?= base_url('asset/frontend/img/examples/dream1.JPG')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream2.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream3.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream10.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream11.JPG')?>" class="rounded">

                        </div>
                        <div class="col-md-3 mr-auto">
                            <img src="<?= base_url('asset/frontend/img/examples/dream4.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream5.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream8.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream9.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/dream6.jpg')?>" class="rounded">
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="works">
                    <div class="row">
                        <div class="col-md-3 ml-auto">
                            <img src="<?= base_url('asset/frontend/img/examples/script1.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/script2.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/script3.JPG')?>" class="rounded">

                        </div>
                        <div class="col-md-3 mr-auto">
                            <img src="<?= base_url('asset/frontend/img/examples/script4.jpg')?>" class="rounded">
                            <video width="300" height="240" controls>
                                <source src="<?= base_url('asset/frontend/img/video/laravel.mp4')?>" type="video/mp4">
                            </video>
                            <video width="300" height="240" controls>
                                <source src="<?= base_url('asset/frontend/img/video/script.mp4')?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="favorite">
                    <div class="row">
                        <div class="col-md-3 ml-auto">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit1.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit2.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit3.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit4.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit5.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit6.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit12.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit14.jpg')?>" class="rounded">
                        </div>
                        <div class="col-md-3 mr-auto">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit8.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit9.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit10.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit11.jpg')?>" class="rounded">
                            <img src="<?= base_url('asset/frontend/img/examples/favorit7.jpg')?>" class="rounded">
                            <video width="300" height="240" controls>
                                <source src="<?= base_url('asset/frontend/img/examples/favorite.mp4')?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>