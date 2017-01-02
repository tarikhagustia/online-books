<div class="x_panel">
  <div class="x_title">
    <h2>Buat Kategori Baru</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <?php echo validation_errors('<div class="alert alert-danger">' , '</div>'); ?>
    <?php echo form_open('myadmin/category/new') ?>
      <div class="form-group">
        <label for="category_name">Nama Kategori</label>
        <input type="category_name" class="form-control" id="category_name" placeholder="Nama Kategori" name="category_name">
      </div>
      <button type="submit" class="btn btn-default">Buat Baru</button>
    <?php echo form_close() ?>
  </div>
</div>
