<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Blogs</h1>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md">
            <div class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <input type="hidden" name="id" value="<?= $blog['id'];?>">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control <?= (form_error('title'))?'is-invalid':'';?>" name="title" id="title" placeholder="Masukan title" value="<?= set_value('title',$blog['title']);?>">
                            <?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control <?= (form_error('judul'))?'is-invalid':'';?>" id="judul" name="judul" placeholder="Masukan judul" value="<?= set_value('judul',$blog['judul']); ?>">
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="editor">Isi</label>
                            <textarea class="form-control <?= (form_error('isi'))?'is_invalid':'';?>" name="isi" id="editor"><?= set_value('isi',$blog['isi']);?></textarea>
                            <?= form_error('isi', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group row justify-content-between">
                            <div class="col-md-5">
                                <label for="image">Sampul</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input is_invalid" name="image" id="customFile"  />
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <?= form_error('image', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="kategori">Kategori</label>
                                <select name="id_kategori" id="kategori" class="custom-select">
                                    <?php foreach($kategori as $k):?>
                                    <option value="<?= $k['id'];?>" ><?= $k['kategori'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
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
                        <a href="" class="btn btn-secondary btn-sm" data-dismiss="modal"> <i class="fa fa-arrow-left"></i> back</a>
                        <button type="primary" class="btn btn-primary btn-sm">Update data</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<a class="scroll-to-top rounded bg-primary" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</div>

<script src="<?= base_url('asset/backend/vendor/ckeditor/ckeditor.js')?>"></script>



<script>
    var options = {
        filebrowserBrowseUrl: '<?= base_url('asset/backend/vendor/ckfinder/ckfinder.html');?>',
        filebrowserImageBrowseUrl: '<?= base_url('asset/backend/vendor/ckfinder/ckfinder.html?Type=Images');?>',
        filebrowserUploadUrl: '<?= base_url('asset/backend/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files');?>',
        filebrowserImageUploadUrl:'<?= base_url('asset/backend/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')?>',
        extraPlugins: 'codesnippet',
        codeSnippet_theme: 'monokai_sublime'
    };
</script>
<script>
    CKEDITOR.replace('editor', options);
</script>