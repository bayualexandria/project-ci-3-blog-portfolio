<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">


                                    <div class="text-center">
                                        <?= $this->session->flashdata('message'); ?>
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div>

                                    <form class="user" method="POST" action="<?= base_url('auth');?>">
                                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                        <div class="form-group">
                                            <?php if (form_error('email')) : ?>
                                            <input type="text" class="form-control form-control-user is-invalid" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                            <?php else : ?>
                                            <input type="text" class="form-control form-control-user " id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <?php if (form_error('password')) : ?>
                                            <input type="password" class="form-control form-control-user is-invalid" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <?php else : ?>
                                            <input type="password" class="form-control form-control-user " id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="">Lupa Password?</a>
                                    </div>

                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('register'); ?>">Buat akun jika belum terdaftar!</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>