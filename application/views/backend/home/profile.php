<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">My Profile</h1>
    </div>


    <div class="card">
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
       
            <div class="row justify-between">
                <div class="col-md-5 text-center my-auto">
                    <img src="<?= base_url('asset/backend/img/profile/' . $user['image']); ?>" alt="user" class="img-profile rounded-circle img-thumbnail w-50">
                    <div class="font-weight-bold">
                        <h5><?= $user['name']; ?></h5>
                        <h6><?= $user['email']; ?></h6>
                    </div>
                </div>
                <div class="col-md-5">
                    <form action="<?= base_url('profile')?>" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control " value="<?= $user['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <img src="<?= base_url('asset/backend/img/profile/' . $user['image']); ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="col-md">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input " id="customFile" name="image" />
                                    <label class="custom-file-label" for="customFile">Choose file</label>

                                </div>
                            </div>
                            
                        </div>
                        <div class="float-right mt-3">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Footer -->
<x-backend.footer />
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded bg-primary" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout dari sistem?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" jika anda ingin keluar dari sistem.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>
</div>