<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('<?= base_url('asset/frontend/img/pc.png') ?>'); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1 class="font-courgatte">Tech. Programming Development</h1>
                    <h3 class="font-courgatte">Jadikan ngoding sebagai hobi untuk berimajinasi.</h3>
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
                <h2 class="title">How To Coding</h2>
                <hr class="w-25" />
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                        <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                    -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#hobby" role="tab" data-toggle="tab">
                                <i class="material-icons">sentiment_satisfied_alt</i>
                                Hobby
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#waktu" role="tab" data-toggle="tab">
                                <i class="material-icons">schedule</i>
                                Waktu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#perangkat" role="tab" data-toggle="tab">
                                <i class="material-icons">important_devices</i>
                                Perangkat
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="tab-content text-justify mt-auto mb-auto">
                        <div class="tab-pane active" id="hobby">
                            <p>
                                Jadikan ngoding sebagai hobby mu sehari hari agar dirimu mampu bisa untuk meningkatkan kualitas dalam mengasah kemampuanmu dalam belajar.<br /><br />
                                Banyak hal yang harus dipelajari untuk dalam meningkatkan pembelajaranmu sebagai programmer dan selalu up to date ilmu dalam dunia IT.<br /><br />
                                Dan jangan lupa untuk selalu berdoa dalam setiap pembelajaranmu maupun membuat project agar diberikan kemudahan.
                            </p>
                        </div>
                        <div class="tab-pane" id="waktu">
                            <p>
                                Waktu yang digunakan harus dibatasi dalam belajar maupun membuat sebuah project, kadang ngoding itu seperti "<i>drugs</i>" akan kecanduan dalam mempelajarinya, tanpa disadari akan terus terlena dalam belajar, membuat sebuah program yang bagus dan baik maupun mencari "<i>error</i>" dalam waktu berjam jam.
                                <br /><br />
                                Jangan lupa untuk beribadah ketika asyik dalam mengoding, ibadah itu wajib untuk dilaksanakan maka dari itu batasi waktu dalam mengoding.
                            </p>
                        </div>
                        <div class="tab-pane" id="perangkat">
                            <p>
                                Gunakan perangkat yang digunakan untuk melakukan ngoding yaitu sebuah perangkat PC atau Leptop yang sesuai spesifikasinya.<br /><br />
                                Banyak bahasa pemrograman dan freamwork yang digunakan untuk belajar ngoding, tetapi setiap media untuk belajar pemrograman (Web, Mobile App, IOT, Data Science dan lain-lain) memiliki spesifikasi PC atau Leptop masing masing untuk menggunakannya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container my-5">
            <!--  buttons -->
            <div class="title text-center">
                <h2 class="title">Update Blog And Materi</h2>
                <hr class="w-50" />
            </div>
            <div class="row justify-content-center">

                <?php foreach($blogs as $blog):?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('asset/backend/img/blogs/'.$blog['image']);?>" alt="" class="card-img-top" style="height: 200px;background-size: cover;" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $blog['title'];?></h5>
                            <p class="card-text"><?= $blog['judul'];?></p>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="<?= base_url('detail/'.$blog['slug']);?>" class="btn btn-info btn-fab btn-round">
                                <i class="material-icons">remove_red_eye</i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
        </div>
        <hr>
        <div class="container my-5">
            <!--  buttons -->
            <div class="title text-center">
                <h2 class="title">Create And Write</h2>
                <hr class="w-50" />
            </div>
            <div class="row justify-content-center text-center">
                <div class="profile">
                    <div class="avatar">
                        <?php if(!empty($user['image'])):?>
                        <img src="<?= base_url('asset/backend/img/profile/'.$user['image']);?>" alt="Circle Image" class="img-raised rounded-circle img-fluid" style="width:20%" />
                        <?php else:?>
                        <img src="<?= base_url('asset/backend/img/profile/default.png');?>" alt="Circle Image" class="img-raised rounded-circle img-fluid" style="width:20%" />
                        <?php endif;?>
                    </div>
                    <div class="name">
                        <h3 class="title"><?= $user['name']??'No Name' ?></h3>
                        <h6>Web Programming & Computer Networking</h6>
                        <a href="https://api.whatsapp.com/send?phone=6281316146399" class="btn btn-just-icon btn-link">
                            <i class="fab fa-whatsapp text-success"></i>
                        </a>
                        <a href="https://www.instagram.com/bayualexandria13/" class="btn btn-just-icon btn-link">
                            <i class="fab fa-instagram text-danger"></i>
                        </a>
                        <a href="https://github.com/bayualexandria" class="btn btn-just-icon btn-link">
                            <i class="fab fa-github text-dark"></i>
                        </a>
                    </div>
                    <a href="<?= base_url('portfolio')?>" class="btn btn-info btn-sm">
                        <i class="material-icons">remove_red_eye</i> Look me
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>