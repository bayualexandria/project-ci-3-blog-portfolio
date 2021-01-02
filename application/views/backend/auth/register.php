<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" method="POST" action="<?= base_url('register'); ?>">

                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                <div class="form-group">
                                    <?php if (form_error('name')) : ?>
                                        <input type="text" class="form-control form-control-user is-invalid" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                                    <?php else : ?>
                                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <?php if (form_error('email')) : ?>
                                        <input type="text" class="form-control form-control-user is-invalid" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    <?php else : ?>
                                        <input type="text" class="form-control form-control-user " id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                    <?php endif; ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <?php if (form_error('password')) : ?>
                                            <input type="password" class="form-control form-control-user is-invalid" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        <?php else : ?>
                                            <input type="password" class="form-control form-control-user " id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                                        <?php endif; ?>

                                    </div>

                                    <div class="col-sm-6">

                                        <?php if (form_error('cpassword')) : ?>
                                            <input type="password" class="form-control form-control-user is-invalid" id="cpassword" name="cpassword" placeholder="Password" value="<?= set_value('cpassword'); ?>">
                                            <?= form_error('cpassword', '<small class="text-danger pl-3">', '</small>') ?>
                                        <?php else : ?>
                                            <input type="password" class="form-control form-control-user " id="cpassword" name="cpassword" placeholder="Password" value="<?= set_value('cpassword'); ?>">
                                        <?php endif; ?>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>

                            </form>

                            <hr>

                            <div class="text-center">
                                <a class="small" href="">Lupa Password?</a>
                            </div>
                            
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Akun sudah dibuat? Login!</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>