<?php
//notifikasi
if ($this->session->flashdata('sukses')) {
  echo '<p class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<?php 
//error upload
if (isset($error)) {
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}

//notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

//form open
echo form_open_multipart(base_url('admin/konfigurasi/icon'),' class="form-horizontal"');
 ?>

 <div class="form-group form-group-lg">
  <label  class="col-md-2 control-label">Nama Website</label>
  <div class="col-md-8">
    <input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required >
  </div>
</div>

 <div class="form-group">
  <label  class="col-md-2 control-label">Upload Icon Baru</label>
  <div class="col-md-8">
    <input type="file" name="icon" class="form-control" placeholder="Upload icon baru" value="<?php echo $konfigurasi->icon ?>" required >
    Icon Lama : <br><img src="<?php echo base_url('assets/upload/image/' .$konfigurasi->icon) ?>" class="img img-responsive img-thumbnail" width="200">
  </div>
</div>

<div class="form-group">
  <label  class="col-md-2 control-label"></label>
  <div class="col-md-5">
   <button class="btn btn-success btn-md" nama="submit" type="submit">
   	<i class="fa fa-save"> Simpan</i>
   </button>

  </div>
</div>


 <?php echo form_close(); ?>