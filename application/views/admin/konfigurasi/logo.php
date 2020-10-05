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
echo form_open_multipart(base_url('admin/konfigurasi/logo'),' class="form-horizontal"');
 ?>

 <div class="form-group form-group-lg">
  <label  class="col-md-2 control-label">Nama Website</label>
  <div class="col-md-8">
    <input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required >
  </div>
</div>

 <div class="form-group">
  <label  class="col-md-2 control-label">Upload Logo Baru</label>
  <div class="col-md-8">
    <input type="file" name="logo" class="form-control" placeholder="Upload logo baru" value="<?php echo $konfigurasi->logo ?>" required >
    Logo Lama : <br><img src="<?php echo base_url('assets/upload/image/' .$konfigurasi->logo) ?>" class="img img-responsive img-thumbnail" width="200">
  </div>
</div>

<div class="form-group">
  <label  class="col-md-2 control-label"></label>
  <div class="col-md-5">
   <button class="btn btn-success btn-lg" nama="submit" type="submit">
   	<i class="fa fa-save">Simpan</i>
   </button>
   
     <button class="btn btn-info btn-lg" nama="reset" type="reset">
     	<i class="fa fa-times">Reset</i>
     </button>
   
  </div>
</div>


 <?php echo form_close(); ?>