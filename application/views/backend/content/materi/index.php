<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    </div>
    <div class="row">
        <div class="col-md">
            <?= $this->session->flashdata('message');?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                        </div>
                        <div class="col-md-4">
                            <form action="<?= base_url('materi');?>" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                <div class="input-group">
                                    <input type="text" name="cari" autofocus class="form-control bg-light border-0 small" placeholder="Search for..." value="<?= $this->input->post('cari');?>" aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" width="100%" cellspacing="0">
                            <thead>
                                <th>#</th>
                                <th>Kategori</th>
                                <th>Icon</th>
                                <th>Active</th>
                                <th>
                                    <a href="" class="btn btn-circle btn-success btn-sm" data-toggle="modal" data-target="#insert">
                                        <span class="fa fa-plus"></span>
                                    </a>
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach($materi as $m):?>
                                <tr>
                                    <td><?= ++$start;?></td>
                                    <td><?= $m['kategori'];?></td>
                                    <td>
                                        <span class="<?= $m['icon'];?>"></span>
                                    </td>
                                    <td>
                                        <?php if($m['is_active']==1):?>
                                        <span class="badge badge-success">Active</span>
                                        <?php else:?>
                                        <span class="badge badge-danger">No active</span>
                                        <?php endif;?>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-circle btn-primary btn-sm" data-toggle="modal" data-target="#update<?= $m['id']?>">
                                            <span class="fa fa-pencil-alt"></span>
                                        </a>
                                        <a href="" class="btn btn-circle btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $m['id']?>">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <?= $this->pagination->create_links();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach($materi as $m): ?>
<div class="modal fade" id="update<?= $m['id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update data kategori <?= $m['id'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('update.materi');?>" method="post">
                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                <input type="hidden" value="<?= $m['id'];?>" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                        <input type="text" class="form-control <?= (form_error('kategori'))?'is-invalid':'';?>" name="kategori" id="kategori" placeholder="Masukan nama kategori" value="<?= $m['kategori']?>">
                        <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="icon">Nama Icon</label>
                        <input type="text" class="form-control <?= (form_error('icon'))?'is-invalid':'';?>" id="icon" name="icon" placeholder="Masukan nama icon" value="<?= $m['icon']?>">
                        <?= form_error('icon', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="is_active">Apakah anda yakin ingin aktif?</label>
                        <div class="row ml-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3<?= $m['id']?>" name="is_active" value="0" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadio3<?= $m['id']?>">Tidak</label>
                            </div>
                            <div class="custom-control custom-radio ml-3">
                                <input type="radio" id="customRadio4<?= $m['id']?>" name="is_active" value="1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio4<?= $m['id']?>">Ya</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="primary" class="btn btn-primary btn-sm">Update data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>

<?php foreach($materi as $m):?>
<div class="modal fade" id="delete<?= $m['id']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hapus data materi </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('delete.materi/'.$m['id'])?>" method="post">
                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                <input type="hidden" name="kategori" value="<?= $m['kategori'];?>">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data dengan nama kategori <?= $m['kategori'];?>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-danger btn-sm">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>
<!-- Modal -->
<div class="modal fade" id="insert" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Insert data kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('materi');?>" method="post">
                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                        <input type="text" class="form-control <?= (form_error('kategori'))?'is-invalid':'';?>" name="kategori" id="kategori" placeholder="Masukan nama kategori" value="<?= set_value('judul')?>">
                        <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="icon">Nama Icon</label>
                        <input type="text" class="form-control <?= (form_error('icon'))?'is-invalid':'';?>" id="icon" name="icon" placeholder="Masukan nama icon" value="<?= set_value('icon')?>">
                        <?= form_error('icon', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="is_active">Apakah anda yakin ingin aktif?</label>
                        <div class="row ml-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="is_active" value="0" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadio1">Tidak</label>
                            </div>
                            <div class="custom-control custom-radio ml-3">
                                <input type="radio" id="customRadio2" name="is_active" value="1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Ya</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="primary" class="btn btn-primary btn-sm">Save data</button>
                </div>
            </form>
        </div>
    </div>
</div>