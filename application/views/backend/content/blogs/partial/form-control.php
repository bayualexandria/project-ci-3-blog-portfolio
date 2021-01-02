 <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

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
             <input type="file" class="custom-file-input is_invalid" name="image" id="customFile" value="<?= set_value('image')??$blog['image']; ?>" />
             <label class="custom-file-label" for="customFile">Choose file</label>
             <?= form_error('image', '<small class="text-danger pl-3">', '</small>') ?>
         </div>
     </div>
     <div class="col-md-5">
         <label for="kategori">Kategori</label>
         <select name="id_kategori" id="kategori" class="custom-select">
             <option value="">
                 <-- Pilih Kategori -->
             </option>
             <?php foreach($kategori as $k):?>
             <option value="<?= $k['id'];?>"><?= $k['kategori'];?></option>
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
     <button type="primary" class="btn btn-primary btn-sm"><?= $submit;?></button>
 </div>